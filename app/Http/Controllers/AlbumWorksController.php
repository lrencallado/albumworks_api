<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AlbumWorksController extends Controller
{
    
    public function list(Request $request)
    {
        $data = $request->input('data');
        $arrLetter = [];
        
        for ($i=0; $i < count($data) ; $i++) { 
            
            if(!preg_match("/^[a-zA-Z]$/", $data[$i]) || in_array($data[$i], $arrLetter)){
                return response()->json("Failed", 420);
            }

            array_push($arrLetter, $data[$i]);

        }

        return response()->json("Success", 200);
        
        
    }

}
