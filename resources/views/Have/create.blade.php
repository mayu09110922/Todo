<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="/haves" method="POST">
               @csrf
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="have[title]" placeholder="例）本"/>
                <p class="title__error" style="color:red">{{ $errors->first('have.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="have[body]" placeholder="例）舟を編む"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('have.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="have[limit]"/>
                <p class="limit__error" style="color:red">{{ $errors->first('have.limit') }}</p>
                </div>
                 <input type="submit" value="保存"/>
            </form>
        <div class='back'>[<a href='/haves'>戻る</a>]</div>
    </body>
    </html>
