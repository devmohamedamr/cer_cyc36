<?php




// echo  gettype($x);


// echo 30 + 20;

// echo 10 < 5;



// if($name == "mohamed"):
//     echo "tmaam";
// elseif($name == "ahmed"):
//     echo "ahmed tmam";
// else:
//     echo "name is not found";
// endif;   

// $name = "ahmed";
// $age = 20;
// switch($name):
//     case "ahmed":
//         echo "ahmed tmam";
//     break; 
//     case "mohamed":
//         echo "mohamed tmam";
//     break; 
//     case "eslam":
//         echo "eslam tmam";
//     break;  
//     default :
//         echo "test";
//     endswitch;



// $st = 10 < 5;
// echo $st;

// $x = 10;
// $y = 20;


// if($y < $x){
//    echo "route"; 
// }else{
//     echo "error";
// }






$name = "ramy";



// if($name == "mohamed"):

//     echo "name is mohamed";

// elseif($name == "ahmed"):

//     echo "name is ahmed";

// elseif($name == "eslam"):

//     echo "name is eslam";

// else:
//     echo "nothing";
// endif;


// if(10>5):
//     echo "aa";
// endif;



// echo (10>5) ? "mohamed" : "ahmed";

// $gender = 0;

// echo ($gender == 1) ? "male" : "female";


// 90 => 10
// 92 => 11
// 80 => 6

// $oil = 92;
// $L = 30;


// if($oil == 90){
//     $res = $L * 10;
//     echo "price is $res";
// }elseif($oil == 92){
//     echo $L * 11;
// }elseif($oil == 80){    
//     echo $L * 6;
// }else{
//     echo "nothing";    
// }  

// $oil = 90;
// $L = 30;
// switch($oil):
//     case 90:
//         echo $L * 10;
//     break; 
//     case 92:
//         echo $L * 11;
//     break;  
//     case 80:
//         echo $L * 6;
//     break; 
//     default:
//       echo "nothing";       
//     endswitch;





// >50 bad 
// <50 , >60 good 
// <60 , >75 v good
// <75 , 80 exc
//  80> , 100 a+ 


// $degree = 101;

// if($degree <= 50){
//     echo "fall";
// }elseif($degree >50 && $degree < 70){
//     echo "good";
// }elseif($degree >= 70 && $degree < 80){
//     echo "v good";
// }elseif($degree >= 80 && $degree <= 100){
//     echo "a+";
// }else{
//     echo "nothing";
// }




// while




// $x = 1;

// while(25 > $x){
//     if($x == 13){
//         echo "mohamed amr <br>";
//         $x = $x+1;
//     }
//     // else{
//         echo "$x <br>";
//     // }

  
//     $x = $x + 1;
// }





// $i = 1;
// do{
//     echo "$i <br>";
//     $i = $i + 1;
// }while(16<=$i);

// for($i = 1;16>=$i;$i++):
//     echo "$i <br>";
// endfor;





// $i = 2;
//  $i--;

//  echo $i;






// $name1 = "mohamed , eslam";
// $name2 = "eslam";


//      0          1 
// $list = ["html","css","php"];

// // var_dump($list);
// $c = count($list);
// for($i=0;$i<$c;$i++){
//     echo $list[$i]."<br>";
// }



// $list = ["php","mysql"];

// $person = ["first" => "mohamed","last"=> "amr","age"=> 30];

// $person = [
//     "first"=>"mohamed",
//     "last"=>"amr",
//     "age"=>30
// ];

// $list = [123,34213,34,234];

// foreach($list as $value){
//     echo $value."<br>";
// }

// $list = [1,23,45];
// $c = count($list);
// $end = $list[$c -1];
// echo $end;

// echo "ww";

// $i=0;
// while($i<6){
//     $i++;
//     $x = 0;
//     while($x<$i){
//         echo "*";
//         $x++;
//     }
//     echo "<br>";
// }


// for($i=0;$i<6;$i++){
//     echo $i."<br>";
// }


// $i=0;
// do{
//     echo "$i <br>";
//     $i++;
// }while($i>10);







// $list = array();



// $mohamed = ["firstname" => "mohamed","lastname" =>  "amr", "age" => 30];

// $mohamed = [
//     "firstname" => "mohamed",
//     "lastname" => "amr",
//     "age" => 40
// ];


// $list = ["php","mysql","c#"];

// foreach($list as  $c){
//     echo $c."<br>";
// }


// $c = count($mohamed); 
// // print_r($keys);
// for($i=0;$i<$c;$i++){
//     // $keys =  array_keys($mohamed);
//     echo $mohamed[array_keys($mohamed)[$i]]."<br>";
// }


// print_r($mohamed);
// echo $mohamed['age'];
// echo $list[1];
// $c = count($list);

// for($i=0;$i<$c;$i++){
//     echo $list[$i]."<br>";
// }

// echo $list;

// print_r($list);
// var_dump($list);





// $users = [
//     [
//         "name" => "ahmed",
//         "age" => 30
//     ],
//     [
//         "name" => "eslam",
//         "age" => 40
//     ],
//     [
//         "name" => "amr",
//         "age" => 50
//     ]
// ];

// foreach($users as $user){
//     foreach($user as $key => $value){
//         echo $key." : ".$value."<br>";
//     }
//     echo "<hr>";      
// }


// for($i=0;$i<count($users);$i++){
//     for($x=0;$x<count($users[$i]);$x++){
//         echo $users[$i][$x]."<br>";
//     }
// }







$list = ["html","css","php","oop"];


// echo  array_pop($list);
// array_shift($list)

// while($item = array_shift($list)){
//     echo $item."<br>";
// }

// print_r($list);
// for(;$item = array_shift($list);){
//     echo $item."<br>";
// }

// while(){

// }



