<?php session_start(); ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>入庫</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>在庫入荷</h1>
  </header>
  <div class="s-container">
  <table>
    <tr><th>商品コード</th><th>商品名</th><th>価格</th><th>入庫数</th><th>&nbsp</th><th>&nbsp</th></tr>
　    <form method="POST" action="">
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="v-price"></td>
          <td><input type="text" value="0" name="v-stock"></td>
          <td><input type="reset" value="リセット"></td>
          <td><input type="submit" value="確定"></td>
        </tr>
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="v-price"></td>
          <td><input type="text" value="0" name="v-stock"></td>
          <td><input type="reset" value="リセット"></td>
          <td><input type="submit" value="確定"></td>
        </tr>
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="v-price"></td>
          <td><input type="text" value="0" name="v-stock"></td>
          <td><input type="reset" value="リセット"></td>
          <td><input type="submit" value="確定"></td>
        </tr>
      </form>
  </table>
</div>


</body>
