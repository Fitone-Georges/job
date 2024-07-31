<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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

    public function loginPost(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $credentials = $request->only('email', 'password'); // requesting only email & password to login
        
        if (Auth::attempt($credentials)) {
            /** @var User $users */
          
            $user = Auth::user();
            if ($user->role === 'job_seeker') {
                return view('search', ['users' => $users ?? []]);
            } elseif ($user->role === 'job_poster') {
                return redirect()->route('blog');
            }
        }
        
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
    public function registrationPost(Request $request)
    {
        // Validate the role input
        $request->validate([
            'role' => 'required|in:job_seeker,job_poster',
        ]);
    
        // Check if the user is authenticated
        if (!Auth::check()) {
            // If the user is not authenticated, redirect based on the role selected
            if ($request->role == 'job_poster') {
                return redirect()->route('jpr')->withErrors(['error' => 'User not authenticated, but redirecting to job poster page']);
            } else {
                return redirect()->route('jsr')->withErrors(['error' => 'User not authenticated, but redirecting to job seeker page']);
            }
        }
    
        // If the user is authenticated, assign the role to the user and save
        $user = Auth::user();
        $user->role = $request->role;
    
        // Debugging: Log the role before saving
        Log::info('Role to be saved: ' . $user->role);
    
        if ($user->save()) {
            // Redirect based on the user's role
            if ($user->role == 'job_poster') {
                return redirect()->route('jpr'); // Redirect to the job poster route
            } else {
                return redirect()->route('jsr'); // Redirect to the job seeker route
            }
        }
    
        // Handle the case where save operation fails
        return back()->withErrors(['error' => 'Failed to update user role']);
    }
    public function jsrPost (Request $request)
    {  
        //Log::info('Received registration request' , $request->all()); //......reste of the code
        
        $validator= Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
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
             
            'role' => 'job_seeker',
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

            'role' => 'job_poster',
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

    public function showPosts()
    {
        $users = User::where('role', 'job_poster')->get();
    
        // Log the users to check
        \Log::info('Users:', $users->toArray());
    
        return view('search', compact('users'));
    }}