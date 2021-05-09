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
            <th>@sortablelink('title', 'タイトル順')</th>
            <th>@sortablelink('create', '作成順')</th>
            <th>@sortablelink('update', '更新順')</th>
　　　　　　<th>@sortablelink('limit', '日付順')</th>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
          
            @foreach($todos as $todo)
             <h2 class='title'>{{ $todo->title }}</h2>
             <h3 class='body'>{{ $todo->body }}</h3>
             <h4 class='date'>{{ $todo->limit }}</h4>
             <p class='edit'>[<a href="/todos/{{ $todo->id }}/edit">edit</a>]</p>
              <form action="/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="POST">
                @csrf
                @method('DELETE')
                <p class='delete'>
                <input type="submit" style="display:none"> [<span onclick="return deleteTodo(this);"><button>delete</button></span>]
                </p>
            </form>
             @endforeach
             
             {{ $todos->links() }}
            {{!! $todos->links() !!}}
　　　　　　{{ $todos->appends(request()->query())->links() }}
            
            <p class='create'>[<a href='/todos/create'>create</a>]</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
        
        <script>
            function deleteTodo(e){
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
    </html>
