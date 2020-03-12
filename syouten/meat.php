<?php

class Meats {
  private $name;

    public function __construct($name) {
    $this->name = $name;
  }

    public function getName() {
    return $this->name;
  }

}

$beef = new Meats('牛');
$pork = new Meats('豚');
$chicken = new Meats('鶏');
$mutton = new Meats('羊');

$meats = array($beef, $pork, $chicken, $mutton);


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>鈴木商店-Meats</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
  <h1>鈴木商店</h1>
  <h2>新鮮で旬の食材が豊富</h2>
  </header>
  <div class="category-wrapper">
  <h1>MEATS</h1>
  <div class="categories">
    <?php foreach($meats as $meat): ?>
      <div class="category">
      <h2 class="item-name"><?php echo $meat->getName() ?></h2>
      </div>
    <?php endforeach ?>
  </div>

  </div>
</body>
</html>