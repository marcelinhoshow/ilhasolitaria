<?php
  include '../../src/gif.php';
  include '../../src/conexao.php';

if(!$_GET['ok']){
  $email = $_POST['email'];
  if(!empty($email)){
    $ans = (int)$_POST['q1']+$_POST['q3']+$_POST['q5']+$_POST['q7']+$_POST['q9']+$_POST['q11']+$_POST['q13'];
    $dep = (int)$_POST['q2']+$_POST['q4']+$_POST['q6']+$_POST['q8']+$_POST['q10']+$_POST['q12']+$_POST['q14'];
    $sql = "INSERT INTO quiz(qui_ansiedade,qui_depressao,qui_email) VALUES ('$ans','$dep','$email')";

    if ($conexao->query($sql) === TRUE) {
        header('Location:quiz_resultado.php?ok='.$email);
    } else {
        echo "Error: " . $sql . "<br>" . $conexao->error;
    }
  }
}else{
$email = $_GET['ok'];
$sql = "SELECT * FROM quiz WHERE qui_email = '$email' ORDER BY qui_data DESC";
$result = mysqli_query($conexao, $sql);
?>

<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- CSS para impressão -->
      <link rel="stylesheet" type="text/css" href="../../lib/css/print.css" media="print" />
      <title>Ilha Solitária</title>
      <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
      <style>
        body{
          background-color:#17a2b8;
        }
        #form-quiz{
          padding:25px 0;
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
        .owl-next-btn,.owl-prev-btn{
          font-weight:bold;
          -webkit-transition: all 0.5s;
          transition: all 0.5s;
        }
        .owl-next-btn:hover, .owl-prev-btn:hover{
          color:#f0ad4e;
        }
      </style>
   </head>
   <body>

      <div id="voltar">
         <a href="../index.php"><i style="position : fixed; top: 20px; left: 20px; margin-left: 1%; padding-top: 1%; padding-bottom: 90% ; color: #F0F8FF; width: 30px; height: 30px;" class="material-icons">arrow_back</i></a>
      </div>

      <div id="form-quiz">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title">Ilha Solitária</h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div id="container" style="width:100%; height:400px;"></div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>DATA</th>
                        <th>TIME</th>
                        <th>DEPRESSÃO</th>
                        <th>ANSIEDADE</th>
                        <th>RESULTADO</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $graphans = array();
                      $graphdep = array();
                      while($row = mysqli_fetch_assoc($result)) {
                          $graphans[] = array((strtotime($row['qui_data']) * 1000),(int)$row['qui_ansiedade']);
                          $graphdep[] = array((strtotime($row['qui_data']) * 1000),(int)$row['qui_depressao']);
                      ?>
                      <tr>
                        <td><?php echo date("d/m/Y G:i:s", strtotime($row['qui_data'])); ?></td>
                        <td><?php echo date("G:i:s", strtotime($row['qui_data'])); ?></td>
                        <td><?php echo $row['qui_depressao']; ?></td>
                        <td><?php echo $row['qui_ansiedade']; ?></td>
                        <?php
                        $resultdep = '';
                        if($row['qui_depressao'] > 7){
                          if($row['qui_depressao'] < 12){
                            $resultdep = "<span class='text-warning'>POSSÍVEL</span>";
                          }else{
                            $resultdep = "<span class='text-danger'>PROVÁVEL</span>";
                          }
                        }else{
                          $resultdep = "<span class='text-success'>IMPROVÁVEL</span>";
                        }
                        $resultans = '';
                        if($row['qui_ansiedade'] > 7){
                          if($row['qui_ansiedade'] < 12){
                            $resultans = "<span class='text-warning'>POSSÍVEL</span>";
                          }else{
                            $resultans = "<span class='text-danger'>PROVÁVEL</span>";
                          }
                        }else{
                          $resultans = "<span class='text-success'>IMPROVÁVEL</span>";
                        }
                        ?>
                        <td><?php echo "Depressão: <strong>$resultdep</strong> e Ansiedade: <strong>$resultans</strong>"?></td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5b1c91fe10b99c7b36d4c843/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script>
        $(function () {
          var graphans = <?php echo json_encode( $graphans ) ?>;
          var graphdep = <?php echo json_encode( $graphdep ) ?>;
          Highcharts.setOptions({
              lang: {
                months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                shortMonths: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                loading: ['Atualizando o gráfico...aguarde'],
                contextButtonTitle: 'Exportar gráfico',
                decimalPoint: ',',
                thousandsSep: '.',
                downloadJPEG: 'Baixar imagem JPEG',
                downloadPDF: 'Baixar arquivo PDF',
                downloadPNG: 'Baixar imagem PNG',
                downloadSVG: 'Baixar vetor SVG',
                printChart: 'Imprimir gráfico',
                rangeSelectorFrom: 'De',
                rangeSelectorTo: 'Para',
                rangeSelectorZoom: 'Zoom',
                resetZoom: 'Limpar Zoom',
                resetZoomTitle: 'Voltar Zoom para nível 1:1',
              }
          });
          var myChart = Highcharts.chart('container', {
            title: {
                text: ''
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                  day: '%e / %b'
                },
                tickInterval: 24 * 3600 * 1000,
                title: {
                    text: 'Data'
                }
            },
            yAxis: {
                title: {
                    text: 'Score'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Ansiedade',
                data: graphans
            }, {
                name: 'Depressão',
                data: graphdep
            }],
          });
        });
      </script>

   </body>
</html>
<?php
}
?>