<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
            <form action="/todos" method="POST">
               @csrf
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="todo[title]" placeholder="例）買い物"/>
                <p class="title__error" style="color:red">{{ $errors->first('todo.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="todo[body]" placeholder="例）スーパー：トマト、玉ねぎ"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('todo.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="todo[limit]"/>
                <p class="limit__error" style="color:red">{{ $errors->first('todo.limit') }}</p>
                </div>
                 <input type="submit" value="保存"/>
            </form>
        <div class='back'>[<a href='/todos'>戻る</a>]</div>
    </body>
    </html>
