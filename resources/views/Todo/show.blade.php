<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
         <div class='todo1'>
            <h1 class='title'>Todo</h1>
            <h2 class='body'>やること</h2>
           @foreach($todos as $todo)
             <h2 class='body'>{{ $todo->body }}</h2>
             @endforeach
             {{ $todos->links() }}
            <p class='create'>[<a href='/todos/create'>create</a>]</p>
        </div>
        
            
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
