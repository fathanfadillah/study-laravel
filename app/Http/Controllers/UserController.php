<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;

class UserController extends Controller
{
        public function getLogin(){
        return view('users.login');
    }

    public function getRegister(){
        return view('users.register');
    }

    public function postLogin(Request $request, User $user){
        $request->validate([
            // 'usernama'=>'required',
            'email'=>'required',
            'password'=>'required',
            // 'foto'=> 'image|nullable|max:2000'
        ]);

        // $user = array([
        //     'email'=>$request->email,
        //     'password'=>$request->password
        // ]);

        // dd($user);

        // dd($user);
        
        if(!\Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ])){
        
                

            return redirect('login')->with('status','SALAH');
            
            }

            return redirect('/')->with('status','BENAR');
            

    
        // User::create([
        //     // 'username' => $request->username,
        //     'email' => $request->email,
        //     'password' =>   ($request->password)
        // ]);

        // dd($users);
        
     
    }

    public function postRegister(Request $request, User $users){
       
       
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
                                    // nama tabel
            'password'=>'required|confirmed',
            // confirmed untuk cek password dengan confirm
            // 'foto'=> 'image|nullable|max:2000'
        ]);
       
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       
    return redirect('/')->with('status','registered');
        
        // return $request;
    }
}
