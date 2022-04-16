<?php

$string = 'Hello World';

// Get the length of string
echo strlen($string).'<br>';

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o').'<br>';//oが初めにくる場所

// Find the positon of the last occurrence of a sustring in a string
echo strrpos($string, 'o').'<br>';//oが最後にくる順番

// Reverse a string
echo strrev($string).'<br>';

// Convert all characters to lowercase
echo strtolower($string).'<br>';

// Convert all characters to uppercase
echo strtoupper($string).'<br>';

// Uppercase th first character of each word
echo ucwords($string).'<br>';

// String replace
echo str_replace('World', 'Everyone', $string).'<br>';

// Return portion of a string specified by the offset and length オフセットと長さで指定された文字列の一部を返す。
echo substr($string, 0, 5).'<br>';
echo substr($string, 5).'<br>';//後から５文字？

// Starts with
if (str_starts_with($string, 'Hello')) {//PHP8以降でないと使えない
  echo 'Yes'.'<br>';
}

// End with
if (str_ends_with($string, 'ld')){
  echo 'Yes'.'<br>';
}

// HTML特殊文字 セキュリティ上、php側にhtmlタグを直接書くのはよろしくない？
// $string2 = '<h1>Hello</h1>';
//  echo $string2;
/*
h1を与えると、ブラウザはh1を解析してくれる。
さて、ウェブサイトにフォームがある場合、ここに文字列を入れると攻撃される可能性があります。
スクリプトをかいてみよう。ここにjavascriptを入れて、アラートを出すだけのスクリプトを入れます。
誰かがこれをフォームに渡すとします。

そして、それが自動的にページ上に表示されます。保存してみると、実際にジャバスクリプトが実行されるのがわかります。それを防ぐためにhtml spec
*/

// $string2 = '<script>alert(1)</script>';//これをフォームで書かれてそれをechoさせると、アラートが表示されるようになる
//  echo $string2;

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

// Good for outside data or users providing data %s(stringの置換先), %d(整数) %f(float少数点)の置き換え先
printf('%s likes to %s', 'Brad', 'code');// Brad likes to codeと表示される。それぞれreplaceする
printf('1+1=%d', 1+1);//1+1が%dと置き換わる替わる
printf('1+1=%f', 1+1);//1+1が%fと置き換わる替わる