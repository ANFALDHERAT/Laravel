<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustmerAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('login');
    }
   public function login(Request $request)
  {
    $request->validate([
'email'=>'required',
'password'=>'required',
    ]);
 $credentials=$request->only('email','password');
 if(Auth::attempt($credentials))
 {
    return redirect()->intended('dashboard')->with('message','sign in!');
 }
 return redirect('/login')->with('message','login details are not valid!');
   }


   public function signup()
   {
    return view('regestration');
   }

   public function signupsave(Request $request)
   {
    $request->validate([
       'name'=>'required',
       'email'=>'required|email',
       'password'=>'required|min:6',

    ]);

    $data=$request->all();
    $check=$this->create($data);

    return redirect("dashboard");
   }
    /**
     * Show the form for creating a new resource.
     */
    public function create(array $data)
    {
return User::create([
'name'=>$data['name'],
'email'=>$data['email'],
'password'=>Hash::make($data['password']),

]);
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        return redirect('/login');
    }

    public function signout()
    {
        Session::flash('message', 'You have successfully signed out.');
        Auth::logout();
        return redirect('login');
    }



}
