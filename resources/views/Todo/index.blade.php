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
            <th>@sortablelink('title', 'タイトル順')</th>
            <th>@sortablelink('create', '作成順')</th>
            <th>@sortablelink('update', '更新順')</th>
　　　　　　<th>@sortablelink('limit', '日付順')</th>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
          
          <p class='create'>[<a href='/todos/create'>create</a>]</p>
       <div class='todos'>
            @foreach ($todos as $todo)
                <div class='todo'>
                    <h2 class='title'>{{ $todo->title }}</h2>
                    <h3><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
                    <p class='body'>{{ $todo->body }}</p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $todos->links() }}
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    </html>
