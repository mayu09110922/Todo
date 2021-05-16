<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <form action="/moneys/{{ $money->id }}" method="POST">
               @csrf
               @method('PUT')
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="money[title]" placeholder="タイトル" value="{{ $money->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('money.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="money[body]" placeholder="詳細">{{ $money->body }}</textarea>
                 <p class="body__error" style="color:red">{{ $errors->first('money.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="money[limit]"/>
                <p class="limit__error" style="color:red">{{ $errors->first('money.limit') }}</p>
                </div>
                 <input type="submit" value="更新">
            </form>
        <div class='back'>[<a href='/moneys/{{ $money->id }}'>戻る</a>]</div>
    </body>
    </html>
