<?php
include 'includes/connect.php';
$p_id = $_GET["variable2"];

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}

$result = mysqli_query($con, "SELECT * FROM mmpi where patient_id= '$p_id'");
$error=mysqli_error($con);
echo $error;

while($row = mysqli_fetch_array($result)){
  extract($row);
  $identity=$row['p_identity'];
  
}
$result2 = mysqli_query($con, "SELECT * FROM mmpi where p_identity= '$identity'");
$error2=mysqli_error($con);
echo $error2;
$num_rows = mysqli_num_rows($result2);
while($row2 = mysqli_fetch_array($result2)){
  extract($row2);
  $arrpatient_id[]=$row2['patient_id'];
  $arrT_scoreL[]=$row2['T_scoreL'];
  $arrT_scoreF[]=$row2['T_scoreF'];
  $arrT_scoreK[]=$row2['T_scoreK'];
  $arrT_scoreHS[]=$row2['T_scoreHS'];
  $arrT_scoreD[]=$row2['T_scoreD'];
  $arrT_scoreHY[]=$row2['T_scoreHY'];
  $arrT_scorePD[]=$row2['T_scorePD'];
  $arrT_scoreMF[]=$row2['T_scoreMF'];
  $arrT_scorePA[]=$row2['T_scorePA'];
  $arrT_scorePT[]=$row2['T_scorePT'];
  $arrT_scoreSC[]=$row2['T_scoreSC'];
  $arrT_scoreSI[]=$row2['T_scoreMA'];
  $arrT_scoreMA[]=$row2['T_scoreMA'];

}

$count_patient_id=count($arrpatient_id);


