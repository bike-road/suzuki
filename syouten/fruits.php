<?php

class fluits{
private $name;
private $price;

private $orderCount = 0;

public function __construct($name, $price) {
$this->name = $name;
$this->price = $price;
}

public function getName() {
return $this->name;
}

public function getTaxPrice() {
return floor($this->price * 1.08);
}

}

$ringo = new fluits('リンゴ', 220);
$mikan = new fluits('みかん', 130);
$banana = new fluits('バナナ', 110);
$ichigo = new fluits('イチゴ', 390);

$fluits = array($ringo, $mikan, $banana, $ichigo);


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>鈴木商店-Fluits</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
   <h1>鈴木商店</h1>
   <h2>新鮮で旬の食材が豊富</h2>
  </header>
  <div class="category-wrapper">
   <h1>Fluits</h1>
    <div class="categories">
      <?php foreach($fluits as $fluit): ?>
        <div class="category">
         <h2 class="item-name"><?php echo $fluit->getName() ?></h2>
        <p class="item-price">
        <?php echo $fluit->getTaxPrice() ?>円（税込）
        </p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>