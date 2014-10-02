<?php




echo $_GET['email'];
echo $_GET['pass'];


$connection = mysqli_connect("localhost","870147","Ias343073","870147");
mysqli_query($connection,"INSERT INTO users(user,pass) VALUES('".$_GET['email']."','".$_GET['pass']."')");

?>