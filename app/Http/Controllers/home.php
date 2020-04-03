<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class home extends Controller
{
    //
    public function home(){
        $users = DB::table('users');
        return view('admin.home1',['users'=>$users]);

    }
    public function index() {
        $users = DB::select('select * from laundry_type');
        return view('admin.laundry_type',['users'=>$users]);
     }

     public function laundry_type(Request $req){
        DB::table('laundry_type')->insert(
            array('laun_type_desc' => $req->laundry_desc, 'laun_type_price' => $req->laundry_price)
        );
        return redirect('laundry_type');
     }

     public function delete_type(Request $req){
        
        
            $check=$req->input('check');
            
            DB::table('laundry_type')->whereIn('laun_type_id', $check)->delete();
           
            
            
            return redirect('laundry_type');
        }
        
        



       
        
     
     public function newlaundry1() {
        $users = DB::select('select * from laundry,laundry_type where laundry.laun_type_id=laundry_type.laun_type_id');
        return view('admin.newlaundry',['users'=>$users]);
        if(isset($req->new_customer)){
            $check=$req->input('check');
            
            DB::table('laundry_type')->whereIn('laun_type_id', $check)->delete();
           
            
            
            return redirect('laundry_type');

        }

        
     }
     public function newlaundry2(Request $req) {
        DB::table('laundry')->insert(
            array('customer_name' => $req->customer, 'laun_priority' => $req->priority,'laun_weight' => $req->weight, 'laun_type_id' => $req->type_id)
        );
        return redirect('newlaundry');
     }




     public function newlaundry3(Request $req) {
       
        
            $check=$req->input('check');
            if(isset($req->delete_customer)){
            DB::table('laundry')->whereIn('laun_id', $check)->delete();
        }
        elseif(isset($req->claim_laundry)){
            DB::table('laundry')->whereIn('laun_id', $check)->increment('laun_claimed', 1);

        }
            return redirect('newlaundry');
     }
     public function newlaundry4(Request $req) {
       
        
 }










}
