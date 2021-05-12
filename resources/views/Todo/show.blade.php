<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
         <h1>Todo</h1>
        <div class='todo'>
            <h2 class='title'>{{ $todo->title }}</h2>
            <p class='body'>{{ $todo->body }}</p>
            <p class='date'>{{ $todo->limit }}</p>
        </div>
             
             <p class='edit'>[<a href="/todos/{{ $todo->id }}/edit">edit</a>]</p>
             
              <form action="/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="POST">
                @csrf
                @method('DELETE')
                <p class='delete'>
                <input type="submit" style="display:none"> [<span onclick="return deleteTodo(this);"><button>delete</button></span>]
                </p>
            </form>
        
        
        <div class='back'>[<a href='/todos/'>back</a>]</div>
        
        <script>
            function deleteTodo(e){
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
    </html>
