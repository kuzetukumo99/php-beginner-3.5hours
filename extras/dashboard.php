<?php
/*
そのセッションの値を使いたい場所で
でセッションを開始させなければなりません。

*/
  session_start(); //sessionを使うときはいつもこれが最初に必要

  if(isset($_SESSION['username'])){
    echo '<h1> Welcome ' . $_SESSION['username'] . '<h1>';
    echo '<a href="./logout.php">Logout</a>';
  } else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href = "/PHP%20For%20Beginners3.5%20hours/13_sessions.php">Home</a>';
  }
