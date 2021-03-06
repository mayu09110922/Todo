<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
            <form action="/moneys" method="POST">
               @csrf
                <div class="title">
                    <h2>タイトル</h2>
                <input type="text" name="money[title]" placeholder="例）今日の支出"/>
                <p class="title__error" style="color:red">{{ $errors->first('money.title') }}</p>
                   <h2>詳細</h2>
                <textarea name="money[body]" placeholder="例）買い物：3,000円"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('money.body') }}</p>
                   <h2>日付</h2>
                <input type="date" name="money[limit]"/>
                <p class="limit__error" style="color:red">{{ $errors->first('money.limit') }}</p>
                </div>
                 <input type="submit" value="保存"/>
            </form>
        <div class='back'>[<a href='/moneys'>戻る</a>]</div>
    </body>
    </html>
