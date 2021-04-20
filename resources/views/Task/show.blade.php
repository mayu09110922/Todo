<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class='task'>
            <h1>ToDo</h1>
            <h2 class='title'>やること</h2>
            <h2 class='title'>新規作成</h2>
        </div>
        <div class='task'>
            <h1>持ち物リスト</h1>
            <h2 class='title'>本</h2>
            <h2 class='title'>新規作成</h2>
        </div>
        <div class='task'>
            <h1>お金管理</h1>
            <h2 class='title'>支出</h2>
            <h2 class='title'>新規作成</h2>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
