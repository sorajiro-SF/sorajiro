<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <title>Blog save</title>
    <!--Fonts-->
    </head>
    <body>
        <h1>ブログタイトル<h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="post[body]" name="post[title]" placeholder="ここに入力してください"/></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
