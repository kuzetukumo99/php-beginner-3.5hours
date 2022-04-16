<!--サニタイジングとは、テキストデータ上の「&」や「>」など特殊文字を一般的な文字列に変換する処理のことである-->

<?php 
if(isset($_POST['submit'])){
  // //$name = htmlspecialchars($_POST['name']);//入力欄に<script>を入れられて攻撃されるのを防ぐ。もしくは下部の例のようにform内に直接htmlspecialcharsを書いてしまうこともできる
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);//先生はこっちを好むらしい。
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  //$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);一応これでも動くけど上が推奨

  echo $name;

}
?>

<form action="?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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