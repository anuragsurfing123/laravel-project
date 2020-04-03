<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
class laundy extends Controller
{
    //

    public function index() {
        $users = DB::select('select * from users')->get();
        return view('laundry_type',['users'=>$users]);
     }
}
