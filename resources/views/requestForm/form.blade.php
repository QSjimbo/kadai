<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>RequestForm</title>
</head>
<body>
    <!-- 設問２POSTで取得 -->
    <!-- <form action="{{ url('showRequest') }}" method="POST">
        @csrf
        <div>
            <label for="message">入力フォーム</label>
            <input type="text" name="message" id="message">
        </div>
        <div>
            <input type="submit" value="リクエストを送る">
        </div>
    </form> -->

    <!-- 設問３GETで取得 -->
    <form action="{{ url('showRequest') }}" method="GET">
    <div>
        <label for="message">入力フォーム</label>
        <input type="text" name="message" id="message">
    </div>
    <div>
        <input type="submit" value="リクエストを送る">
    </div>
</form>
</body>
</html>
