<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <title>Blog save</title>
    <!--Fonts-->
    
    </head>
    <body>
        <h1>ブログ内容変更<h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="edit_title">
                <h2>変更するタイトル名</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value='{{$post->title}}'>
                <p class="title_error" style="color:red">{{ $errors->first("post.title")}}</p>
            </div>
            <div class="edit_body">
                <h2>変更する文章</h2>
                <input type='text' name="post[body]"  value="{{$post->body}}">
                <p class="body_error" style="color:red" >{{ $errors->first("post.body")}}</p>
                <!--勝手に、文字数でエラー出るように設定しました。-->
            </div>
            <input type="submit" value="変更する"/>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </form>
    </body>
</html>
<!--文字数でエラー出るように設定しました。-->
