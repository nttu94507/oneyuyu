<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\upload;


class UploadFile extends Controller
{
    public function fileImportExport()
    {
       return view('users');
    }

    public function fileImport(Request $request) 
    {
        // dd($request->file('file'));
        $x = 1;
        if(!$request->hasFile('file')){
            exit('上傳檔案為空！');
        }
        $rows = Excel::toArray(new UsersImport, $request->file('file'));
        $row = $rows[0];
        $result = [];
        foreach($row as $index=>$user){
            if ($index == 0){

            }else{
               UploadFile::saveExcel($user);
               $x++;
               $result[]=$user;
            }
            
        }

        return view('users')->with('excel',$result);//將輸入結果丟到user 進行foreach
        
    
    }//

    public function saveExcel($data)
    {
        // dd($data);
       $user = new upload;
       $user->name = $data[0];
       $user->email= $data[1];
       $user->address = $data[2];
       $user->save();
    }


}
