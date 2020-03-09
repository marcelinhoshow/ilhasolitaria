<?php
include '../src/gif.php';
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Ilha Solitária</title>
		 <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
		<style type="text/css" media="screen">
		html{
			height: 100%;
		}
		body{
			height: 100%;
			overflow: auto;
		}
		.container{
			padding-left:10%;
			padding-right:10%;
			padding-top: 100%;
			height: 100%;
			align-content: center;
		}
		.container-fluid{
			padding-left:10%;
			padding-right:10%;
			height:100%;
			align-content: center;
		}
		.container-cards{
			padding-left:10%;
			padding-right:10%;
			padding-bottom:5%;
			align-content: center;
			width: 100%;
		}
		.col-sm-12{
			padding-bottom:2%;
		}
		.image_outer_container{
			margin-top: auto;
			margin-bottom: auto;
			border-radius: 50%;
			position: relative;
		}
		.image_inner_container{
			border-radius: 50%;
			padding: 5px;
			background: #833ab4;
			background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
			background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
			}
		.image_inner_container img{
			height: 200px;
			width: 200px;
			border-radius: 50%;
			border: 5px solid white;
		}
		.image_outer_container .green_icon{
			background-color: #4cd137;
			position: absolute;
			right: 30px;
			bottom: 10px;
			height: 30px;
			width: 30px;
			border:5px solid white;
			border-radius: 50%;
		}
		.image_outer_container .red_icon{
			background-color: #EE0000;
			position: absolute;
			right: 30px;
			bottom: 10px;
			height: 30px;
			width: 30px;
			border:5px solid white;
			border-radius: 50%;
		}
		.img-flat{
			position: absolute;
			right: 150px;
			bottom: 10%;
			height: 30px;
			width: 30px;
			border:5px solid white;
			border-radius: 50%;
		}
		.btn-group{
			position: relative;
			right: 150px;
			bottom: 10%;
			left: 0px;
			width: 150px;
			margin: 1px;
		}
		#mostra {
			border-left:1px;
			border-right:1px;
			width:10px;
			height:10px;
			position:absolute;
			top:150%;
			left:110%;
			right:80%;
			margin-top:-50px;
			margin-left:-50px;
		}
		#mostra1 {
			border-left:1px;
			border-right:1px;
			width:10px;
			height:10px;
			position:absolute;
			top:150%;
			left:110%;
			right:80%;
			margin-top:-50px;
			margin-left:-50px;
		}
		.card-card-container {
        margin-top: 200px;
        }
        .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
        }
        .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
        }
        /*
        * Card component
        */
        .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        }
		</style>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="links.php">Links</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Usuário
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="login.php">Entrar</a>
							<a class="dropdown-item" href="cadastro.php">Cadastrar</a>
						</li>
					</ul>
					<form class="form-inline">
						<a href="login.php"><button class="btn btn-outline-primary" style="margin-right: 5px;" type="button" >Entrar</button></a>
						<a href="cadastro.php"><button class="btn btn-outline-primary" style="margin-right: 0px;" type="button" >Cadastrar</button></a>
					</form>
				</div>
			</li>
		</ul>
	</nav>

	<img src="../img/landing-page.jpg" class="img-fluid" width="1982" height="450" alt="">
	
	
	<br>
	<br>
	<br>

	<div class="container-cards">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="d-flex justify-content-center h-100">
					<div class="image_outer_container">
						<div class="green_icon"></div>
						<div class="image_inner_container">
							<a href="https://www.instagram.com/n1ghtstyle/" target="_blank"><img src="../img/profile/marcelo.png"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="d-flex justify-content-center h-100">
					<div class="image_outer_container">
						<div class="green_icon"></div>
						<div class="image_inner_container">
							<a href="https://www.instagram.com/dnetoo/" target="_blank"><img src="../img/profile/lidio.png"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="d-flex justify-content-center h-100">
					<div class="image_outer_container">
						<div class="green_icon"></div>
						<div class="image_inner_container">
							<a href="https://www.instagram.com/caiov.scioli/" target="_blank"><img src="../img/profile/caio.png"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="d-flex justify-content-center h-100">
					<div class="image_outer_container">
						<div class="green_icon"></div>
						<div class="image_inner_container">
							<a href="https://www.instagram.com/victtor__henrique/" target="_blank"><img src="../img/profile/victor.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="../img/amor.jpg" class="img-fluid">
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

		<section id="contact">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.8437415094286!2d-49.956186685046774!3d-22.208043885371545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd7217b8e873b%3A0xcd65e07a4ab43f!2sETEC+Ant%C3%B4nio+Devisate!5e0!3m2!1spt-BR!2sbr!4v1539308788648" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-5">
						<h4><strong>Fale conosco</strong></h4>
						<form action="#" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" name="nome" pattern="[\wà-úÀ-Ú ]+[\s]{1,}/?[\wà-úÀ-Ú ]*" id="" value="" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="" value="" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input type="telephone" class="form-control" name="telefone" id="telefone" value="" placeholder="Telefone">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="mensagem" id="" rows="3" placeholder="Mensagem"></textarea>
							</div>
							<button class="btn btn-primary" type="submit" id="faleconosco" name="button">
							<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<br>
		
		<!-- SCRIPTS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="../lib/js/jquery.mask.js"></script>
		
		<script type="text/javascript">
		jQuery('.exampleModalCenter').hide();
	    $(document).ready(function() {
        $('#exampleModalCenter').modal('show');
		})
		$(document).ready(function(){
		$('#telefone').mask('(00) 00000-0000');
		});
		</script>

	</body>
</html>