<?php
session_start();
require_once 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$time=$_POST['sel_time'];
$cost=$_POST['cost'];

if ($cost==10){
    mysqli_query($connect,query: "INSERT INTO `reservation` (`id`, `Name`, `Email`, `Date`, `Time`, `Price_one`, `Price_two`) VALUES (NULL, '$name', '$email', NULL, '$time', '$cost', NULL)");
} else{
mysqli_query($connect,query: "INSERT INTO `reservation` (`id`, `Name`, `Email`, `Date`, `Time`, `Price_one`, `Price_two`) VALUES (NULL, '$name', '$email', NULL, '$time', NULL, '$cost')");
}
//запись пока не работает даже без if(для цены),не исключаю что надо пробовать mysqli_multi_query
?>