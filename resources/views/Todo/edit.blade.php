<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <form action="/todos/{{ $todo->id }}" method="POST">
               @csrf
               @method('PUT')
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="todo[title]" placeholder="タイトル" value="{{ $todo->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('todo.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="todo[body]" placeholder="詳細">{{ $todo->body }}</textarea>
                 <p class="body__error" style="color:red">{{ $errors->first('todo.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="todo[limit]"/>
                <p class="limit__error" style="color:red">{{ $errors->first('todo.limit') }}</p>
                </div>
                 <input type="submit" value="更新"/>
            </form>
        <div class='back'>[<a href='/todos/{{ $todo->id }}'>戻る</a>]</div>
    </body>
    </html>
