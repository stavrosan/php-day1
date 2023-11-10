<?php

//Ex.1
//$firstName="Stavros";
 //echo "<h1>Hello, $firstName!</h1>"; 
 
 //Ex.2
 $name="Joe";
 $age=28;
 $jobTitle="Developer";

 $print="My name is " . $name . ",and I am " . $age . " years old ,and I work as a " . $jobTitle;
 echo $print;

 //Ex.3
 $array1=array("Mark", "John", "Georg","Lisa");
 echo "<pre>The third player is {$array1[2]} <br>" ;
 
 //Advanced
$multArray=array(
array("Mickey","Donald Duck","Pluto"),
array("Luigi","Super Mario","Browser"),
array("Pokemon","Goku","Dred")
);

echo "<h1>The most famous mouse in the world: {$multArray[0][0]} Mouse <br>" ;

echo "The {$multArray[1][1]} and {$multArray[1][0]} bros"

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2><?=$multArray[0][2]?></h2>

</body>
</html>