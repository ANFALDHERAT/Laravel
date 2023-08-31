<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class usercontroler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        $users = User::all();
        $username1 = false;
        $password1 = false;
        foreach($users as $user){
            if($user['email'] == $username){
                $username1=true;
            }
        }
        if($username1){
            foreach($users as $user){
                if($user['password'] == $password){
                    $password1 =true;
                }
            }
        }


    if($username1 && $password1){
        return view('index');
    }else{
        echo '<div class="alert alert-danger" role="alert" style="text-align: center;">wrong password</div>';
        return view('login');
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
