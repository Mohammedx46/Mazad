<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
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
        $formFields['Insurance amount'] = 0;
        $formFields['is_bidding'] = false;
        

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', "تم إضافة المستخدم وتسجيل الدخول"); 
    
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
            'products' => auth()->user()->products()->get()
        ]);
    }
}
