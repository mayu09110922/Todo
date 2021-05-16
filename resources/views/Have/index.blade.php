<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
         <h1>持ち物リスト</h1>
            <th>@sortablelink('title', 'タイトル順')</th>
            <th>@sortablelink('created_at', '作成順')</th>
            <th>@sortablelink('updated_at', '更新順')</th>
　　　　　　<th>@sortablelink('limit', '日付順')</th>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
          
          <p class='create'>[<a href='/haves/create'>新規作成</a>]</p>
       <div class='haves'>
            @foreach ($haves as $have)
                <div class='have'>
                    <h3><a href="/haves/{{ $have->id }}">{{ $have->title }}</a>
                </div>
            @endforeach
        </div>
         
        <div class='back'>[<a href='/'>戻る</a>]</div>
    </body>
    </html>
