<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view('Home');
    }

    public function about()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
      
        return view('About');
    }


    public function service()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Service");
    }
    public function portfolio()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Portfolio");
    }

    public function team()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Team");
    }
    public function contact()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Contact");
    }
    public function blog()
    {

        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Blog");
    }
    public function login()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view("Login");
    }

    public function registration()
    {
        if(Auth::check()){

            return redirect()->route('admin');
        }
        return view('Registration');
    }


    public function admin_profile_page($id)
    {
        $user = User::find($id);

        return view('admin.admin-profile',compact('user'));
    }

    public function user_page()
    {
        $user=auth()->user();

        return view('admin.user',compact('user'));
    }


    public function update(Request $request)
    {

        $id=$request['id'];
        $user = User::find($id);

        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];

        $user->save();
        $user=auth()->user();
        return view('admin.user',compact('user'))->with('status','Data Updated Successfully');
    }
    public function admin()
    {
        $user=auth()->user();
         $users= User::all();

        
        return view('admin.index',compact('user'),['users'=>$users]);
    }

     public function team_Page()
    {
        $user=auth()->user();
        
        return view('admin.team',compact('user'));
    }

     public function contact_page()
    {
        $user=auth()->user();
        
        return view('admin.contact',compact('user'));
    }

    public function chat_page()
    {
        $user=auth()->user();
        
        return view('admin.chat',compact('user'));
    }
    public function user_info_page()
    {
        $users= User::all();
        $user=auth()->user();
   
        return view('admin.user-info',compact('user'),['users'=>$users]);
    }
  
  

    public function login_details(Request $request)
    {  
        

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return Redirect()->route('admin');
        }
        else
        {
            return Redirect()->back()->with('fail',"Inavalid Email or Password");
        }
    }

    public function register(Request $request)
    {
        $user = new User;
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',
            ]);
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=Hash::make($request['password']);
            $user->save();
            return redirect('/login')->with('status','Account Created');      
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }


}
