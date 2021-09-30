<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required',
        ]);
        auth()->attempt(['name'=>$request->input('name'),'password'=>$request->input('password')]);
        if(! auth()->attempt(['name'=>$request->input('name'),'password'=>$request->input('password')])){
            return back()->with('status','account is invalid!');
        }else{
             return redirect()->route('home');
        }  
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
    public function myinfo(User $id){
        $info=User::where('id',$id->id)->get();
        return view('auth.myinfo',[
            'info'=>$info,
        ]);
    }
}
