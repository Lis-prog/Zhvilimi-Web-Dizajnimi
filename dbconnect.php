<?php
    try{
        $pdo = new PDO("mysql:host=localhost; dbname=phpmyadmin", "root", "");
    }catch(PDOException $pdo){
        die("lidhja deshtoi");
    }
?>