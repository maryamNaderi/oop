<?php
echo "<br>";
// example of overriding 
class over {
    public $name='alijahan';
    function overriding() {
        return "the author name is$this->name ";
    } 
} 
class over2  extends over{
    function overriding() {
        //return "this is your class $this->name  and Mr:hakmat ";
        return parent::overriding()."this is cr of your class $this->name and his assit mr hakmat";
    }

}


$n = new over2;
 echo $n->overriding();  

//example of constant
echo "<br>";
class circle {
const x=10;
public static function plass($n) {
return $n * $n + self::x;
}

}
$circle = new circle();
echo $circle->plass(5);

echo '<br><br>';
 //example of static method and property
 class user {
     public static  $name;
     public static $number=0;
     public static function get($n) {
      return self::$name=$n;

    }
   public static  function mul() {
    return self::$number+=1;
   } 
 }
echo user::mul();
echo "<br>";
echo user::mul();
echo "<br>";
echo user::mul();
echo "<br>";
  echo user::get('omarjan');
 




        //example of hinting
   echo '<br><br>example of hinting<br>';
 class book {
    public $name;
    public $price;
        function price( int $price) {
            $this->prise=$price;
        }
        public function author( array $n) {
          $this->name=$n; 

        }

     }

$b =new book;
$b->price(100);
print_r($b);
echo '<br>'; 
$b->author(['aliomer']);
print_r($b);

    echo '<br><br><br>';
  //to use trait
    echo 'example of trait and interface<br>';
  trait university {

        public $name;
        public $email;
        public $phone;

            function department($n,$e,$p) {
               $this->name=$n;
                $this->email=$e;
               $this->phone=$p;
        } 
  }
    //how to use interface

include "interface.php";

class coustomer implements store {
    use university;
    function order() {
        echo " <br><br>write your order";

    }
}
$dep = new coustomer;
$dep->department('omer','omer@gmail.com','0700898989');
 echo $dep->name.'<br>';
 echo $dep->email.'<br>';
 echo $dep->phone;
$Coustomer = new coustomer;
$Coustomer->order();
echo "<br><br>";

// class rectengle implements shapesinterface{

//     function add() {
//     echo 'you can select one of it';
//     }
//     public function data() { 
//     echo 'you can use a function in different place<br>';

//     }
// }

// $reg = new rectengle; 
// $reg->data();
// $reg->add();
// echo '<br><br>';

   //abstract class

 abstract class car {
    function opp() {
      echo 'our oop class';
    }

 }
 
class mptor extends car{

}

$f = new mptor;
$f->opp();


 abstract class boo {
    function n() {
        echo 'no one can you not become';
    }
}
class note extends boo {

}
$r =new note;
$r->n();
?>