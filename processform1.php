<style>
  body {
      background-position: center;
      background-size: cover;
      background-image: url(https://media2.giphy.com/media/xT9IgkiK459Cvd5tIs/giphy.gif?cid=ecf05e4778ppwecmra4mqkkt286ved4fkout8rupr23y6wok&rid=giphy.gif&ct=g);
      min-height: 75%;
    }
</style>
<center>
<?php
$initial=$_POST['initial'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$confirm=$_POST['ConPassword'];
$date = date("H:i, jS F, Y.");
$vehicle1=$_POST['vehicle1'];
$vehicle2=$_POST['vehicle2'];
$vehicle3=$_POST['vehicle3'];
$vehicle4=$_POST['vehicle4'];
$vehicle5=$_POST['vehicle5'];
 
  echo "เวลา ";
  echo "$date<br>";
  echo "ชื่อ: $initial $name<br>";
  echo "เพศ : $sex<br>";
  echo "Email : $email<br>";
  echo "ในวันหนึ่งคุณใช้อุปกรณ์ใดมากที่สุด : ";
    echo "<br/>";
    if($vehicle1) echo "- $vehicle1";
    echo "<br/>";
    if($vehicle2) echo "- $vehicle2";
    echo "<br/>";
    if($vehicle3) echo "- $vehicle3";
    echo "<br/>";
    if($vehicle4) echo "- $vehicle4";
    echo "<br/>";
    if($vehicle5) echo "- $vehicle5";
    echo "<br/>";
  echo "Username :  $Username<br>";
  echo "Password : $Password<br>";
?></center>