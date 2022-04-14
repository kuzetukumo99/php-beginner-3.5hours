<?php

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to  --only value checked
  === Identical to  --both value and type checked
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

// if($age >= 18) {
//   echo 'you are old enough to vote';
// } else {
//   echo 'Sorry, you are not old enough to vote';
// }

$t = date("H");

// if($t < 12){
//   echo 'Good Morning';
// } elseif($t <17){
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// } 

//$posts = ['First Post'];

// if(!empty($posts)) {//$postの中身が空でなければ
//   echo $posts[0];// $postsの[0]を返す
// } else {
//   echo 'No Posts';
// }

//echo !empty($posts) ? $posts[0] : 'No Posts';//上の式を1行で書いたもの

//$firstPost = !empty($posts) ? $posts[0] : 'No Posts';
//$firstPost = !empty($posts) ? $posts[0];//これはエラーになる。「:」以降が必要
//$firstPost = !empty($posts) ? $posts[0] : null;//これはOK

// $firstPost = $posts[0] ?? null; //$post[0]があればそれを、なければnullを返す

// echo $firstPost;

$favcolor = 'yellow';
switch($favcolor){
  case 'red';
    echo 'Your favorite color is red';
    break;
  case 'blue';
    echo 'Your favorite color is blue';
    break;
  case 'green';
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green or blue';
    break;
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */