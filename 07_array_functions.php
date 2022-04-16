<?php
  $fruits = ['apple', 'orange', 'pear'];

  //Get length
  //echo count($fruits);//行列のカウント数（ここでは3）を取得する

  // Search array 
  //var_dump(in_array('apple', $fruits));//$fruits内のappleを探す　booleanでtrue false判定

  // Add to array
  $fruits[] = 'grape';//後にgrapeを追加
  array_push($fruits, 'blueberry', 'strawberry');//一つ以上の要素を配列の最後に追加する
  array_unshift($fruits, 'mango');//初めに追加

  // Remove from array
  array_pop($fruits);//最後から一つ取り除く strawberryが消えた
  array_shift($fruits);//最初から１つ目を取り除く、mangoが消えた
  //unset($fruits[2]);//特定のインデックスのarrayを取り除く

  // Split into 2 chunks　//chunkは塊の意
  //$chunked_array = array_chunk($fruits, 2); //2つずつにぶった切っていく

  //print_r($chunked_array);

  //print_r($fruits); 


  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  // $arr3 = array_merge($arr1, $arr2);

  // print_r($arr3);

  $arr4 = [...$arr1,...$arr2];/// ...は可変長引数。引数の数が決まっていない、状況に応じて複数の引数を指定したいときに、関数の引数で指定する点（ドット）３つのことです。関数で引数を宣言する際に点（ドット）３つを手前につけることで、複数の値が飛んでくることを想定し、受取時に自動で配列に格納してくれるのです。
  //print_r($arr4);

  $a = ['green', 'red', 'yello'];
  $b = ['avacado', 'apple', 'banana'];

  $c = array_combine($a, $b);//$aをkeyとして、$bをvalueとして組み合わせる

  ///print_r($c);

  $keys = array_keys($c);// 配列のキーすべて、あるいはその一部を返す
  //print_r($keys);

  $flipped = array_flip($c);//配列のキーと値を反転する
  //print_r($flipped);

  $numbers = range(1, 30);

  //print_r($numbers);

  $newNumbers = array_map(function($number) {
    //array_map:指定した配列の要素にコールバック関数を適用する。コールバック関数:その引数に任意のコールバック関数名の文字列を設定することで、呼び出しができるものです。
    return "Number ${number}";
  }, $numbers);

  //print_r($newNumbers);

  $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);//フィルター
  //print_r($lessThan10);

  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);//carryは直前の反復の戻り値を保持します。
  
  var_dump($sum); 