<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <form action="/todos" method="POST">
               @csrf
                <div class="body">
                    <h2>Title</h2>
                <input type="text" name="todo[body]" placeholder="タイトル"/>
                </div>
                 <input type="submit" value="store"/>
            </form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
