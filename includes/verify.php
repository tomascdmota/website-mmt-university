<?php

if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];

    require_once 'db_connection.php';



    $resultSet = $mysqli->query("SELECT verified, vkey FROM users WHERE verified = 0 and vkey='$vkey'");


    if($resultSet-> num_rows == 1){
        //validate email
        $update = $mysqli->query("UPDATE users SET verified = 1 WHERE vkey ='$vkey' LIMIT 1");

        if($update){
            echo " A sua conta foi verificada, ja pode acessar.";
        }
         else {
             echo $mysqli->error;
         }
    } else {
        echo "Esta conta e invalida ou nao foi verificada";
    }
}

else {
    die("");
}