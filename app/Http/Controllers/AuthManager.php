<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthManager extends Controller {
    public function login() {
        return view( 'login' );
    }

    public function welcome() {
        return view( 'welcome' );
    }

    public function jpr() {
        return view( 'jpr' );
    }

    public function jsr() {
        return view( 'jsr' );
    }

    public function registration() {
        return view( 'registration' );
    }

    public function job() {
        return view( 'job' );
    }

    public  function search() {
        return view( 'search' );
    }

    public function blog() {
        return view( 'blog' );
    }

    public function loginPost( Request $request ) {
        $validator = Validator::make( $request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ] );
        $credentials = $request->only( 'email', 'password' );
        // requesting only email & password to login
      
        //verifier si l'utilisateur est authentifier 

        if(Auth::attempt($credentials) && Auth::user()->role==='job_seeker' )
        {
          
                return redirect()->route('search');
        }
        else if (Auth::attempt($credentials) && Auth::user()->role==='job_poster' ){
           
        return redirect()->route('blog');
        }
        else
        {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function registrationPost(Request $request) {
        // Validate the role input
        $request->validate([
            'role' => 'required|in:job_seeker,job_poster',
        ]);
    
        // Check if the user is authenticated
        $user = Auth::user();
    
        if (!$user) {
            if ($request->role == 'job_poster') {
                return redirect()->route('jpr')->withErrors(['error' => 'User not authenticated, but redirecting to job poster page']);
            } else {
                return redirect()->route('jsr')->withErrors(['error' => 'User not authenticated, but redirecting to job seeker page']);
            }
        }
    
        // If the user is authenticated, assign the role to the user and save
        $user->role = $request->role;
    
        if ($user->save()) {
            if ($user->role == 'job_poster') {
                return redirect()->route('jpr'); // Redirect to the job poster route
            } else {
                return redirect()->route('jsr'); // Redirect to the job seeker route
            }
        }
    
        return back()->withErrors(['error' => 'Failed to update user role. Debug info: User ID: ' . $user->id . ', Role: ' . $request->role]);
    }
    public function jsrPost (Request $request)
    {  
        //Log::info('Received registration request' , $request->all()); //......reste of the code
        
        $validator= Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string',
            'tel' => 'required|string',
            'speciality' => 'required|string',
            'date_of_birth' => 'required|string',
            
        ]); 
    
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'first_name' => $request->input('first_name'),
            'tel' => $request->input('tel'),
            'speciality' => $request->input('speciality'),
            'date_of_birth' => $request->input('date_of_birth'),
             
        ];
        $user = User::create($data);
        $user->save();
       
        if (!$user) {
            return redirect(route('login'))->with('success', 'Registration successful');
        }
 
        
        return redirect(route('login'))->with('Error');
    }
    
    public function jprPost (Request $request)
    {
        // Validate the request data
        $validator= Validator::make($request->all(),[
            'company_name' =>  'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'company_location' =>  'required|string',
            'representative_name' =>  'required|string',
            'representative_address' =>  'required|string',
            'representative_tel' =>  'required|string',
        ]);

        // Prepare the data for insertion
        $data = [
            'company_name' => $request->input('company_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'company_location' => $request->input('company_location'),
            'representative_name' => $request->input('representative_name'),
            'representative_address' => $request->input('representative_address'),
            'representative_tel' => $request->input('representative_tel'),
        ];

        $user = User::create($data);
        $user->save();

        if (!$user) {
            return redirect(route('login'))->with('success', 'Registration successful');
        }

        return redirect(route('login'))->with('Error');
    }

    public function blogPost (Request $request)
    {
        // Validate the request data
        $validator= Validator::make($request->all(),[
            'company_name' => 'required',
            'email' => 'required|email|unique:users',
            'job_description' => 'required',
            'salary_wages' => 'required',
            'enterprise_domain' => 'required',
            'enterprise_location' => 'required',
        ]);

        // Prepare the data for insertion
        $data = [
            'company_name' => $request->input('company_name'),
            'email' => $request->input('email'),
            'job_description' => $request->input('job_description'),
            'salary_wages' => $request->input('salary_wages'),
            'enterprise_domain' => $request->input('enterprise_domain'),
            'enterprise_location' => $request->input('enterprise_location'),
        ];

        
        $user = User::create($data);
        $user->save();
        

        if (!$user) {
            return redirect(route('search'))->with('error', 'Post failed');
        }

        return redirect(route('search'))->with('success', 'Post successful');
    }

    public function allBloPost(Request $request)
    {
        $users=User::all();
        return  view('search',compact('users' ) );
        }

        public function jobpost(Request $request)
{
    // Validate and process the job application...

    // Set flash message
    $request->session()->flash('job_apply_sent', 'Job Apply Sent!!!');

    // Redirect back or to a specific route
    return redirect()->back();
}
function logout() {
    //Session::flush();
    Auth::logout();
    session()->flash('message', 'Good-bye!');
    return redirect(route('login'));
}
    }