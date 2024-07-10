<!--「Food」と「Animal」クラスを作成します。
「Food」クラスには「name」「price」プロパティを、「Animal」クラスには「name」「height」「weight」プロパティを定義します。
「Food」クラスには「price」プロパティの値を出力する「show_price」メソッドを、「Animal」クラスには「height」 プロパティの値を出力する「show_height」メソッドをそれぞれ作成します。
プロパティに値を代入するコンストラクタをそれぞれのクラスに作成します。-->

<?php
class Food {
  private $name;
  private $price;

  public function __construct(string $name,int $price) {
    $this->name = $name;
    $this->price = $price;
 }
  public function show_price() {
    print_r($this->price);
 }
}


class Animal {
  private $name;
  private $height;
  private $weight;

  public function __construct(string $name,int $height,int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
 }
 public function seet_price() {
  print_r($this->height);
}

}

$price_les = new Food('poteto',250);

$tikin = new Animal('dog',60,5000);


print_r($price_les);
echo '<br>';
print_r($tikin);
echo '<br>';
$price_les->show_price();
echo '<br>';
$tikin->seet_price();
?>