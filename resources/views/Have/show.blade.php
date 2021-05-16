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
        <div class='have'>
            <h2 class='title'>{{ $have->title }}</h2>
            <p class='body'>{{ $have->body }}</p>
            <p class='date'>{{ $have->limit }}</p>
        </div>
             
             <p class='edit'>[<a href="/haves/{{ $have->id }}/edit">編集</a>]</p>
             
              <form action="/haves/{{ $have->id }}" id="form_{{ $have->id }}" method="POST">
                @csrf
                @method('DELETE')
                <p class='delete'>
                <input type="submit" style="display:none"> [<span onclick="return deleteHave(this);"><button>削除</button></span>]
                </p>
            </form>
        
        <div class='back'>[<a href='/haves/'>戻る</a>]</div>
        
        <script>
            function deleteHave(e){
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
    </html>
