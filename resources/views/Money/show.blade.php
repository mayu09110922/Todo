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
            <h1>お金管理</h1>
            <h2 class='body'>収入</h2>
            @foreach($moneys as $money)
            <h2 class='body'>{{ $money->body }}</h2>
            @endforeach
            {{ $moneys->links() }}
            <p class='create'>[<a href='/moneys/create'>create</a>]</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
