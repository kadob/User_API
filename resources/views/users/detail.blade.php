<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>detail</title>
    </head>
    <body>
        <h1>ユーザー情報詳細画面</h1>
        <h2>名前</h2>
        <p>{{ $user->name }}</p>
        <h2>年齢</h2>
        <p>{{ $user->age }}</p>
        <!--削除ボタン-->
        <form action="/user/{{ $user->id }}" id="form_{{ $user->id }}" method="post">
            @csrf
            @method('DELETE')
            <!--ボタンクリックで<script>のdeleteUserを呼ぶ-->
            <button type="button" onclick="deleteUser({{ $user->id }})">削除</button>
        </form>
        <script>
            function deleteUser(id) {
                'use strict'//厳格に行う
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <!--編集画面へ-->
        <div class="edit"><a href="/user/{{ $user->id }}/edit">編集</a></div>
    </body>
</html>