<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadFile extends Controller
{
    public function import() 
    {
        Excel::import(new UploadFile, 'users.xlsx');
        
        return redirect('/users')->with('success', 'All good!');
    }//
}
