<?php
/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
  //echo readfile($file); ファイルの中身の後ろにつく数字27はbytes
  $handle = fopen($file, 'r');//fopen ファイルまたは URL をオープンする。filename で指定されたリソースをストリームに結び付けます。rは読み込みモードの意味
  $contents = fread($handle, filesize($file));//バイナリセーフなファイルの読み込み。stream が指すファイルポインタから最高 length バイト読み込みます。
  fclose($handle);//オープンされたファイルポインタをクローズする。streamが指しているファイルをクローズします。
  echo $contents;

} else {
  $handle = fopen($file, 'w');//書き込みモードとして開く
  $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike'; //PHP_EOL 実行環境のOSに対応する改行コードを出力する定数
  fwrite($handle, $contents);
  fclose($handle);
}