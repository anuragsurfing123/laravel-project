<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LaravelGoogleGraph extends Controller
{
    //
    function index()
    {
     $data = DB::table('laundry_type')
       ->select(
        DB::raw('laun_type_desc as laun_type_desc'),
        DB::raw('count(*) as number'))
       ->groupBy('laun_type_desc')
       ->get();
     $array[] = ['Laundry Type', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->laun_type_desc, $value->number];
     }
     return view('admin.google_pie_chart')->with('laun_type_desc', json_encode($array));
    }
}
