<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class user extends Controller
{
    //
    public function laundryuser() {
        $users = DB::select('select * from laundry_type');
        return view('services',['users'=>$users]);
     }
}
