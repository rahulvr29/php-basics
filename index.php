<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <!-- <div class="header">
    <div class="h-a">
      <h2>VR</h2>
    </div>
    <div class="h-b">
      <p >Home</p>
      <p >Shop</p>
      <p >Conatct</p>
      <p >About</p>
    </div> -->


    <?php 


$color = ["red", "blue", "green", "yellow", "violet",];

foreach ($color as $color){
  echo "$color <br> " ;
}
echo "<br>";


$fruits = array("apple", "Orange", "banana");

foreach ($fruits as $sample){
  echo "$sample <br> " ;
}
echo "<br>";

$lesson = ["topic" => 1, "topic1" => 2, "topic2" => 3, "topic3"=> 4, "topic4" => 5,];

foreach($lesson as $x => $y){
  echo "$x : $y <br>" ;
}

?> 
  </div>
</body>
</html>