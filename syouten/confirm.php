
<?php require_once('vegetables-data.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>注文確認</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
  <h1>鈴木商店</h1>
  <h2>新鮮で旬の食材が豊富</h2>
  </header>
  <div class="order-container">
   <h2>注文確認</h2>
    <table>
      <tr><th>商品名</th><th>個数</th><th>価格（税込）</th></tr>
      <?php foreach($vegetables as $vegetable): ?>
      <?php $orderCount = $_POST[$vegetable->getName()] ?>
      <tr>
       <td class="syoumane"><?php echo $vegetable->getName() ?></td>
       <td class="kosuu"><?php echo $orderCount ?></td>
       <td class="kakaku">tannka</td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>
</html>