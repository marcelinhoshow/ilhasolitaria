<?php
session_start();
if(!isset($_SESSION["Email"])){
  header('Location:../login.php');
}
?>
<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" >
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <title>Ilha Solitária</title>
      <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
      <style>
        body{
          background-color:#17a2b8;
        }
        .container{
          position: relative;
          height:100vh;
        }
        h1{
          color:#FFF;
          text-align:center;
          margin-bottom:25px;
          font-size:1.5rem;
        }
        .arrows a{
          color:#FFF;
        }
        .arrows a:hover{
          text-decoration:none;
        }
        .list-group li{
          padding-left:40px;
          -webkit-transition: all 0.25s;
          transition: all 0.25s;
        }
        .list-group li:hover{
          background-color:#17a2b8;
          color:#FFF;
        }
        .form-check-label{
          width:100%;
        }
        .form-check-input:hover,.form-check-label:hover{
          cursor:pointer;
        }
        .quiz-box{
          height:100vh;
        }
        .owl-next-btn,.owl-prev-btn{
          font-weight:bold;
          -webkit-transition: all 0.5s;
          transition: all 0.5s;
        }
        .owl-next-btn:hover, .owl-prev-btn:hover{
          color:#f0ad4e;
        }
        @media (max-width: 576px) {
          .owl-next-btn,.owl-prev-btn{
            position:relative !important;
            bottom:25px;
          }
        }
      </style>
   </head>
   <body>

      <div id="voltar">
         <a href="index.php"><i style="position : fixed; top: 20px; left: 20px; margin-left: 1%; padding-top: 1%; padding-bottom: 90% ; color: #F0F8FF; width: 30px; height: 30px;" class="material-icons">arrow_back</i></a>
      </div>

      <form id="form-quiz" action="quiz_resultado.php" method="POST">
      <input type="hidden" name="email" value="<?php echo $_SESSION['Email']; ?>" />
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="title"></h1>
          </div>
        </div>
        <div class="row quiz-box">
          <div class="col-md-8 align-self-center offset-md-2">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz01.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">1. Eu me sinto tenso (a) ou contraído (a):</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q1" class="form-check-input" type="radio" id="qa1" value="3"><label class="form-check-label" for="qa1">a) a maior parte do tempo</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q1" class="form-check-input" type="radio" id="qb1" value="2"><label class="form-check-label" for="qb1">b) boa parte do tempo</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q1" class="form-check-input" type="radio" id="qc1" value="1"><label class="form-check-label" for="qc1">c) de vez em quando</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q1" class="form-check-input" type="radio" id="qd1" value="0"><label class="form-check-label" for="qd1">d) nunca</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz02.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">2. Eu ainda sinto que gosto das mesmas coisas de antes:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q2" class="form-check-input" type="radio" id="qa2" value="0"><label class="form-check-label" for="qa2">a) sim, do mesmo jeito que antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q2" class="form-check-input" type="radio" id="qb2" value="1"><label class="form-check-label" for="qb2">b) não tanto quanto antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q2" class="form-check-input" type="radio" id="qc2" value="2"><label class="form-check-label" for="qc2">c) só um pouco</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q2" class="form-check-input" type="radio" id="qd2" value="3"><label class="form-check-label" for="qd2">d) já não consigo ter prazer em nada</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz03.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">3. Eu sinto uma espécie de medo, como se alguma coisa ruim fosse acontecer:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q3" class="form-check-input" type="radio" id="qa3" value="3"><label class="form-check-label" for="qa3">a) sim, de jeito muito forte</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q3" class="form-check-input" type="radio" id="qb3" value="2"><label class="form-check-label" for="qb3">b) sim, mas não tão forte</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q3" class="form-check-input" type="radio" id="qc3" value="1"><label class="form-check-label" for="qc3">c) um pouco, mas isso não me preocupa</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q3" class="form-check-input" type="radio" id="qd3" value="1"><label class="form-check-label" for="qd3">d) não sinto nada disso</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz04.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">4. Dou risada e me divirto quando vejo coisas engraçadas:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q4" class="form-check-input" type="radio" id="qa4" value="0"><label class="form-check-label" for="qa4">a) do mesmo jeito que antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q4" class="form-check-input" type="radio" id="qb4" value="1"><label class="form-check-label" for="qb4">b) atualmente um pouco menos</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q4" class="form-check-input" type="radio" id="qc4" value="2"><label class="form-check-label" for="qc4">c) atualmente bem menos</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q4" class="form-check-input" type="radio" id="qd4" value="3"><label class="form-check-label" for="qd4">d) não consigo mais</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz05.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">5. Estou com a cabeça cheia de preocupações:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q5" class="form-check-input" type="radio" id="qa5" value="3"><label class="form-check-label" for="qa5">a) a maior parte do tempo</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q5" class="form-check-input" type="radio" id="qb5" value="2"><label class="form-check-label" for="qb5">b) boa parte do tempo</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q5" class="form-check-input" type="radio" id="qc5" value="1"><label class="form-check-label" for="qc5">c) de vez em quando</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q5" class="form-check-input" type="radio" id="qd5" value="0"><label class="form-check-label" for="qd5">d) raramente</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz06.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">6. Eu me sinto alegre:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q6" class="form-check-input" type="radio" id="qa6" value="3"><label class="form-check-label" for="qa6">a) nunca</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q6" class="form-check-input" type="radio" id="qb6" value="2"><label class="form-check-label" for="qb6">b) poucas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q6" class="form-check-input" type="radio" id="qc6" value="1"><label class="form-check-label" for="qc6">c) muitas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q6" class="form-check-input" type="radio" id="qd6" value="0"><label class="form-check-label" for="qd6">d) a maior parte do tempo</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz07.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">7. Consigo ficar sentado à vontade e me sentir relaxado:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q7" class="form-check-input" type="radio" id="qa7" value="0"><label class="form-check-label" for="qa7">a) sim, quase sempre</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q7" class="form-check-input" type="radio" id="qb7" value="1"><label class="form-check-label" for="qb7">b) muitas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q7" class="form-check-input" type="radio" id="qc7" value="2"><label class="form-check-label" for="qc7">c) poucas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q7" class="form-check-input" type="radio" id="qd7" value="3"><label class="form-check-label" for="qd7">d) nunca</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz08.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">8. Eu estou lento(a) para pensar e fazer coisas:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q8" class="form-check-input" type="radio" id="qa8" value="3"><label class="form-check-label" for="qa8">a) quase sempre</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q8" class="form-check-input" type="radio" id="qb8" value="2"><label class="form-check-label" for="qb8">b) muitas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q8" class="form-check-input" type="radio" id="qc8" value="1"><label class="form-check-label" for="qc8">c) poucas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q8" class="form-check-input" type="radio" id="qd8" value="0"><label class="form-check-label" for="qd8">d) nunca</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz09.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">9. Eu tenho uma sensação ruim de medo, com um frio na barriga ou um aperto no estômago:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q9" class="form-check-input" type="radio" id="qa9" value="0"><label class="form-check-label" for="qa9">a) nunca</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q9" class="form-check-input" type="radio" id="qb9" value="1"><label class="form-check-label" for="qb9">b) de vez em quando</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q9" class="form-check-input" type="radio" id="qc9" value="2"><label class="form-check-label" for="qc9">c) muitas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q9" class="form-check-input" type="radio" id="qd9" value="3"><label class="form-check-label" for="qd9">d) quase sempre</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz10.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">10. Eu perdi o interesse em cuidar da minha aparência:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q10" class="form-check-input" type="radio" id="qa10" value="3"><label class="form-check-label" for="qa10">a) completamente</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q10" class="form-check-input" type="radio" id="qb10" value="2"><label class="form-check-label" for="qb10">b) não estou mais me cuidando como eu deveria</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q10" class="form-check-input" type="radio" id="qc10" value="1"><label class="form-check-label" for="qc10">c) talvez não tanto quanto antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q10" class="form-check-input" type="radio" id="qd10" value="0"><label class="form-check-label" for="qd10">d) me cuido do mesmo jeito que antes</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz11.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">11. Eu me sinto inquieto(a), como se eu não pudesse ficar parado(a) em lugar nenhum:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q11" class="form-check-input" type="radio" id="qa11" value="3"><label class="form-check-label" for="qa11">a) sim, demais</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q11" class="form-check-input" type="radio" id="qb11" value="2"><label class="form-check-label" for="qb11">b) bastante</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q11" class="form-check-input" type="radio" id="qc11" value="1"><label class="form-check-label" for="qc11">c) um pouco</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q11" class="form-check-input" type="radio" id="qd11" value="0"><label class="form-check-label" for="qd11">d) não me sinto assim</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz12.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">12. Fico animado(a) esperando as coisas boas que estão por vir:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q12" class="form-check-input" type="radio" id="qa12" value="0"><label class="form-check-label" for="qa12">a) do mesmo jeito que antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q12" class="form-check-input" type="radio" id="qb12" value="1"><label class="form-check-label" for="qb12">b) um pouco menos que antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q12" class="form-check-input" type="radio" id="qc12" value="2"><label class="form-check-label" for="qc12">c) bem menos que antes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q12" class="form-check-input" type="radio" id="qd12" value="3"><label class="form-check-label" for="qd12">d) quase nunca</label>
                    </li>      
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz13.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">13. de repente, tenho a sensação de entrar em pânico:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q13" class="form-check-input" type="radio" id="qa13" value="3"><label class="form-check-label" for="qa13">a) a quase todo o momento</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q13" class="form-check-input" type="radio" id="qb13" value="2"><label class="form-check-label" for="qb13">b) várias vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q13" class="form-check-input" type="radio" id="qc13" value="1"><label class="form-check-label" for="qc13">c) de vez em quando</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q13" class="form-check-input" type="radio" id="qd13" value="0"><label class="form-check-label" for="qd13">d) não senti isso</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="../../img/quiz/quiz14.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">14. Consigo sentir prazer quando assisto a um bom programa de televisão, de rádio ou quando leio alguma coisa:</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <input name="q14" class="form-check-input" type="radio" id="qa14" value="0"><label class="form-check-label" for="qa14">a) quase sempre</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q14" class="form-check-input" type="radio" id="qb14" value="1"><label class="form-check-label" for="qb14">b) várias vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q14" class="form-check-input" type="radio" id="qc14" value="2"><label class="form-check-label" for="qc14">c) poucas vezes</label>
                    </li>
                    <li class="list-group-item">
                      <input name="q14" class="form-check-input" type="radio" id="qd14" value="3"><label class="form-check-label" for="qd14">d) quase nunca</label>
                    </li>      
                  </ul>
                </div>
              </div>
            </div>
            <div class="row arrows">
              <div class="col-md-4 offset-md-2 text-left">
                <a class="owl-prev-btn" href=""><i class="fas fa-arrow-circle-left"></i> Anterior</a>
              </div>
              <div class="col-md-4 text-right">
                <a class="owl-next-btn" href="">Próximo <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script>
        $(function () {
          var owl = $('.owl-carousel').owlCarousel({
              margin:0,
              responsiveClass:true,
              autoplay:false,
              mouseDrag:false,
              responsive:{
                  0:{
                      items:1,
                  }
              }
          });

          owl.on('changed.owl.carousel', function (e) {
            if (("current: ",e.item.index == 1)){
              if(typeof $('input[name=q1]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 2)){
              if(typeof $('input[name=q2]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 3)){
              if(typeof $('input[name=q3]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 4)){
              if(typeof $('input[name=q4]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 5)){
              if(typeof $('input[name=q5]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 6)){
              if(typeof $('input[name=q6]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 7)){
              if(typeof $('input[name=q7]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 8)){
              if(typeof $('input[name=q8]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 9)){
              if(typeof $('input[name=q9]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 10)){
              if(typeof $('input[name=q10]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 11)){
              if(typeof $('input[name=q11]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 12)){
              if(typeof $('input[name=q12]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }
            }
            if (("current: ",e.item.index == 13)){
              if(typeof $('input[name=q13]:checked').val() === "undefined"){
                alert('Selecione uma questão');
                owl.trigger('prev.owl.carousel');
              }else{
                $('.owl-prev-btn').remove();
                $('.owl-next-btn').replaceWith("<input type='submit' name='enviar' class='btn btn-primary' value='Gerar Gráfico' />");
              }
            }
          });

          $('#form-quiz').on('submit',function(e){
            if(typeof $('input[name=q14]:checked').val() === "undefined"){
              alert('Selecione uma questão');
              return false;
            }else{
              return true;
            }
          });

          $('.owl-next-btn').click(function(e) {
            e.preventDefault();
            owl.trigger('next.owl.carousel');            
          });
          $('.owl-prev-btn').click(function(e) {
            e.preventDefault();
            owl.trigger('prev.owl.carousel');
          });
        });
      </script>
   </body>
</html>