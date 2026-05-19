<?php
// $text = "Hello World";
// $text1="Hello";
// $text2="World";

//$email="       EXAMPLE@GMAIL.COM        ";
//echo strtoupper($text);//string k upper case e convert kre dibe 
//echo strtolower($email);//string k lower case e convert kri dey
//echo str_replace("World","PHP",$text);//string er akta word k replace krbe, akhane 3 ta perameter lage 1.jwi word ta chng krbo, 2.chng kre ki likhbo, 3.kon string er mddhe chng ta hbe.
//echo strrev($text); //string ta k reverse kre dey jmn "dlroW olleH"
//echo strlen(trim($email));//$email="       EXAMPLE@GMAIL.COM        "; amn white space gula k cln krte tream method use krbo ata one kind of senitaization

//echo $text1." - ".$text2;//concatanation
//echo "This is $text1 $text2";//"" er vitore multiple statement print kra jy

// $Text="This is simple text";
// echo substr($Text,0,6);//string k section kre kre dekhanor jnno substr use kra hy 3ta parameter use krte hy 1.kon string k crop krbe,2.kon index theke shuru krbe,3.kototuku length porjnto katbe 

// $num =5;
// $num1 =5.5;
// $num3="5";
// $new_num=acos(10);
// // var_dump($new_num);
// var_dump(PHP_INT_SIZE);
// var_dump(PHP_INT_MAX);
// var_dump(is_integer($num));
// var_dump(is_float($num1));


//type casting:
// $a=5;
// $b=8.5;
// $c="hello";
// $d=true;
// $e=Null;

// $a=(string)$a;
// $b=(string)$b;
// $c=(string)$c;
// $d=(string)$d;
// $e=(string)$e;

// $a=5;
// $b=8.5;
// $c="25 hello";
// $d=true;
// $e=Null;

// $a=(int)$a;
// $b=(int)$b;
// $c=(int)$c;
// $d=(int)$d;
// $e=(int)$e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// echo pi();
// echo min(50,90,85,70,40,95);
// echo max(50,90,85,70,40,95);
//echo abs(-10);//-ve k +ve banai dey
//echo sqrt(64);
// echo (round(50.20));
// echo (round(50.90));//point er pore 5 er beshi hoile uporer ta round hishebe dhore mane 51

//echo rand(10,100);


//making constant 2 system:"define()" function, "const" keyword
//define onno block scoope er vitore use kra jy bt const use kra jy na jmn function block ba if statement block. 
//WELCOME_MESSAGE eita akhn akta constant hoi gese je kono jygy ata call krle msg same ta show krbe.
// define("WELCOME_MESSAGE","welcome to php bootcamp");
// echo WELCOME_MESSAGE;
// const WELCOME_MESSAGE="welcome to php bootcamp";
// echo WELCOME_MESSAGE;

//magic constant mane holo egula age thekei create kra thake 
// echo __DIR__;//directory dekhabe kon folder e asi seta
// echo __LINE__;//kon line e asi seta dekhabe 
// echo __FILE__;//kon file e asi seta dekhabe 


//oparator:1.arrithmatic,2.assign,3.comparisn,4.logical
// $x=10;
// $y=2;

// $add=$x+$y;
// $sub=$x-$y;
// $div=$x/$y;
// $multi=$x*$y;
// $exp=$x**$y;
// $mod=$x%$y;

// echo $add."<br>",$sub."<br>",$div."<br>",$multi."<br>",$exp."<br>",$mod;

// $x=10;
// $x+=20;//ager 10 er shathe 20 add kra
// $y=2;
// echo $x;

// $x=10;
// $y=2;
// var_dump($x==$y); 
// var_dump($x!=$y);
// var_dump($x===$y);

//conditional statement: if, if-else,if-elseif-else, switch.
// $age=12;
// if($age>18){
//   echo"she is an addult";
// }
// else{
//   echo "she is not an adult";
// }
//using logical operator
// $age=21;
// if($age>18 && $age<25){
//   echo"she is an addult";
// }
// else{
//   echo "she is not an adult";
// }

//nested else-if:
// $age=12;
// if($age>18){
//   echo"she is an addult <br> ";
//   if($age<20){
//     echo "she is not greater than 20";
//   }
//   else{
//     echo "she is greater than 20";
//   }
//   }
// else{
//   echo "she is not an adult";
// }
//ternary operator
// $age = 12;//? er porer ta true hoile r : er porer ta false hoile 
// echo $age>18 ? "she is an adult" : "she is not an adult";

// $age=19;
// if($age>18){
//   echo "you are aligible";
// }
// elseif($age == 18){
//   echo "you are 18";
// }
// elseif($age<0){
//   echo "invalid input";
// }
// else{
//   echo "you are not aligible";
// }

//switch
// $color_name = "pink";
// switch($color_name){
//   case "red":
//     echo "your fvrt color is red"; 
//     break;
//   case "green":
//     echo "your fvrt color is green"; 
//     break;
//   case "blue":
//     echo "your fvrt color is blue"; 
//     break;
//   case "yellow":
//     echo "your fvrt color is yellow";  
//     break;
//   default:
//   echo "user input is invalid";
// }




?>