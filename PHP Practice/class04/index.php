<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>


<body>
  <!-- action- submit krle data gukla k kothay ni jabe seta likhbo -->
  <!-- methos- kon system e form er data pass hbe seta, 2 ta system e pass hoite pare -->
  <!-- get method- non sensative data pass kre, ata di pass krle data url bar e dekhabe -->
  <!-- post method- sensative info gula post di pathabo seta internally pass  -->
  <form action="./formdata.php" method="POST">
    <label for="">name</label>
    <input type="text" name="name"><br><br>
    <!-- input er shathe akta name attribute must diye dite hbe nahoy data pass hbe na -->
    <label for="">email</label>
    <input type="text" name="email"><br><br>
    <input type="submit" value="submit">
  </form>

</body>

</html>



<?php


// array: in php 1.indexing array,2.assosiative array,3.multidimentional array
// indexing array
// $myarray = array("item01",5,10,2,true);
// $myarray = ["item01",5, 2, true];
// print_r($myarray);  //echo diye output dekhay na print_r or var_dump diye dekha lage


// $myarray = ["item01",5, 2, true];
// echo "<pre>";
// var_dump($myarray);
// echo "</pre>";

// $myarray = ["item01",5, 2, true];
// echo "<pre>";
// var_dump($myarray[2]);
// echo "</pre>";

// array er value chng kra
// $myarray = ["item01",5, 2, true];
// $myarray[1]="good";
// echo "<pre>";
// var_dump($myarray);
// echo "</pre>";

// foreach loop mainly for array
// for loop er mddhe amader k length bole dewa lage 
// $cars = ["volvo","bmw","toyota"];//array er length bole dewa lage na o nijei array er first to last read kre print kre fele
// foreach($cars as $item){//"as" key word
//   echo "$item <br>";
// }


// arraypush system last er jai nnew item add kre 
// $cars = ["volvo","bmw","toyota"];
// array_push($cars,"new item");
// var_dump($cars);


// $cars = ["volvo","bmw","toyota"];
// echo "<pre>";
// print_r($cars);
// echo "</pre>";

//assosiative array 
// $cars = ["brand" => "ford", "model" => "mustag", "year" => 1964];
// // $cars['year'] = '2025';
// // echo "<pre>";
// // print_r($cars);
// //print_r ($cars['model']);// jdi specific kri dekhte chai je kono akta 
// //echo "</pre>";
// foreach ($cars as $key => $item) {
//   echo "$key : $item <br>";
// }

//multidymentional array
// $cars = ["volvo", "bmw", "ford1", "ford2" => ["ford", 1994, "type" => ["old", "new", ["popular", "unpopular"]]], "ford3" => ["ford",  "2010"], "ford4"];
// echo "<pre>";
// print_r($cars);
// print_r($cars['ford2']["type"][2][0]);
// echo "<pre/>";


//remove item from indexing array
//$cars = ["volvo", "bmw", "toyota"];
// array_splice($cars, 1, 1);
//unset($cars[1]);
//var_dump($cars);

//remove item from assosiative array
// $cars = ["brand" => "ford", "model" => "mustag", "year" => 1964];

// var_dump(array_diff($cars, ["ford"]));

//super global
// $text = "this is a text";
// function test()
// {
//   $x = "this is inside function";
//   //echo $text; hbe na amne cz text global variable
//   echo $GLOBALS["text"];
// }
// $y = "this is x";
// test();
// var_dump($GLOBALS);
