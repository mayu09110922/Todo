<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
         <h1>お金管理</h1>
        <div class='money'>
            <h2 class='title'>{{ $money->title }}</h2>
            <p class='body'>{{ $money->body }}</p>
            <p class='date'>{{ $money->limit }}</p>
        </div>
             
             <p class='edit'>[<a href="/moneys/{{ $money->id }}/edit">編集</a>]</p>
             
              <form action="/moneys/{{ $money->id }}" id="form_{{ $money->id }}" method="POST">
                @csrf
                @method('DELETE')
                <p class='delete'>
                <input type="submit" style="display:none"> <span onclick="return deleteMoney(this);"><button>削除</button></span>
                </p>
            </form>
        
        
        <div class='back'>[<a href='/moneys/'>戻る</a>]</div>
        
        <script>
            function deleteMoney(e){
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
    </html>
