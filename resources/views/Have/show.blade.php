<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class='todo2'>
            <h1>持ち物リスト</h1>
            <h2 class='body'>本</h2>
            <h2 class='body'>{{ $have->body }}</h2>
            <p class='create'>[<a href='/haves/create'>create</a>]</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
