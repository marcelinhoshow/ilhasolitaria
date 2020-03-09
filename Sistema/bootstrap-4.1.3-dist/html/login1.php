<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Ilha Solitária</title>
		<link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>

		<style type="text/css" media="screen">
			#form-horizontal {
			width:100px;
			height:100px;
			position:absolute;
			top:50%;
			left:50%;
			margin-top:-50px;
			margin-left:-50px;
		}
		</style>

	</head>
	<body>
		<br>
		<br>
		<br>
		<div class="olho">
			<img src="..img/dialspeed.jpg" width="30" height="30" alt="">
		</div>
		<div class="container" align="center">
			<form class="form-horizontal" action="../src/conferirdados.php" method="POST">
				<fieldset>
					<img src="../img/favicon.png" width="150" height="150" alt="">
					<!-- Form Name -->
					<legend></legend>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="usu_email">E-Mail</label>
						<div class="col-md-5">
							<input id="usu_email" name="usu_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text" placeholder="Login do usuario" class="form-control input-md" required="">
						</div>
					</div>
					<!-- Password input -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="usu_senha">Senha</label>
						<div class="col-md-5">
							<div class="input-group-prepend">
								<input id="usu_senha" name="usu_senha" type="password" onclick="mostrarSenha()" placeholder="Digite a senha" class="form-control input-md">
							</div>
						</div>
					</div>
					<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="idConfirmar"></label>
						<div class="col-md-8">
							<button type="submit" id="entrar" name="entrar"  class="btn btn-primary">Entrar</button>
							<a href="redefinir.php"><button type="submit" id="redefinir" name="redefinir"  class="btn btn-primary">Esqueceu a senha?</button></a>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script>
			function mostrarSenha(){
		var tipo = document.getElementById("usu_senha");
		if(tipo.type == "password"){
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
		</script>
	</body>
</html>