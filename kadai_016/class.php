<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>PHP課題_016</title>
  </head>
  <body>
    <p>
      <?php

      Class Food{
       // プロパティ
       private $name;
       private $price;

       // コンストラクタ
       public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
        } 
       // メソッド
       public function show_price(){
        echo $this->price.'<br>';
       }
      
      }

      Class Animal{
        // プロパティ
        private $name;
        private $height;
        private $weight;

        // コンストラクタ
        public function __construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
       }
        // メソッド
        public function show_height(){
          echo $this->height.'<br>';

      // public function show_height(int $height){
      // $this->price = $height;
       }

      }


      //インスタンス化
       $potato = new Food('potato',250);
       $dog = new Animal('dog',60,5000);

      // インスタンスの各プロパティを表示
      print_r($potato);
      echo '<br>';
      print_r($dog);
      echo '<br>';
      $potato->show_price();
      $dog->show_height();


      ?>
    </p>
  </body>
</html>