<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>RequestForm</title>
</head>
<body>
    <form action="{{ url('showRequest') }}" method="POST">
        @csrf
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
