<?php session_start(); ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>在庫数（野菜）</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>在庫数（野菜）</h1>
  </header>
  <div class="s-container">
  <table>
    <tr><th>商品コード</th><th>商品名</th><th>在庫数</th><tr>
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="stock"></td>
        </tr>
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="stock"></td>
        </tr>
        <tr>
          <td><input type="text" name="v-id"></td>
          <td><input type="text" name="v-name"></td>
          <td><input type="text" value="0" name="stock"></td>
        </tr>
  </table>
</div>