$color1=75;
$color2=192;
$color3=192;
for($x=0;$x < $count_patient_id; $x++){
  $color1=$color1+(120*$x);
  $color2=$color2-(150*$x);
  $color3=$color3-(150*$x);

  $arr_color1[]=$color1;
  $arr_color2[]=$color2;
  $arr_color3[]=$color3;
  
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <title>MMPI Evaluation</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">   
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   <style type="text/css">
  
  .column {
  float: left;
  width: 260px;
  width: 50%
  

}
.column2 {
  float: left;
  width: 260px;
  width: 33%
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
                <h5 class="breadcrumbs-title">MMPI EVALUATION</h5>
  </div>
 
  <?php
  
  echo '<div class="chartjs-wrapper">
  <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 10%; width: 10%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="chartjs-0" class="chartjs" width="90" height="25" style="display: block; height: 25px; width: 90px;"></canvas>
  <script>
    new Chart(document.getElementById("chartjs-0"),
    {"type":"line","data":{"labels":["L","F","K","Hs+ .5K","D","Hy","Pd+ .4K","Mf","Pa","Pt+ 1K","Sc+ 1K","Ma+ 2K","Si"],"datasets":[';
  for($x=0;$x < $count_patient_id; $x++){
    $y=$x+1;
    echo '{"label":"Test Score '.$y.'","data":['.$arrT_scoreL[$x].','.$arrT_scoreF[$x].','.$arrT_scoreK[$x].','.$arrT_scoreHS[$x].','.$arrT_scoreD[$x].','.$arrT_scoreHY[$x].','.$arrT_scorePD[$x].','.$arrT_scoreMF[$x].','.$arrT_scorePA[$x].','.$arrT_scorePT[$x].','.$arrT_scoreSC[$x].','.$arrT_scoreMA[$x].','.$arrT_scoreSI[$x].'],"fill":false,"borderColor":"rgb('.$arr_color1[$x].','.$arr_color2[$x].' ,'.$arr_color3[$x].')","lineTension":0.1},';
  }
  echo ']},"options":{}});</script>';
  ?>
  
  <br>

  <br>
  <a href="getcomment.php?variable4=<?php echo $p_id ?> "class="btn waves-effect waves-light blue darken-4" style="margin-left: 20px" target="_blank">Need Comment ?</a><br><br>
  
  <br>
  <div class="col s12 m4 l3">
  <h5 style="margin-left: 5px"><b>Evaluation Analysis</b></h5>
  </div>
  <br>
  <div class=default-comments style="margin-left: 15px">
  <?php 
  for($x=0;$x < $count_patient_id; $x++){
      $y=$x;
      $z="$y";
      $z=array();

    if($arrT_scoreL[$x] >= 69){
      $z[]="This person tried to give the impression that she was an influential person, by giving her/himself socially accepted answers.";
      $z[]="S/he is unreliable, passive, distant, anxious, introverted.";
      $z[]="It is difficult to for him/her relate to other people.";

    
    }
    if($arrT_scoreL[$x] <69 and $arrT_scoreL[$x] > 64){
      $z[]="One denies his/her own weaknesses.";
      $z[]="The individual tried to show her/himself well pathologically";
      $z[]="The person is strict, repressive and defensive..";
      $z[]="A person may be an individual who puts her/himself in excessive control because of her/his religious and moral beliefs and tendencies.";
      
    }

    if($arrT_scoreF[$x] > 80){
      $z[]="The person may not want to establish a relationship.";
      $z[]="There may be trouble understanding due to difficulty seeing or reading or psychotic confusion .";
      $z[]="The person may be showing false evil. If the patient has gains, this is the case. (Conviction etc.)";
      $z[]="The person is doing simulation.";
      
    }
    if($arrT_scoreF[$x] <=80 and  $arrT_scoreF[$x] >=70){
      $z[]="The person may be in psychosis or have a serious neurotic disorder.";
      $z[]="The person has an unusual and unconventional way of thinking.";
      $z[]="The person is antisocial and rebellious.";
      
    }
    if($arrT_scoreK[$x] >= 72){
      $z[]="Person is defender.";
      $z[]="The person does not accept that s/he has psychological problems.";
      $z[]="The person is strict, not flexible.";
      
    }
    if($arrT_scoreK[$x] <72 and  $arrT_scoreK[$x] >=61){
      $z[]="These people tend to minimize and ignore the disorders in themselves and their environment.";
      $z[]="Their defenses have increased, their insights are low.";
      
    }
    if($arrT_scoreHS[$x] >=84){
      $z[]="Complaints of the person spread to the whole organ system.";
      $z[]="The person often has pain, fatigue and weakness.";
      $z[]="Somatic interests turned into somatic delusion.";
      
    }
    if($arrT_scoreHS[$x] <84 and  $arrT_scoreHS[$x] >=75){
      $z[]="It occurs in individuals who deal with physical complaints very much.";
      $z[]="In general, the desire to do business has decreased.";
      $z[]="They are often egocentric and narcissistic.";
      
    }
    if($arrT_scoreD[$x] >= 85){
      $z[]="One is too grieving to be focused on something or think clearly.";
    }

    if($arrT_scoreD[$x] <44 and  $arrT_scoreD[$x] >=28){
      $z[]="They are probably cheerful, curious, optimistic, active and extroverted.";
      $z[]="This situation sometimes causes these individuals to be perceived as indifferent.";  
    }
    if($arrT_scoreHY[$x] >= 85){
      $z[]="Excessive immature are egocentric and dependent.";
      $z[]="It is usually chronic and has severe rigidity.";
    }
    if($arrT_scoreHY[$x] <44 and  $arrT_scoreHY[$x] >=24){
      $z[]="They constantly criticize themselves.";
      $z[]="They tend to deny positive interpersonal relationships.";  
    }
    
    $array_comment[]=$z;
    $array_count[]=count($z);
    
    
  } 

  echo "<br>";
  echo "<br>";
  if($count_patient_id==2 || $count_patient_id ==1){
    echo '<div class=row>';
  foreach($array_comment as $key =>$value){
    
    echo '<div class="column" >';
    foreach($value as $k => $v){
      echo '<p style="color: rgb('.$arr_color1[$key].','.$arr_color2[$key].','.$arr_color3[$key].')" >'.$v.'</p>';
    }
    echo '</div>';
  }
  echo '</div>';
  echo "<br>";
  
  echo "<br>";

  }
  if($count_patient_id==3){
    echo '<div class=row>';
  foreach($array_comment as $key =>$value){
    
    echo '<div class="column2" >';
    foreach($value as $k => $v){
      echo '<p style="color: rgb('.$arr_color1[$key].','.$arr_color2[$key].','.$arr_color3[$key].')" >'.$v.'</p>';
    }
    echo '</div>';
  }
  echo '</div>';
  echo "<br>";
  
  echo "<br>";

  }
  

  
?>
  </div>
     
</div>

<br><br><br><br>
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