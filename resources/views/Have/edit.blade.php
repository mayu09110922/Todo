<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <form action="/haves/{{ $have->id }}" method="POST">
               @csrf
               @method('PUT')
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="have[title]" placeholder="タイトル" value="{{ $have->title }}"/>
                 <p class="title__error" style="color:red">{{ $errors->first('have.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="have[body]" placeholder="詳細">{{ $have->body }}</textarea>
                 <p class="body__error" style="color:red">{{ $errors->first('have.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="have[limit]"/>
                 <p class="limit__error" style="color:red">{{ $errors->first('have.limit') }}</p>
                </div>
                 <input type="submit" value="更新"/>
            </form>
        <div class='back'>[<a href='/haves/{{ $have->id }}'>戻る</a>]</div>
    </body>
    </html>
