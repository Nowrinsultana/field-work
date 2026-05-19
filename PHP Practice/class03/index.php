<?php
//loop: for,while, do-while, for-each
//basic while
// $num=2;
// while($num<20){
//   echo "the number is : $num<br>";
//   $num++;//$num+=5. $num+=2 amneo likha jabe
// }

//loop with conditional statement
// $num=5;
// while($num<20){
//   if($num ==10) break;//10 er shoman dekhle off kri dibe loop
//   echo "the number is: $num<br>";
//   $num++;
// }
// $num=5;
// while($num<20){
//   $num++;
//   if($num ==10) continue;//10 chara bakji sb print krbe.
//   echo "the number is: $num<br>";
// }
//do-while loop
// $num=5;
// do{
//   echo $num;
//   $num++;
// }
// while($num<5)

// for loop
// for($num=1; $num<10; $num++){
//   echo "the num is : $num<br>";
// }

//nested loop

// for($num=1; $num<10; $num++){
//   //echo "the num is : $num<br>";
//   for($num1=1;$num1<=5;$num1++)
//     echo "the number is $num.$num1<br>";
// }

//function
// function myfun(){
//   echo "i am a function";
// }
// myfun();
// myfun();
// myfun();
//user jei input dibe seta show krbe
// function myfun($name){
//   echo "i am a $name function";
// }
// myfun("php");
// myfun();
// myfun();
// function add($num1,$num2){
//   echo $num1+$num2;
// }
// add(10,20);

// function add($num1,$num2){
//   return $num1+$num2;//akhane return na di jdi echo ditam taile y er mddhe addition value ta jaito na 
// }
// $y=add(10,50);
// echo "<br>".$y+30;


//callback function
// function myfun($name){
//   return "hello".$name;
// }
// function greet($callback,$name){
//   echo $callback($name);
// }
// greet('myfun',"php");




?>