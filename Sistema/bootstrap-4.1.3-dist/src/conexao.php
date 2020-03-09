<?php
	$host="localhost";
	$user="root";
	$pass="";
	$banco="tcc";
	$conexao = new mysqli($host, $user, $pass, $banco);
	$conexao->set_charset("UTF8");
	if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
?>