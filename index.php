<?php
//
//class calc{
//
//    public $x;
//
//    public $y;
//
//    public $res;
//
//    public function __construct($num1 = 0,$num2 = 0)
//    {
//        $this->x = $num1;
//        $this->y = $num2;
//    }
//
//    function add(){
//        $this->res = $this->x + $this->y;
//        return $this->res;
//    }
//    function mult(){
//        $this->res = $this->x * $this->y;
//        return $this->res;
//    }
//    function div(){
//        $this->res = $this->x / $this->y;
//        return $this->res;
//    }
//    function sub(){
//        $this->res = $this->x - $this->y;
//        return $this->res;
//    }
//
//    function printly(){
//        echo $this->res;
//    }
//}
//
//
//
//$c1 = new calc();
//$c1->mult();
//$c1->printly();
//
//
//
//
////function welcome($x){
////     echo "welcome $x";
////}
////
////
////
////
////
////$name = "ahmed";
////
////
////welcome($name);
//
//
//
//
//
//
//
//
//
//
////echo gettype($c1);










//class test{
//
//    public $text;
//
//    public function open(){
//        $this->text = "open  ";
//        return $this;
//    }
//
//    public function close(){
//       return $this->text .= " close";
//    }
//}
//
//$t = new test();
//echo $t->open()->close();


//$name = "mohamed";
//$name .= " amr";
//
//echo $name;






require "db.php";


$db = new db(['localhost',"root","","routedb"]);
echo "<pre>";
//print_r($db->select("category","*")->where('id','=',1)->first());
print_r($db->delete("category")->where("id","=",1)->excute());








