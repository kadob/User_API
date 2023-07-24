<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user=User::create([
            'name' => $request->name,
            'age' => $request->age,         
        ]);
        
        return response()->json($user->id);//Created
    }
    
    public function fetch(Request $request)
    {   
        $user = User::find($request->id);
        
        if(!$user){
            return response()->json(['NotFound' => '対象のレコードが見つかりません。'],404);
        }
        
        return response()->json($user);//OK
    }
    
    public function update(Request $request)
    {
        $user = User::find($request->id);
        
        if(!$user){
            return response()->json([ 'NotFound' => '対象のレコードが見つかりません。' ],404);
        }
        
        $user->update([
            'name' => $request->name,
        ]);
        
        return response()->json($user);//OK
    }
    
    public function delete(Request $request)
    {   
        $user = User::find($request->id);
        
        if(!$user){
            return response()->json([ 'NotFound' => '対象のレコードが見つかりません。' ],404);
        }
        
        $user->delete();
        
        return response()->json([ 'OK' => '対象のレコードを削除しました。' ],200);
    }
}
