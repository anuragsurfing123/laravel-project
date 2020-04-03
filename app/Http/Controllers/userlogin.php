<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class userlogin extends Controller
{
    //




    public function register(Request $req){
        if(
        $req->validate([
            'username'=>"required",
            'email'=>"required | email",
            'password_1'=>"required",
            'password_2'=>"required|same:password_1",
            
        ])){
        return DB::table('users')->insertorIgnore(['username'=>$req->username,'email'=>$req->email,'user_type'=>'user','password'=>md5($req->password_2)]);
    }
    }

    public function login(Request $req){
        if(
        $req->validate([
            'username'=>"required",
            
            'password'=>"required",
            
        ])){
            // $loginuser= DB::table('users')->select('username','password','user_type')->where(['username'=>$req->username,'password'=>md5($req->password),'user_type'=>'user'])->get();
            // $loginadmin= DB::table('users')->select('username','password','user_type')->where(['username'=>$req->username,'password'=>md5($req->password),'user_type'=>'admin'])->get();
            
               if(sizeof(DB::table('users')->select('username','password','user_type')->where(['username'=>$req->username,'password'=>md5($req->password),'user_type'=>'user'])->get())!=0){
                $req->session()->put('my_name',$req->username);
                $usert=$req->session()->get('my_name');
                   return view('index');
               }
               else if(sizeof(DB::table('users')->select('username','password','user_type')->where(['username'=>$req->username,'password'=>md5($req->password),'user_type'=>'admin'])->get())!=0){
               
                $req->session()->put('my_name',$req->username);
                $admint=$req->session()->get('my_name');
                return view('admin.home1');
            }
            else{
                echo "error";
            }

            
        
    }


    
    }



    public function updatepassword(Request $req){
        if(
        $req->validate([
            
            'npwd'=>"required",
            'cpwd'=>"required|same:cpwd",
            
        ])){
            DB::table('users')
            ->updateOrInsert(
                ['password' => md5($req->cpwd)]
               
            );
    }
    }

    

}
