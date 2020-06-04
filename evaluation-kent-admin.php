<?php
include 'includes/connect.php';
$p_id = $_GET["variable2"];

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}
$result = mysqli_query($con, "SELECT * FROM kent where patient_id= '$p_id'");
$error=mysqli_error($con);
echo $error;

while($row = mysqli_fetch_array($result)){
  extract($row);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <title>Kent EGY Evaluation</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   <style type="text/css">
  
  }
  </style> 
</head>

<body>

  <?php
    include 'includes/header.php';
  ?>

  <?php
    include 'includes/sidebar.php';
  ?>
  <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Kent-Egy Evaluation</h4>
              </div>
          <div class="chartjs-wrapper">
        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 10%; width: 10%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="chartjs-2" class="chartjs" width="120" height="25" style="display: block; height: 22px; width: 120px;"></canvas>
        <script>new Chart(document.getElementById("chartjs-2"),
        {"type":"horizontalBar","data":{"labels":["IQ"],"datasets":[{"label":"IQ Score","data":[<?php echo $iq ?>],"fill":false,"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"xAxes":[{"ticks":{"beginAtZero":true}}]}}});
        </script>
        </div>
        <div class="col s12 m4 l3">
        <h6 >OVERALL SCORE</h6>
        <h6>IQ: <?php echo $iq?></h6>
        <h6>Mental Age: <?php echo $mental_age?></h6>
        <h6>Overall: <?php echo $score_overall?></h6>
        </div>
<?php
    include 'includes/footer.php';
?>

    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    
</body>

</html>