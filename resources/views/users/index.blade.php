<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
    <body>
        <h1>ユーザーの新規登録</h1>
        <form action="/user" method="POST">
            @csrf
            <div class="name">
                <h2>名前</h2>
                <!--登録前の名前が表示されているテキストボックス-->
                <input type="text" name="register[name]" value"{{ old('register.name') }}"/>
                <!--register.nameのエラーの最初を表示-->
                <p class="name_error" style="color:red">{{ $errors->first('register.name') }}</p>
            </div>
            <div class="age">
                <h2>年齢</h2>
                <!--登録前の年齢が表示されているテキストボックス-->
                <input type="text" name="register[age]" value"{{ old('register.age') }}"/>
                <!--register.ageのエラーの最初を表示-->
                <p class="age_error" style="color:red">{{ $errors->first('register.age') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
    </body>
</html>