<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "desafio";


    try{
        $conn = new PDO("mysql:host={$servidor}; dbname={$database}", $usuario, $senha);
        $conn->exec("set names utf8");


    } catch (PDOException $e){
        echo $e->getMessage ();
    }
    


