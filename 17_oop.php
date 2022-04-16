<?php
/*オブジェクト指向プログラミング（OOP：Object-Oriented programming）*/ 
/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
  PHP5以降では、手続き型とオブジェクト指向型のどちらでPHPを書くこともできます。オブジェクト指向は、「プロパティ」と「メソッド」を保持することができるクラスから構成されます。オブジェクトは、クラスから作成することができます。
*/

class User {//クラス（型）
  // Porperties are attributes that belong to a classプロパティとは、クラスに属する属性のことです。
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes そのクラス内およびそのクラスから派生したクラスからアクセスできる。
  public $name;
  public $email;
  public $password;//各プロパティ

  // A constructor is a method that runs when an object is created インスタンス化した時に自動実行される
   public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
  }
  

  // Method is a function that belongs to a class メソッドはクラス内のファンクション
  function set_name($name) {//これはプロパティをセットするsetterと呼ばれるらしい
    $this->name = $name;//thisは今のオブジェクトを指す。いまはユーザー1のユーザーをインスタンス化し、そのオブジェクトに関連付けるだけです
  }
    /*
    これはセッターと呼ばれるもので、プロパティを設定するものです。
    を直接使用するのではなく、プロパティを取得するために使用することがあります。
    というわけで、get name と言って、この名前をフォームに返せばいいのです。
    */

  function get_name(){
    return $this->name;
  }
}

// Instatiate a user object ユーザオブジェクトのインスタンス化。クラスなどの定義に基づいて実行時にメモリ上に領域を確保し、実際にデータの集合体を生成すること。 生成されたオブジェクトの実体を「インスタンス」（instance）という
// $user1 = new User();//constructをしない場合
// $user2 = new User();//constructをしない場合
$user1 = new User('Brad', 'brad@gmail.com', '34343');
$user2 = new User('John', 'john@gmail.com', '3kjri3'); 

// echo $user1->email;
// echo $user2->name;

 
// $user1->set_name('Brad'); //上で定義したメソッドにアクセス
// $user2->set_name('Jhon'); //上で定義したメソッドにアクセス

// //$user1->name = 'Brad';
// // echo '<pre>';
// // var_dump($user1);
// // echo '</pre>';
// // echo '<pre>';
// // var_dump($user2);
// // echo '</pre>';

// echo $user1->get_name();
// echo $user2->get_name();

//echo $user1->name;

// Inheritence 相続
class Employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent:: __construct($name, $email, $password);//親から引き継ぎ
    $this->title = $title;//新しくコンストラクタ実行
  }

  public function get_title() {
    return $this->title;
  }

}

$employee1 = new Employee('Sara', 'sara@gmail.com', '43434', 'Manager');

echo $employee1->get_title();