<?php
$hostname = "localhost";
$dbname ="univemmt_database";
$Username ="univemmt_root";
$Password = "root1234";


$conn = mysqli_connect($hostname, $Username, $Password, $dbname);


if(!$conn){
  die("connection failed:" .mysqli_connect_error());

}
