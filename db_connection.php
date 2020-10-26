<?php
$hostname = "localhost";
$dbname ="univemmt_database";
$Username ="root";
$Password = "";


$conn = mysqli_connect($hostname, $Username, $Password, $dbname);


if(!$conn){
  die("connection failed:" .mysqli_connect_error());

}
