<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\upload;


class UploadFile extends Controller
{
    // public function fileImportExport()
    // {
    //    return view('users');
    // }

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
                // dd($user);
                $reset ['name'] = $user [0];
                $reset ['email'] = $user [1];
                $reset ['address'] = $user [2];
                // dd($reset);
                UploadFile::saveExcel($reset);
                $x++;
                $result[]=$reset;
            }
            
        }
        // dd($result);
        return view('users')->with('excel',$result);//將輸入結果丟到user 進行foreach
        
    
    }//

    public function saveExcel($data)
    {
        // dd($data['name']);
       $user = new upload;
       $user->name = $data['name'];
       $user->email= $data['email'];
       $user->address = $data['address'];
       $user->save();
    }


}
