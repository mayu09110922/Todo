<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>ToDo</h1>
        <div class='todos'>
            <div class='todo'>
                <a href='todos/1'><h2 class='title1'>Todo</h2></a>
            </div>
            <div class='todo'>
                <a href='todos/2'><h2 class='title2'>持ち物リスト</h2></a>
            </div>
            <div class='todo'>
                <a href='todos/3'><h2 class='title3'>お金管理</h2></a>
            </div>
        </div>
    </body>
    </html>
