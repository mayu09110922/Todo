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
                    <h2>Title</h2>
                <input type="text" name="todo[title]" placeholder="タイトル" value="{{ $todo->title }}"/>
                   <h2>Body</h2>
                <textarea name="todo[body]" placeholder="詳細">{{ $todo->body }}</textarea>
                   <h2>Date</h2>
                <input type="date" name="todo[limit]"/>
                </div>
                 <input type="submit" value="update"/>
            </form>
        <div class='back'>[<a href='/todos/{{ $todo->id }}'>back</a>]</div>
    </body>
    </html>
