<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ilha Solitária</title>
		 <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
		
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
			include 'ip.php';
			$usu_nome = $_POST["usu_nome"];
			$usu_email = $_POST["usu_email"];
			$usu_senha = $_POST["usu_senha"];
			$usu_data = $_POST["usu_data"];
			$usu_celular = $_POST["usu_celular"];

			$select = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usu_email = '$usu_email';");
			$result = mysqli_num_rows($select);
			$select1 = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usu_celular = '$usu_celular';");
			$result1 = mysqli_num_rows($select1);
			if($result || $result1 == 0){
				$sql = "INSERT INTO usuarios (usu_cod, usu_nome, usu_email, usu_senha, usu_data, usu_celular) VALUES (NULL,'$usu_nome', '$usu_email', md5('$usu_senha'), '$usu_data','$usu_celular')";
				mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

				/*$sql = "INSERT INTO log (log_ip, log_descricao, log_sistema, log_alteracao) VALUES ('$user_ip', '$sql', '$sql','$sql')";
				mysqli_query($conexao, $sql) or die (mysqli_error($conexao));*/		
		?>

		<div id="centro">
			<img class="pulse" src="../img/correto.png" style="width: 100px;" />
		</div>

		<div id="centro1">
			<!--<h3 class="pulse" style='text-align: center;font-family:"Segoe UI" , Roboto, "Helvetica Neue", Arial, sans-serif;'> Usuário cadastrado com sucesso </h3>-->
		</div>

		<META HTTP-EQUIV="REFRESH" CONTENT="5; URL=../html/login.php">

		<?php
		} else {
		?>

		<div id="centro">
			<img class="pulse" src="../img/erro.png" style="width: 100px;" />
		</div>

		<div id="centro1">
			<!--<h3 class="pulse" style='text-align: center;font-family:"Segoe UI" , Roboto, "Helvetica Neue", Arial, sans-serif;'> Usuário cadastrado ativo </h3>-->
		</div>

		<META HTTP-EQUIV="REFRESH" CONTENT="5; URL=../html/login.php">

		<?php
		}
		?>

	</body>
</html>