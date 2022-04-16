<?php
/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($x = 5; $x < 10; $x++){
//   echo 'Number' . $x . '<br>';
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x = 1;

// while($x <= 15){
//   echo 'Number '.$x.'<br>';
//   $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 6;
// do {
//   echo 'Number ' .$x . '<br>';
//   $x++; 
// } while ($x <= 5);



/* ---------- Foreach Loop ---------- */
//forの行列を取り扱える版。使用頻度が一番高いらしい。

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach($posts as $post){//上式と同じ結果を返す,各要素について一つずつechoを処理する
//   echo $post;
// } 

// foreach($posts as $index => $post){
//   echo $index + 1 . '-' .$post. '<br>';//本来はindex 0スタートだが、+1なので１、２、３とインデックスがつく
// } 

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'emai' => 'brad@gmail.com',
];

foreach($person as $key => $value) {//foreachループは配列に対してのみ動作し、配列の各キーと値のペアをループするために使用されます。For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
  echo "$key - $value<br>";
}

foreach($person as $x => $val){//上と同じことを書いている。
  echo "$x = $val<br>";
}