// var_dump();
// print_r()
// count();


// function welcome(){
//     echo "welcome ya mohamed";
// }
// welcome();
// welcome();


// $number = [10,40,2,1,4,50,1000,45,500];



// $max = $number[0];

// foreach($number as $n){

//     if($max < $n){
//         $max = $n;
//     }
// }

// echo $max;





$user = [
    "name" => "ahmed",
    "age" => 40,
];

$user2 = [
    "name" => "eslam",
    "age" => 20
];




$users = [
    [
        "name" => "eslam",
        "age" => 20,
        "skills" => ["html"]
    ],
    [
        "name" => "mohamed",
        "age" => 20,
        "skills" => ["php"]
    ],
    [
        "name" => "ramy",
        "age" => 20,
        "skills" => ["css"]
    ]
];


// foreach($users as $value){
//     // echo $value;
//     foreach($value as $k => $data){
//         // echo $k."<br>";
//         // if($k == "skills"){
//             echo $data[0];
//         // }
//         // echo $k." : ".$data."<br>";
//     }

//     echo "<hr>";
// }   

// echo "<pre>";
// print_r($users);





// function plus($x,$y){
//     echo $x + $y;
// }


// $items = ["css",'php'];
// $backend = ["php",'oop'];

// function loop($x){
//     foreach($x as $k => $v){
//         echo $v."<br>";
//     } 
// }
// loop($items);
// loop($backend);
// plus(10,40);




// function plus($x,$y){
//     echo '$x + $y <br>';
//     return $x + $y;
// }

// echo 10 + plus(10,30);





// function number($s){
//     echo ++$s."<br>";
// }




// calc(10,20,"/");




// echo $_GET['username'];



// print_r($_POST);









// $x = 10;
// number($x);
// echo $x;




// function calc($x,$y,$o){
//     switch($o){
//         case "+":
//             echo $x + $y;
//         break; 
//         case "-":
//             echo $x - $y;
//         break;  
//         case "*":
//             echo $x * $y;
//         break;  
//         case "/":
//             echo $x / $y;
//         break;    
//     }

// }




// calc($_POST['x'],$_POST['y'],$_POST['o']);


// $listOfName =  explode(",",$_POST['name']);
// print_r($listOfName);









// function welcome($x){
//     echo "welcome ya $x <br>";
// }
// welcome("mohamed");
// welcome("ahmed");
// welcome("taha");



// function plus($x,$y){
//     echo $x + $y . "<br>";
// }
// $number1 = 20;
// $number2 = 30;
// plus($number1,$number2);



// function number($x,$y,$o){
//       echo $x ."<br>";

//     return $x;
// }


//  number(20,30,"*");

// echo 10 + number(50);


// $newNumber = number(20);


// echo $newNumber;
// echo 30 + number(10);


// echo '10' + '10';





// function checkName($name){
//     if($name == "mohamed"){
//         return true;
//     }
//     return false;
// }


// $res =  checkName("ahmed");


// if($res){
//     echo "name is exist";
// }else{
//     echo "name not match";
// }





// function calc($o,$y = 1,$x = 20){
//     switch($o){
//         case "+":
//             return $x + $y;
//          break;   
//          case "-":
//             return $x - $y;
//          break; 
//          case "*":
//             return $x * $y;
//          break; 
//          case "/":
//             return $x / $y;
//          break; 
//     }
// }
// echo  calc("+",1,30);



// function numberIncrement(&$x){
//    echo ++$x;
// }




// $number = 20;

// numberIncrement($number);

// echo "<br>";

// echo $number;




// function tax(&$t){
//     $t =  $t + 20;
//     return $t;
// }






// $total = 100;


// tax($total);


// echo $total;


// $total;









// function number(int $x):int
// {
//     // $x =  $x;
//     return $x + 10;
// }
// echo number("20asdsad");
// echo "<br> awdawdawdawdawawdawdawd";

// $numbers = [10,30,40,05,7,342,21];



// function last(array $numbersOfArray):int
// {
//     $count_of_numbers = count($numbersOfArray);
//     return $numbersOfArray[$count_of_numbers - 1];
// }
// echo  last($numbers);





// echo $_POST['age'];
// function checkAge($age){
//     if($age > 40){
//         echo "success";
//     }else{
//         echo "worng";
//     }
// }
// checkAge($_POST['age']);




// echo $_POST['age'];
// print_r($_POST);

// echo $_GET['age'];


// echo $_GET['age'];
// echo "<br>";
// echo $_POST['age'];



// echo $_REQUEST['age'];
// $username = ["mohamed","ahmed","ramy"];
// $password = ["123","44","55"];



// $users = [
//     [
//         "username" => "mohamed",
//         "password" => "12"
//     ],
//     [
//         "username" => "ahmed",
//         "password" => "44"
//     ]
// ];



// if(in_array($_POST['username'],$username)  && in_array($_POST['password'],$password)){
//     echo "done";
// }else{
//     echo "wrong";
// }


// $listOfName = explode(',',$_POST['name']);
// $contant = file_get_contents("test.html");
// foreach($listOfName as $key => $name){
//     // 1
//     fopen("certificate/".$name.".html","w");
//     // 2 
//     $new_content =  str_replace("name",$name,$contant);
//     // 3 
//     file_put_contents("certificate/".$name.".html",$new_content);
// }


// include_once "generators.php";

// $list =  handelNameInput($_POST['name']);
// getNameFromList($list,"test.html");












$listOfNames =  explode(",",$_POST['name']);

$content = file_get_contents("test.html");

foreach($listOfNames as $name){
    // echo $name."<br>";
    $newcontent =  str_replace("name",$name,$content);

    fopen($name.".html","w");
    
    file_put_contents($name.".html",$newcontent);
}
// print_r($newarry);
