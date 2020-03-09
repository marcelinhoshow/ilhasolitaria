<?php
	include 'conexao.php';
    session_start();
    header("Content-type: text/html; charset=utf-8");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Ilha Solitária</title>
         <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='../html/user/index.php'", 5000);
            }
            function failed(){
                setTimeout("window.location='../html/login.php'", 5000);
            }
        </script>

        	<style type="text/css" media="screen">
		#centro {
			width:100px;
			height:100px;
			position:absolute;
			top:50%;
			left:50%;
			margin-top:-50px;
			margin-left:-50px;
		}
		#centro1 {
			width:100px;
			height:100px;
			position:absolute;
			top:66%;
			left:50%;
			margin-top:-50px;
			margin-left:-50px;
		}
		.pulse {
			animation: pulse 0.7s infinite;
			margin: 0 auto;
			display: table;
			animation-direction: alternate;
			-webkit-animation-name: pulse;
			animation-name: pulse;
			}
		@-webkit-keyframes pulse {
			0% {
			-webkit-transform: scale(1);
			-webkit-filter: brightness(100%);
			}
			100% {
			-webkit-transform: scale(1.1);
			-webkit-filter: brightness(200%);
			}
			}
		@keyframes pulse {
			0% {
			transform: scale(1);
			filter: brightness(100%);
			}
			100% {
			transform: scale(1.1);
			filter: brightness(200%);
			}
			}
		</style>

    </head>
    <body>
        <?php
        	include 'conexao.php';
            $usu_email = $_POST["usu_email"];
            $usu_senha = $_POST["usu_senha"];
            
            $sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usu_email = '$usu_email' AND usu_senha = md5('$usu_senha');");
            $result = mysqli_num_rows($sql);
            
            if($result == 0){
            		echo "<div id='centro'>";
         		    echo "<img class='pulse' src='../img/erro.png' style='width: 100px;'/>";
         		    echo "</div>";
                	echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["Email"]=$_POST["usu_email"];
                $_SESSION["Senha"]=$_POST["usu_senha"];
               		echo "<div id='centro'>";
         		    echo "<img class='pulse' src='../img/correto.png' style='width: 100px;'/>";
         		    echo "</div>";
               		echo"<script language='javascript'>sucesso()</script";
            }
        ?>
    </body>
</html>