<?php
    include 'conexao.php';
    session_start();
    
    if(!isset($_SESSION["usu_email"]) || !isset($_SESSION["usu_senha"])){
        header('Location: index.php');
       
    }
?>