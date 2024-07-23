<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }
    function welcome()
    {
        return view('welcome');
    }

    function jpr()
    {
        return view('jpr');
    }
    function jsr()
    {
        return view('jsr');
    }
    function registration()
    {
        return view('registration');
    }
    function job()
    {
        return view('job');
    }
    function search()
    {
        return view('search');
    }
    function blog()
    {
        return view('blog');
    }

    function loginPost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');         //requesting only email & password to login

        if (Auth::attempt($credentials)) {

            /** @var User $users */
            $user = Auth::User();
            if ($user->role == 'job_poster') {
                return redirect()->route('blog'); // Redirect to the jpr
            }
        
            return redirect()->route('search');
        }

}


 function registrationPost(Request $request)
{
    $request->validate([
        'role' => 'required|in:job_seeker,job_poster',
    ]);

    $user = Auth::user();
    $user->role = $request->role;
    $user->save();

    if ($user->role == 'job_poster') {
        return redirect()->route('jpr'); // Redirect to the jpr
    }

    return redirect()->route('jsr');
}

function jsrPost(Request $request)
{
    $request->validate([   //from line 54-66 if the users name , email , password are correct return a successful message to the user  else return an error message
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'first_name' => 'required',
        'tel' => 'required' ,
        'specialty' => 'required',
        'date_of_birth' => 'required',

    ]);
    $data['name'] = $request-> input('name');
    $data['email'] = $request-> input('email');
    $data['password'] =Hash::make( $request-> input('password'));  
    $data['first_name'] = $request-> input('first_name');
    $data['tel'] = $request-> input('tel');
    $data['specialty'] = $request-> input('specialty');
    $data['date_of_birth'] = $request-> input('date_of_birth');
       $user = User::create($data);
       if(!$user){
           return redirect(route('registration'))->with("error", "registration failed");
       }
       return redirect(route('login'))->with("success", "registration successful");
}

function jprPost(Request $request)
{
    $request->validate([   //from line 54-66 if the users name , email , password are correct return a successful message to the user  else return an error message
        'company_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'company_location' => 'required',
        'tel' => 'required' ,
        'specialty' => 'required',
        'date_of_birth' => 'required',

    ]);
    $data['company_name'] = $request-> input('company_name');
    $data['email'] = $request-> input('email');
    $data['password'] =Hash::make( $request-> input('password'));  
    $data['company_location'] = $request-> input('company_location');
    $data['representative_name'] = $request-> input('representative_name');
    $data['representative_address'] = $request-> input('representative_address');
    $data['representative_tel'] = $request-> input('representative_tel');
       $user = User::create($data);
       if(!$user){
           return redirect(route('registration'))->with("error", "registration failed");
       }
       return redirect(route('login'))->with("success", "registration successful");
}

function blogPost(Request $request)
{
    $request->validate([   //from line 54-66 if the users name , email , password are correct return a successful message to the user  else return an error message
        'company_name' => 'required',
        'email' => 'required|email|unique:users',
        'job_description' => 'required',
        'salary_wages' => 'required',
        'enterprise_domain' => 'required' ,
        'enterprise_location' => 'required',

    ]);
    $data['company_name'] = $request-> input('company_name');
    $data['email'] = $request-> input('email');
    $data['job_description'] =Hash::make( $request-> input('job_description'));  
    $data['salary_wages'] = $request-> input('salary_wages');
    $data['enterprise_domain'] = $request-> input('enterprise_domain');
    $data['enterprise_location'] = $request-> input('enterprise_location');

       $user = User::create($data);
       if(!$user){
           return redirect(route('blog'))->with("error", "Post failed");
       }
       return redirect(route('welcome'))->with("success", "Post successful");
}

}
