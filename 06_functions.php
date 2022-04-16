<?php
  $y = 12;
  /*
  function registerUser() {
    global $y;//これによって、このファンクションの外で設定された変数yをphpファイル全体で利用できるようにしている。そのため、下のechoが動くようになる。
    echo $y;
    $x = 10;//変数xこのファンクション内でで定義されたため、ここでしか使えない。
    echo 'User registered';
  }
//function はscope（範囲）を持っている
  echo $x;
  registerUser();//$xは定義されたファンクション内でしか使えないため、後から呼びだせない。
  */

  function registerUser($email) {// $email は引数(関数を定義して、その中に何が入るかを定義するとき、これは引数です。)
    echo $email . ' registered';
  }

  //registerUser('Brad') ;//パラメータBradをregisterUserの引数に代入　パラメータ：どんな値や数値であれ、引数の中に入れるものを’パラメータ’という。

  // function sum ($n1, $n2) {
  //   return $n1 + $n2;
  // } 

  //sum(5, 5);//これはfunctionのreturn結果をホールドしている状態
  //echo $sum(5,5);//ホールドしている結果をechoで表示させている
  //$number = sum();//エラーになる。sumには二つのパラメータが入るように引数が設定されているため
  
  
  
  // function sum ($n1 = 4, $n2 = 5) {//こうすると下のsum()は動く
  //   return $n1 + $n2;
  // } 
  // $number = sum();
  // echo $number;

  $subtract = function ($n1, $n2){//無名関数はクロージャとも呼ばれ、 関数名を指定せずに関数を作成できるようにするものです。 
    return $n1 - $n2;
  };

  //echo $subtract(10,5);

  $multiply = fn ($n1, $n2) => $n1 * $n2;//アロー演算子を用いた短い書き方
  echo $multiply(9,9);
  
