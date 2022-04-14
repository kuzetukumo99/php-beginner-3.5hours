<?php
// echo - Output strings, numbers, html, etc
// echo 123, 'Hello', 10.5;
//echo [1,2,3]; エラーがでるよ。だからprint_r()で出力
//print - Works like echo, but can only take in a single argument
// print 123;

// print_r() - Print single values and arrays
//print_r([1,2,3]);

// var_dump() - Returns more info like data type and length
//var_dump('true');

// var_export() - Similar to var_dump(). Outputs a string representation of a variable 変数の文字列表現を出力
//var_export('Hello');''も表示されるよ

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Post One'; ?></h1>
  <h1><?='Post One'; ?></h1><!-- この書き方でもかける -->
  
</body>
</html>