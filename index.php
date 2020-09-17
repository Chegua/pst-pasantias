<?php

require_once "Autoload.php";

define('URL', 'http://localhost:8080/pst-2020-2021');
 //new Controllers\userController();

 Autoload::run();
//  use Controllers\usuariosController;
 
 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PST</title>
    <!-- Bootstrap -->
    <link href="<?=URL?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>/assets/css/waves.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>/assets/css/nanoscroller.css">
    <link href="<?=URL?>/assets/css/menu-light.css" type="text/css" rel="stylesheet">
    <link href="<?=URL?>/assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="<?=URL?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
	<!-- Navbar -->
  <?php include_once "Views/layouts/navbar.php"?>     
 
  <section class="page">  
    <!-- Sidebar -->  
    <?php include_once "Views/layouts/sidebar.php"?> 
      <!-- Content -->
      <div id="wrapper">
          <div class="content-wrapper container">
            <?php 
            // Front Controller
            

              if (isset($_REQUEST['controller'])) {
                $controller= 'Controllers\\'.$_REQUEST['controller'].'Controller';
                if (isset($_REQUEST['action'])) {
                  $action= $_REQUEST['action'];
                }
              }else{
                $controller= 'Controllers\usuariosController';
                $action='index';
              }

              if (isset($controller) && class_exists($controller)) {				
                if (isset($action) && method_exists($controller, $action))
                  $controller::$action();
                else
                  Controllers\errorsController::status(404);                
              }else
                Controllers\errorsController::status(404);

              
            
            ?>
          </div> 
      </div>
  </section>

  <script type="text/javascript" src="<?=URL?>/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?=URL?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=URL?>/assets/js/metisMenu.min.js"></script>
  <script src="<?=URL?>/assets/js/jquery.nanoscroller.min.js"></script>
  <script src="<?=URL?>/assets/js/jquery-jvectormap-1.2.2.min.js"></script>
  <!-- Flot -->
  <script src="<?=URL?>/assets/js/flot/jquery.flot.js"></script>
  <script src="<?=URL?>/assets/js/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?=URL?>/assets/js/flot/jquery.flot.resize.js"></script>
  <script src="<?=URL?>/assets/js/flot/jquery.flot.pie.js"></script>
  <script src="<?=URL?>/assets/js/chartjs/Chart.min.js"></script>
  <script src="<?=URL?>/assets/js/pace.min.js"></script>
  <script src="<?=URL?>/assets/js/waves.min.js"></script>
  <script src="<?=URL?>/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
  <script src="<?=URL?>/assets/js/morris_chart/morris.js"></script>

  <script src="<?=URL?>/assets/js/jquery-jvectormap-world-mill-en.js"></script>
  <!--        <script src="<?=URL?>/assets/js/jquery.nanoscroller.min.js"></script>-->
  <script type="text/javascript" src="<?=URL?>/assets/js/custom.js"></script>
  <!-- ChartJS-->
  <script src="<?=URL?>/assets/js/chartjs/Chart.min.js"></script>

  <script>
      $(document).ready(function () {

          var lineData = {
              labels: ["January", "February", "March", "April", "May"],
              datasets: [
                  {
                      label: "Example dataset",
                      fillColor: "rgba(0,0,0,0.1)",
                      strokeColor: "rgba(1,168,254,0.6)",
                      labelsColor: "rgba(1,168,254,1)",
                      pointColor: "rgba(1,168,254,0.7)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(1,168,254,1)"
                      
                      
                  },
                  {
                      label: "Example dataset",
                      fillColor: "rgba(1,168,254,0.6)",
                      strokeColor: "rgba(1,168,254,0.7)",
                      pointColor: "rgba(1,168,254,1)",
                      pointStrokeColor: "rgba(1,168,254,0.7)",
                      pointHighlightFill: "rgba(1,168,254,0.7)",
                      pointHighlightStroke: "rgba(1,168,254,1)",
                      data: [28, 48, 40, 19, 86],
                        gridTextColor: '#fff',
                  
                  }
              ]
          };
          
          var lineOptions = {
              scaleShowGridLines: true,
              scaleGridLineColor: "rgba(0,0,0,.05)",
              scaleGridLineWidth: 1,
              bezierCurve: true,
              bezierCurveTension: 0.4,
              pointDot: true,
              pointDotRadius: 4,
              pointDotStrokeWidth: 1,
              pointHitDetectionRadius: 20,
              datasetStroke: true,
              datasetStrokeWidth: 2,
              datasetFill: true,
              responsive: true,
              scaleFontColor:'#949ba2'
              

          };


          var ctx = document.getElementById("lineChart").getContext("2d");
          var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

      });
  </script>


  <script type="text/javascript">
      $(function () {

          var barData = {
              labels: ["January", "February", "March", "April", "May", "June", "July"],
              datasets: [
                  {
                      label: "My First dataset",
                      fillColor: "rgba(1,168,254,0.4)",
                      strokeColor: "rgba(1,168,254,0.6)",
                      highlightFill: "rgba(1,168,254,0.75)",
                      highlightStroke: "rgba(1,168,254,1)",
                      data: [65, 59, 80, 81, 56, 55, 40]
                  },
                  {
                      label: "My Second dataset",
                      fillColor: "rgba(1,168,254,0.5)",
                      strokeColor: "rgba(1,168,254,0.8)",
                      highlightFill: "rgba(1,168,254,0.75)",
                      highlightStroke: "rgba(1,168,254,1)",
                      data: [28, 48, 40, 19, 86, 27, 90]
                  }
              ]
          };

          var barOptions = {
              scaleBeginAtZero: true,
              scaleShowGridLines: true,
              scaleGridLineColor: "rgba(1,168,254,0.1)",
              scaleGridLineWidth: 1,
              barShowStroke: true,
              barStrokeWidth: 2,
              barValueSpacing: 5,
              barDatasetSpacing: 1,
              responsive: true,
              scaleFontColor:'#949ba2'
          };


          var ctx = document.getElementById("barChart").getContext("2d");
          var myNewChart = new Chart(ctx).Bar(barData, barOptions);

      });
  </script>

</body>
</html>

