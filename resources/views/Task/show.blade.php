<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
       <div class='task1'>
            <h1 class='title'>Todo</h1>
            <h2 class='body'>やること</h2>
            <h2 class='body'>買い物</h2>
            <h2 class='body'>新規作成</h2>
        </div>
        <div class='task2'>
            <h1>持ち物リスト</h1>
            <h2 class='body'>本</h2>
            <h2 class='body'>新規作成</h2>
         <div class='task3'>
            <h1>お金管理</h1>
            <h2 class='body'>支出</h2>
            <h2 class='body'>新規作成</h2>
            </div>
            <p class='create'>[<a href='/tasks/create'>create</a>]</p>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
