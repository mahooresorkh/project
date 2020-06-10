<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
class UserController extends Controller
{
    public function verification(Request $request){
        $item = App::where([
            ['name','=',$request->input('name')],
            ['version','=',$request->input('version')],
        ])->get();

        if ($item){
            $matched = true;
        }
        else{
            $matched = false;
        }

        return response()->json([
            'matched' => $matched
        ]);
    }
}
