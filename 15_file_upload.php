<?php
  if(isset($_POST['submit'])){
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');//ファイルの拡張子を指定
    if(!empty($_FILES['upload']['name'])) {
      //print_r($_FILES);
      $file_name = $_FILES['upload']['name'];//print_rで見れるファイル情報からnameを抜き出す
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $target_dir = "uploads/${file_name}";//ファイルアップロード先ディレクトリの指定

      // Get file ext
      $file_ext = explode('.', $file_name);//explodeはstringからarrayを生成する。spilit a string by a string. file_nameのstringをdotのところで分割する
      $file_ext = strtolower(end($file_ext));//拡張子部分を取り出す。小文字で。

      //echo $file_ext;

      // Validate fle ext
      if(in_array($file_ext, $allowed_ext)){
         if($file_size <= 1000000) {// 1MB以下
          move_uploaded_file($file_tmp, $target_dir);//uploadする

          $message = '<p style="color:green;">File uploaded</p>';

         } else {
          $message = '<p style="color:red;">File is too large</p>';
         }
      } else {
        $message = '<p style="color:red;">Invalid file type</p>';

      }

    } else {
      $message = '<p style="color:red;">Please choose a file</p>';
    }
  }
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
  <?php echo $message ?? null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="upload">
  <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>