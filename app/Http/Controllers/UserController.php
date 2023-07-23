<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function register(User $user,UserRequest $request)
    {
        $input = $request['register'];//requestに含まれるregister配列形式
        $user->fill($input)->save();//Userモデルの$fillableを保存する
        return redirect('/user/' . $user->id);//詳細画面へリダイレクトする
    }
    
    public function get(User $user)
    {   
        return view('users/detail')->with(['user' => $user]);//詳細画面を返す
    }
    
    public function edit(User $user)
    {
        return view('users/edit')->with(['user' => $user]);//編集画面を返す
    }
    
    public function update(UserRequest $request,User $user)//registerメソッドと同様の動きをする
    {
        $input_user = $request['register'];
        $user->fill($input_user)->save();
        return redirect('/user/' . $user->id);
    }
    
    public function delete(User $user)
    {   
        $user->delete();//$userを削除する
        return redirect('/');//登録表示にリダイレクトする
    }
}
