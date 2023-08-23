<!DOCTYPE html>
<html>
<head>
    <title>飲み物一覧</title>
    <meta charset="utf8" />
</head>
<body>
    <div>
        <?php echo $accessCount. "回目の訪問です"?>
    </div>
    <form action="delete" method="POST">
        @csrf
        <input type="submit" name="send" value="cookieを削除">
    </form>
    <h1>飲み物一覧</h1>
    <table>
        <thead>
            <th>商品名</th>
            <th>価格</th>
            <th>在庫数</th>
            <th>メーカー名</th>
        </thead>
        <tbody>
            <?php foreach($drinks as $drink): ?>
                <tr>
                    <td><?php echo $drink["name"]; ?></td>
                    <td><?php echo $drink["price"]; ?></td>
                    <td><?php echo $drink["stock"]; ?></td>
                    <td><?php echo $drink["maker"]["name"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>
</html>

