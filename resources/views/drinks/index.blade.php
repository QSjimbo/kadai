<!DOCTYPE html>
<html>
<head>
    <title>飲み物一覧</title>
    <meta charset="utf8" />
</head>
<body>
    <div>
    </div>
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
                    <td><?php echo $drink->name; ?></td>
                    <td><?php echo $drink->price; ?></td>
                    <td><?php echo $drink->stock; ?></td>
                    <td><?php echo $drink->maker->name; ?></td>
                    <td><a href="drinks/edit/{{$drink->id}}">編集</a></td>
                    <td><form action="<?php echo url('drinks/delete/'. $drink->id); ?>" method="POST">
                        @csrf
                        <div><input type="submit" value="削除"></div>
                    </form></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>
</html>

