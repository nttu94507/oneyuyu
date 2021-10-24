<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Users extends Controller
{

    public function Users(Request $request) 
    {
        $users = DB::table('transactions')->get();
        $result =[];
        foreach ($users as $user){
            // dd($user->name);
            $reset['name'] = $user->name;
            $reset['email'] = $user->email;
            $reset['address'] = $user->address;
            $result []= $reset;
        }
       
        if ($result){
            // dd($users);
            return view('users')->with('excel',$result);
        }else{
            return view('users')->with('excel',null);
        }
        
    }
    //
}
