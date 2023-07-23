<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>edit</title>
    </head>
    <body>
        <h1 class="title">ユーザー編集画⾯</h1>
        <form action="/user/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='name'>
                <h2>名前</h2>
                <!--編集前の名前が表示されているテキストボックス-->
                <input type='text' name='register[name]' value="{{ $user->name }}">
                <!--register.nameのエラーの最初を表示-->
                <p class="name_error" style="color:red">{{ $errors->first('register.name') }}</p>
            </div>
            <div class='age'>
                <h2>年齢</h2>
                <!--編集前の年齢が表示されているテキストボックス-->
                <input type='text' name='register[age]' value="{{ $user->age }}">
                <!--register.ageのエラーの最初を表示-->
                <p class="age_error" style="color:red">{{ $errors->first('register.age') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>