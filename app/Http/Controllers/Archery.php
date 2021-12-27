<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\score;
use Illuminate\Database\Eloquent\Model;

class Archery extends Controller
{
    public function archery(Request $request){
        // $gamelist = score::all();
        // return respone()->json($gamelist);
        return view('archery');
    }

    public function countscore(Request $request){
        $score = new score;

        $score->shot1=$request->shot1;
        $score->shot2=$request->shot2;
        $score->shot3=$request->shot3;
        $score->shot4=$request->shot4;
        $score->shot5=$request->shot5;
        $score->shot6=$request->shot6;
        $score->total=$request->total;

        $result = $score->save();
        

        return $result;

    }

    public function showscore(Request $request){

        $score = score::find(1);
        $result = [];
        foreach ($score as $val){
            // $result[] = $score;
            // $result[] = $val;
        }
  

        return $score;
    }


    //
    
}
