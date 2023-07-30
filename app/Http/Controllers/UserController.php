<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //ユーザーの新規登録
    public function register(Request $request)
    {
        //json形式でリクエストのデータを取得    
        $jsondata = $request->all();
        
        //リクエストに含まれるnameとageを保存
        $user = User::create([
            'name' => $jsondata['name'],
            'age' => $jsondata['age'],
        ]);
        
        //idのみを返す
        return response()->json([ 'id' => $user->id], 201);//Created
    }
    
    //ユーザーの取得
    public function fetch(Request $request,User $user)//暗黙の結合で$userにはidが含まれている
    {
        //json形式でリクエストのデータを取得
        $jsondata = $request->json()->all();
        
        //idが存在しない場合、404を返す
        if(!$user){
            return response()->json(['NotFound' => '対象のレコードが見つかりません。'],404);
        }
        
        //名前と年齢を返す
        return response()->json(['name' => $user->name,'age' => $user->age,]);//OK
    }
    
    //ユーザーの更新
    public function update(Request $request,User $user)
    {
        //json形式でリクエストのデータを取得
        $jsondata = $request->json()->all();
        
        if(!$user){
            return response()->json([ 'NotFound' => '対象のレコードが見つかりません。' ],404);
        }
        
        //リクエストに含まれるnameを更新
        $user->update([
            'name' => $jsondata->name,
        ]);
        
        return response()->json(['name' => $user->name,'age' => $user->age,]);//OK
    }
    
    //ユーザーの削除
    public function delete(Request $request,User $user)
    {   
        //json形式でリクエストのデータを取得
        $jsondata = $request->json()->all();
        
        if(!$user){
            return response()->json([ 'NotFound' => '対象のレコードが見つかりません。' ],404);
        }
        
        //ユーザーを削除する
        $user->delete();
        
        return response()->json([ 'OK' => '対象のレコードを削除しました。' ],200);
    }
}
