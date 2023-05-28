<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller{
    public function show(){
        return view("/login");
    }
     public function logout(){
        Auth::logout();
        return redirect("/login");
     }
     public function handle(Request $request){
        $success=Auth::attempt([
            "email"=>$request->input("email"),
            "password"=>$request->input("password")
        ]);
        if ($success) return redirect("/dashborad");
        return redirect("/login");
     }
     public function dash(){
        return view("/dashboard");
     }

}