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
       <h1 class="title">
            {{ $task->title }}
        </h1>
        <div class="content">
            <div class="content__task">
                <h3>新規作成</h3>
            </div>
        </div>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
