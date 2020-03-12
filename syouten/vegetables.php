<?php require_once('vegetables-data.php') ?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>鈴木商店・野菜</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>鈴木商店</h1>
  <h2>新鮮で旬の食材が豊富</h2>
  </header>
  <div class="category-wrapper">
   <h1>野菜</h1>
    <form action="confirm.php" method="post">
      <div class="categories">
        <?php foreach($vegetables as $vegetable): ?>
          <div class="category">
            <h2 class="item-name"><?php echo $vegetable->getName() ?></h2>
            <p class="item-price"><?php echo $vegetable->getTaxPrice() ?>円（税込）</p>
            <input type="text" value="0" name="<?php echo $vegetable->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      <div class="btn-area">
        <input type="submit" value="買い物かごへ">
        <input type="reset" value="リセット">
      </div>
    </div>
    </form>
  </div>
</body>
</html>