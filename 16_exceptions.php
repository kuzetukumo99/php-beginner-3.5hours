<?php
/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.

  PHPは、他のプログラミング言語と同様に例外モデルを採用しています。PHP では、例外をスローしたりキャッチしたり (「キャッチ」) することができます。潜在的な例外を捕捉しやすくするために、コードを try ブロックで囲むことができます。各 try には、対応する catch または finally ブロックを少なくともひとつ持たなければなりません。
*/

function inverse($x) {// inverseは逆の意。逆数にする
  if(!$x) {
    throw new Exception('Division by zero');//例外をスロー
  }
  return 1/$x;
}

//echo inverse(0);エラー出る

try {//発生した例外を 捕捉するには、コードを try ブロックで囲みます。
  echo inverse(5);//５の逆数0.2を出力
  echo inverse(0);//0の逆襲を出力しようとするが、無限に発散する←例外が発生
 } catch(Exception $e) {//$eはExceptionを受ける（捕捉する）ための任意の変数です。
  echo 'Caught Exception', $e->getMessage(), ' ';//各 try ブロックには、対応する catch ブロックあるいは finally ブロックが存在する必要があります。//$eで例外をキャッチし、getMessage()で例外メッセージを取得、
} finally {
 echo 'First Finally' ;//例外が発生したかどうかに関係なく、finally が実行されます。
}

try {
  echo inverse(0);
 } catch(Exception $e) {
  echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
 echo 'Second Finally' ;
}

echo 'Hello World';//exception処理をしているおかげで、上で1を0で割ろうとした時に、本来はfatal　errorで処理が止まるが、それを例外処理することで処理を続け、この文字も出力処理ができる