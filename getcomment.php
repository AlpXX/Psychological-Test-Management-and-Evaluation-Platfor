<?php
include 'includes/connect.php';
$p_id = $_GET["variable4"];
$result = mysqli_query($con, "SELECT * FROM mmpi where patient_id= '$p_id'");
$error=mysqli_error($con);
echo $error;

while($row = mysqli_fetch_array($result)){
  extract($row);
  $identity=$row['p_identity'];
}

$result2 = mysqli_query($con, "SELECT * FROM comments where p_id= '$p_id'");
$error2=mysqli_error($con);
echo $error2;

while($row2 = mysqli_fetch_array($result2)){
  extract($row2);
}
$result3 = mysqli_query($con, "SELECT * FROM patient where p_id= '$p_id'");
$error3=mysqli_error($con);
echo $error3;

while($row3 = mysqli_fetch_array($result3)){
  extract($row3);
  

}


$result4 = mysqli_query($con, "SELECT * FROM mmpi where p_identity= '$identity'");
$error4=mysqli_error($con);
echo $error4;
$num_rows = mysqli_num_rows($result4);
while($row4 = mysqli_fetch_array($result4)){
  extract($row4);
  $arrpatient_id[]=$row4['patient_id'];
  $arrT_scoreL[]=$row4['T_scoreL'];
  $arrT_scoreF[]=$row4['T_scoreF'];
  $arrT_scoreK[]=$row4['T_scoreK'];
  $arrT_scoreHS[]=$row4['T_scoreHS'];
  $arrT_scoreD[]=$row4['T_scoreD'];
  $arrT_scoreHY[]=$row4['T_scoreHY'];
  $arrT_scorePD[]=$row4['T_scorePD'];
  $arrT_scoreMF[]=$row4['T_scoreMF'];
  $arrT_scorePA[]=$row4['T_scorePA'];
  $arrT_scorePT[]=$row4['T_scorePT'];
  $arrT_scoreSC[]=$row4['T_scoreSC'];
  $arrT_scoreSI[]=$row4['T_scoreMA'];
  $arrT_scoreMA[]=$row4['T_scoreMA'];

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
  <title>Comment Page</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   <style type="text/css">
  .linkCopy{
  background-color: rgb(75,192,192);
  border: none;
  color: black;
  padding: 12px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin-left: 84%;
 
  }
  .info{
    margin-left: 18px;


  }
  
  </style> 
</head>
<script>
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
}
</script>

<body>
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

<div class=info>
<h5 style= "font-size: 19px"><u>Patient Information</u> </h5>
<a style ="color: black">Gender: <?php echo $p_gender ?></a><br>
<a style ="color: black">Age: <?php echo $p_age ?></a>
<button class="linkCopy" onclick="setClipboard('localhost/patient-test/getcomment.php?variable4=<?php echo $p_id ?> ')">Copy the Link</button><br>


</div>



<?php 

  $sql10 = "SELECT comment_repby, comment_mssg, comment_date FROM comments WHERE p_id=$p_id";
    $result20 = mysqli_query($con, $sql10);
    echo "<br>";
    echo "<table class='fixed' border='1' style='border-style:groove'>";
    echo "<tr ><th style='text-align:center'>Name</th><th style='text-align:center'>Comment</th><th style='text-align:center'>Date</th>";
    while ($row = mysqli_fetch_assoc($result20)) {
        echo "<tr>";
        foreach ($row as $field => $value) {          
            echo "<td style='padding-left:16px; padding-right:16px'>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>

<br><br><br><br>

<div class="comments">
         <h5>Write comment</h5>
         <form action="routers/getcomment-router.php" method="post" style="border-style: groove; margin-right: 50%">
         <table cellpadding="1" cellspacing="1">
         <tr>
         <input type="hidden" name="p_id" value="<?php echo $p_id ?>"/></td>
         <td><center><b>Name</b></td>
         <td><input type="text" name="comment_repby" style="width: 320px;" /></td>
         </tr>
         <tr>
         <td><center><b>Comment for this evaluation</b></center></td>
         <td><textarea  name="comment_mssg"  style="width: 85%"></textarea></td>
         </tr>
        <tr>
         <td><input type="hidden" name="comment_date" value="<?php date_default_timezone_set('America/Los_Angeles'); echo date('Y-m-d H:i:s');?>"/></td>
         </tr>
          <tr>
         <td></td>
         <td><button type="submit" name="sendcomment"><b>Send Comment<b></button></td>
         </tr>
         </table>
         </form>
         </div>

</body>
</html>
<script>

