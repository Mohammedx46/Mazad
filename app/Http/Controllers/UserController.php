<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show All Users
    public function index()
    {
        $users  = User::latest() ;
        $count = User::count();;
        return view('mazad_admin.screens.users.users', [
            "heading" => "كل المستخدمين",
            "users" => $users->paginate(5),
            "allUsersCount" => $count,
        ]);
    }

    //Show Sign In Form
    public function create()
    {
        return view('users.signup');
    }

    public function store(Request $request)
    {        
        // dd($formFields);
        $formFields = $request;
        if ( $formFields['is_confirm_terms'])
        {
            $formFields = $request->validate([
                'is_confirm_terms'=> ['required','accepted'],
            ]);
            $formFields['user_status'] = 3;
            $formFields['subscription_type']= 0 ;
        }
        $formFields = $request->validate([
            'first_name'=> ['required'],
        	'last_name'=>['required'],
        	'email'=>['required','email', Rule::unique('users', 'email')],
        	'phone_number'=>['required', 'numeric','digits:9'],
        	'password'=>['required','confirmed', 'min:8'],    
            'user_status'=> ['required'] ,  
            'subscription_type' => ['required', 'numeric'],     
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['insurance_amount'] = 0;
        $formFields['is_bidding'] = false;
        

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', "تم إضافة المستخدم وتسجيل الدخول"); 
    
    }

    //Show Sign In Form
    public function edit(User $user)
    {
        return view('mazad_admin.screens.users.edit_user', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        // dd($formFields);
        
        $formFields = $request->validate([
            'first_name'=> ['required'],
        	'last_name'=>['required'],
        	'email'=>['required','email', Rule::unique('users', 'email')],
        	'phone_number'=>['required', 'numeric','digits:9'],
        	'password'=>['required','confirmed', 'min:8'],    
            'user_status'=> ['required'] ,  
            'subscription_type' => ['required', 'numeric'],     
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['insurance_amount'] = 0;
        $formFields['is_bidding'] = false;
        
        $user->update($formFields);


        return redirect('/usersShow')->with('success', 'تم تعديل  المستخدم بنجاح');
    }

    // Login 
    public function login()
    {
        return view('users.login');
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

        return redirect('/')->with('danger', 'تم تسجيل خروجك!');
    }

    // Show products of specific user
    public function userProducts()
    {
        return view('author', [
            // 'products' => auth()->user()->products()->get()
        ]);
    }
}
