<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Basics</title>
</head>
<body> 
<!-- <h2>PHP Form Validation Example</h2>
<p><span class="error">* Required field</span></p>
<form method="post" action="">  
  Name: <input type="text" name="name" value="">
  <span class="error"> </span>
  <br><br>
  E-mail: <input type="text" name="email" value="">
  <span class="error"> </span>
  <br><br>
  password: <input type="password" name="password" value="">
  <br><br>

  Confirm password: <input type="password" name="confirm_password" value="">
  
  <br><br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender"  value="other">Other  
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> -->

<?php 


$color = ["red", "blue", "green", "yellow", "violet",];

foreach ($color as $sample){
  echo "$sample <br> " ;
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
<?php



?> 


</body>
</html>