<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// echo $_GET['name'];
// echo $_GET['age'];
if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo $_POST['age'];
}
?>

<!-- GETはurlとformsに使える。input情報がurlに記載される。
名前を持つフォームにあるものすべて,その値がurlに表示される。 
Searchなど、データをsubmitしないものにGETは向いている

POSTはformsだけに使える。input情報はurlに記載されない
ブログポストやログイン情報などに向いている
-->

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Jhon&age=30">Click</a>
<!-- 変数やデータをURLを通してパスできる。同じページにリンクしなくてもいい。他のページにデータをパスできる。ボタンを押すとnameやageを送れる　-->

<form action="?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <label for="name">Name: </label>
   <input type="text" name="name">
  </div>
  <div>
   <label for="age">Age: </label>
   <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>