<html> 
 <head> 
  <title>Ilha Solitária</title>
   <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
  <meta charset = "utf-8"/>
 <script type="text/javascript"> 
 function loginsuccessfully() { 
 setTimeout ("window.location='teste.php'", 3000);
 } 
 function loginfailed()
{ 
 setTimeout ("window.location='login.php'", 3000); 
} 
 </script> 
</head> 
<body> 
   <?php 
   include 'conexao.php';
   $usu_email = $_POST["usu_email"];
   $usu_senha = $_POST["usu_senha"];
   $sql = mysqli_query ("SELECT * FROM user WHERE usu_email = '$usu_email' AND usu_senha = '$usu_senha'") or die (mysqli_error()); 
   $row = mysqli_num_rows ($sql); 
   if($row > 0) { $_SESSION ['usu_email']=$_POST ['usu_email']; $_SESSION ['usu_senha']=$_POST ['usu_senha']; 
   echo "<script>loginsuccessfully()</script>"; 
   echo "Você foi autenticado com sucesso! Aguade um instante."; 
  } 
  else { 
   echo " <center><h1> Nome de usuário ou usu_senha inválido! aguarde um instante para voltar para a sessão de login.</h1></center>";
   echo "<script>loginfailed()</script>"; 
  } 
?> 
</body> 
</html>﻿