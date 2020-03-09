<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="rodape.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Ilha Solitária</title>
  <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
  
   <style>
       .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
        }
        .btn.btn-signin {
        background-color: #4d90fe; */
        background-color: rgb(104, 145, 162);
        background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
        }
        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
        background-color: rgb(12, 97, 33);
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
  </style>

  </head>
  <body>

  	<br>
  	<br>

<div class="container" align="center">
<form class="form-horizontal" action="../src/processo.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Cadastro do Usuário</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usu_nome">Nome</label>  
  <div class="col-md-5">
  <input id="usu_nome" name="usu_nome" pattern="[\wà-úÀ-Ú ]+[\s]{1,}/?[\wà-úÀ-Ú ]*" type="text" placeholder="Nome do usuário" class="form-control input-md" required="">
  </div>
</div>

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
          <div class="input-group-text" onclick="mostrarSenha()"><i class="material-icons">visibility</i></div>
           <input id="usu_senha" name="usu_senha" type="password" placeholder="Digite a senha" class="form-control input-md" onkeyup="javascript:verifica()" required="">
    <table id="mostra" align="right"></table>
        </div>
        </div>
      </div>

<!-- Date input -->
<div class="form-group">
  <label class="col-md-4 control-label" for="usu_data">Data Nascimento</label>
  <div class="col-md-5">
    <input id="usu_data" name="usu_data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" max="2018-10-23" type="date" placeholder="Digite a data de nascimento" class="form-control input-md" required="">
  </div>
</div>

<!-- Phone input -->
<div class="form-group">
  <label class="col-md-4 control-label" for="usu_celular">Celular</label>
  <div class="col-md-5">
    <input id="usu_celular" name="usu_celular" type="telephone" placeholder="Digite seu celular" class="form-control input-md" required="">
	</div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <button type="submit" id="Confirmar" name="Validar" onClick="validarSenha()" class="btn btn-primary">Confirmar</button>
    <a href="index.php"><button id="idCancelar" name="idCancelar" class="btn btn-danger">Cancelar</button></a>
  </div>
</div>

</fieldset>
</form>
   </div>
   
<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../lib/js/jquery.mask.js"></script>

  <script>
  $(document).ready(function(){
  $('#usu_celular').mask('+00 (00) 00000-0000');
  });

  function verifica(){
   senha = document.getElementById("usu_senha").value;
   forca = 0;
   mostra = document.getElementById("mostra");
   if((senha.length >= 4) && (senha.length <= 7)){
      forca += 10;
   }else if(senha.length>7){
      forca += 25;
    }
   if(senha.match(/[a-z]+/)){
      forca += 10;
    }
   if(senha.match(/[A-Z]+/)){
      forca += 20;
    }
   if(senha.match(/d+/)){
      forca += 20;
    }
   if(senha.match(/W+/)){
      forca += 25;
    }
   return mostra_res();
  }

  function mostra_res(){
   if(forca < 30){
   mostra.innerHTML = '<tr><td bgcolor="red" width="'+forca+'"></td><td>Fraca </td></tr>';
   }else if((forca >= 30) && (forca < 60)){
   mostra.innerHTML = '<tr><td bgcolor="yellow" width="'+forca+'"></td><td>Média </td></tr>';;
   }else if((forca >= 60) && (forca < 85)){
   mostra.innerHTML = '<tr><td bgcolor="blue" width="'+forca+'"></td><td>Forte </td></tr>';
   }else{
   mostra.innerHTML = '<tr><td bgcolor="green" width="'+forca+'"></td><td>Excelente </td></tr>';
  }
  }
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