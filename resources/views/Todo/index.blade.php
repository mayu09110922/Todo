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
            <th>@sortablelink('created_at', '作成順')</th>
            <th>@sortablelink('updated_at', '更新順')</th>
　　　　　　<th>@sortablelink('limit', '日付順')</th>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
          
          <p class='create'>[<a href='/todos/create'>新規作成</a>]</p>
        
        <text>★今月の予定★</text>
        
        <iframe src="https://calendar.google.com/calendar/embed?src=m3crjgebm5vloqqehsuuut9iks%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
         
       <div class='todos'>
            @foreach ($todos as $todo)
                <div class='todo'>
                    <h3><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
                    <h4>{{ $todo->limit }}</h4>
                </div>
            @endforeach
        </div>
        
        
        <div class='back'>[<a href='/'>戻る</a>]</div>
    </body>
    </html>
