<form action="<?php echo url('drinks/update/'. $drink->id); ?>" method="POST">
    <div>
        <label>商品名</label>
        <input type="text" name="name" value="<?php echo $drink->name; ?>" placeholder="名前を入力してください" required>
    </div>
    <div>
        <label>価格</label>
        <input type="number" name="price" value="<?php echo $drink->price; ?>" placeholder="価格を入力してください" required>
    </div>
    <div>
        <label>在庫数</label>
        <input type="number" name="stock" value="<?php echo $drink->stock; ?>" placeholder="在庫数を入力してください" required>
    </div>
    <div>
        <label>メーカー</label>
        <select name="maker_id">
            <?php foreach ($makers as $maker) :?>
                <?php if ($drink->maker_id === $maker->id): ?>
                    <option value="<?php echo $maker->id; ?>" selected><?php echo $maker->name; ?></option>
                <?php else: ?>
                    <option value="<?php echo $maker->id; ?>"><?php echo $maker->name; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input class="btn" type="submit" value="登録する">
        <a class="btn" href="<?php echo url('drinks'); ?>">戻る</a>
    </div>
</form>

