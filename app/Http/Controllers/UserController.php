<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends Controller
{
    // Show All Users
    public function index()
    {
        // $users  = User::latest() ;
        $count = User::count();
        $users = User::latest()->filter(request(['search']))->paginate(9);

        return view('mazad_admin.users.users', [
            "heading" => "كل المستخدمين",
            "users" => $users,
            "allUsersCount" => $count,
        ]);
    }

    //Show Sign In Form
    public function create()
    {
        $urlConst = 'http://127.0.0.1:8000/';
        $roles = Roles::all();
        if (URL::full() == $urlConst.'users/create')
        {        
            return view('mazad_admin.users.add_user', [
                'heading' => "إنشاء حساب",
                'roles' => $roles,
            ]);
        }
        return view('users.signup', [
            'heading' => "إنشاء حساب",
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {        
        // dd($request);
        $formFields = $request;
        if ( $formFields['is_confirm_terms'])
        {
            $formFields['is_confirm_terms'] = 1 ;
            $formFields = $request->validate([
                'first_name'=> ['required'],
                'last_name'=>['required'],
                'email'=>['required','email', Rule::unique('users', 'email')],
                'phone_number'=>['required', 'numeric','digits:9'],
                'password'=>['required','confirmed', 'min:3'],   
                'is_confirm_terms'=> ['required','accepted'],
            ]);
            $formFields['user_status'] = 3;
            $formFields['subscription_type']= 0 ;
            $formFields['insurance_amount'] = 0;
            $formFields['role_id'] = 3;
        }
        else{
            
            $formFields = $request->validate([
                'first_name'=> ['required'],
                'last_name'=>['required'],
                'email'=>['required','email', Rule::unique('users', 'email')],
                'phone_number'=>['required', 'numeric','digits:9'],
                'password'=>['required','confirmed', 'min:3'],    
                'user_status'=> ['required'] ,  
                'subscription_type' => ['required', 'numeric'],
                'role_id' => ['required'], 
            ]);
            $formFields['is_confirm_terms'] = 1;
        }
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['insurance_amount'] = 0;
        $formFields['is_bidding'] = false;  

        // Store Image
        if ($request->hasFile('user_image_location')) {

            $formFields['user_image_location'] = $request->file('user_image_location')->store('user_image_locations', 'public');
        }      

        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('success', "تم إضافة المستخدم وتسجيل الدخول"); 
    
    }

    //Show Sign In Form
    public function edit(User $user)
    {
        $roles = Roles::all();
        return view('mazad_admin.users.edit_user', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request, User $user)
    {
        // dd($formFields);
        $formFields = $request->validate([
            'first_name'=> ['required'],
        	'last_name'=>['required'],
        	'email'=>['required','email'],
        	'phone_number'=>['required', 'numeric','digits:9'],
        	'password'=>['required','confirmed', 'min:3'],    
            'user_status'=> ['required'] ,  
            'subscription_type' => ['required', 'numeric'],  
            'insurance_amount' =>['required'], 
            'role_id' => ['required'],  
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['is_bidding'] = false;
        
        $user->update($formFields);


        return redirect('/usersShow')->with('success', 'تم تعديل  المستخدم بنجاح');
    }

    // Delete User
    public function delete(User $user)
    {
        $user->delete();
        return back()->with('danger' , "تم حذف المستخدم بنجاح");
    }

    // Login 
    public function login()
    {
        return view('users.login',[
            'heading' => "تسجيل الدخول",
        ]);
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
        	'email'=>['required','email'],
        	'password'=>['required'],      
        ]);

        if (auth()->attempt($formFields))
        {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'تم تسجيل دخولك ');
        }

        return back()->withErrors(['email'=> 'يرجى التحقق من صحة البيانات'])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('danger', 'تم تسجيل خروجك!');
    }

    // Show products of specific user
    public function userProducts()
    {
        return view('author', [
            // 'products' => auth()->user()->products()->get()
        ]);
    }
}
