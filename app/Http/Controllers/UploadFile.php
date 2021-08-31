<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class UploadFile extends Controller
{
    public function fileImportExport()
    {
       return view('users');
    }

    public function fileImport(Request $request) 
    {
        // dd($request->file('file'));
        // return $request->all();
        if(!$request->hasFile('file')){
            exit('上傳檔案為空！');
        }
        $rows = Excel::toArray(new UsersImport, $request->file('file'));
        // dd($rows[0]);
        return view('users')->with('excel',$rows[0]);
        // return response()->json(["rows"=>$rows]);
    
    }//

}
