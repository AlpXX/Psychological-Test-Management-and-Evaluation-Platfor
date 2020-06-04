<?php
include '../includes/connect.php';

$p_id=$_SESSION["p_id"];
if(!isset($_SESSION["loggedin_patient"]) && $_SESSION["loggedin_patient"] !== true){
	header("location: index.php");
	exit;
  }


$answer1 = $_POST['cevap1-1'];
$answer2 = $_POST['cevap2-1'];
$answer3 = $_POST['cevap3-1'];
$answer4 = $_POST['cevap4-1'];
$answer5 = $_POST['cevap5-1'];
$answer6 = $_POST['cevap6-1'];
$answer7 = $_POST['cevap7-1'];
$answer8 = $_POST['cevap8-1'];
$answer9 = $_POST['cevap9-1'];
$answer10 = $_POST['cevap10-1'];
$score_overall=0;
$score1=0;
$score2=0;
$score3=0;
$score4=0;
$score5=0;
$score6=0;
$score7=0;
$score8=0;
$score9=0;
$score10=0;



if(isset($_POST["complete_test"])){
    echo "girdi";
    $include1=preg_match("/brick/i",$answer1);
    $include1_2=preg_match("/concrete/i",$answer1);
    $include1_3=preg_match("/stone/i",$answer1);
    $include1_4=preg_match("/wood/i",$answer1);
    $include1_5=preg_match("/gib/i",$answer1);
    if($include1){
        $score1 +=1;
    }    
    if($include1_2){
        $score1 +=1;
    }
    if($include1_3){
        $score1 +=1;
    }
    if($include1_4){
        $score1 +=1;
    }
    if($include1_5){
        $score1 +=1;
    }
    if($score1 >= 4){
        $score1=4;
    }
    echo $score1;

    $include2=preg_match("/construction/i", $answer2);
    $include2_1=preg_match("/glass/i", $answer2);
    $include2_2=preg_match("/park/i", $answer2);
    $include2_3=preg_match("/game/i", $answer2);

    if($include2){
        $score2 +=2;
    }
    if($include2_1){
        $score2 +=4;
    }
    if($include2_2){
        $score2 +=1;
    }
    if($include2_3){
        $score2 +=1;
    }
    if($score2 >=4){
        $score2=4;
    }
    echo $score2;

    $include3=preg_match("/north/i", $answer3);

    if($include3){
        $score3 +=3;
    }
    echo $score3;

    $include4=preg_match("/parrot/i", $answer4);
    $include4_1=preg_match("/pigeon/i", $answer4);
    $include4_2=preg_match("/owl/i", $answer4);
    $include4_3=preg_match("/penguin/i", $answer4);
    $include4_4=preg_match("/martin/i", $answer4);
    $include4_5=preg_match("/sparrow/i", $answer4);
    $include4_6=preg_match("/cuckoo/i", $answer4);
    $include4_7=preg_match("/woodpecker/i", $answer4);

    if($include4){
        $score4 +=1;
    }    
    if($include4_2){
        $score4 +=1;
    }
    if($include4_3){
        $score4 +=1;
    }
    if($include4_4){
        $score4 +=1;
    }
    if($include4_5){
        $score4 +=1;
    }
    if($include4_6){
        $score4 +=1;
    }
    if($include4_7){
        $score4 +=1;
    }
    if($score4 >= 4){
        $score4=4;
    }
    echo $score4;

    $include5=preg_match("/noon/i", $answer5);

    if($include5){
        $score5 +=3;
    }
    echo $score5;

    $include6=preg_match("/adana/i", $answer6);
    $include6_1=preg_match("/ankara/i", $answer6);
    $include6_2=preg_match("/antalya/i", $answer6);
    $include6_3=preg_match("/aydın/i", $answer6);
    $include6_4=preg_match("/bursa/i", $answer6);
    $include6_5=preg_match("/balıkesir/i", $answer6);
    $include6_6=preg_match("/denizli/i", $answer6);
    $include6_7=preg_match("/diyarbakır/i", $answer6);
    $include6_8=preg_match("/erzurum/i", $answer6);
    $include6_9=preg_match("/eskişehir/i", $answer6);
    $include6_10=preg_match("/gaziantep/i", $answer6);
    $include6_11=preg_match("/hatay/i", $answer6);
    $include6_12=preg_match("/kayseri/i", $answer6);
    $include6_13=preg_match("/kocaeli/i", $answer6);
    $include6_14=preg_match("/malatya/i", $answer6);
    $include6_15=preg_match("/mardin/i", $answer6);
    $include6_16=preg_match("/istanbul/i", $answer6);
    $include6_17=preg_match("/izmir/i", $answer6);

    if($include6){
        $score6 +=1;
    }
    if($include6_1){
        $score6 +=1;
    }      
    if($include6_2){
        $score6 +=1;
    }
    if($include6_3){
        $score6 +=1;
    }
    if($include6_4){
        $score6 +=1;
    }
    if($include6_5){
        $score6 +=1;
    }
    if($include6_6){
        $score6 +=1;
    }
    if($include6_7){
        $score6 +=1;
    }

    if($include6_8){
        $score6 +=1;
    }
    if($include6_9){
        $score6 +=1;
    }      
    if($include6_10){
        $score6 +=1;
    }
    if($include6_11){
        $score6 +=1;
    }
    if($include6_12){
        $score6 +=1;
    }
    if($include6_13){
        $score6 +=1;
    }
    if($include6_14){
        $score6 +=1;
    }
    if($include6_15){
        $score6 +=1;
    }
    if($include6_16){
        $score6 +=1;
    }    
    if($include6_17){
        $score6 +=1;
    }        
    if($score6 >= 4){
        $score6=4;
    }
    echo $score6;

    $include7=preg_match("/moon.*close/i", $answer7);
    $include7_1=preg_match("/star .* distant/i", $answer7);
    $include7_2=preg_match("/moon.*near/i", $answer7);
    $include7_3=preg_match("/star .* far/i", $answer7);

    if($include7){
        $score7 +=4;
    }
    if($include7_1){
        $score7 +=4;
    }
    if($include7_2){
        $score7 +=4;
    }
    if($include7_3){
        $score7 +=4;
    }
    if($score7>= 4){
        $score7=4;
    }
    echo $score7;

    $include8=preg_match("/iron/i", $answer8);
    $include8_1=preg_match("/steel/i", $answer8);

    if($include8){
        $score8 +=4;
    }
    if($include8_1){
        $score8 +=2;
    }
    if($score8>= 4){
        $score8=4;
    }
    echo $score8;

    $include9=preg_match("/southwest/i", $answer9);

    if($include9){
        $score9 +=4;
    }
    echo $score9;

    if($answer10==5){
        $score10 +=2;
    }
    echo $score10;

    $score_overall=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
    echo $score_overall;

    $mental_age=0;
    $iq=0;
    if($score_overall >= 4 & $score_overall <= 6){
        $mental_age=6;
    }
    if($score_overall >= 7 & $score_overall <= 9){
        $mental_age=7;
    }
    if($score_overall >= 10 & $score_overall <= 13){
        $mental_age=8;
    }
    if($score_overall >= 14 & $score_overall <= 16){
        $mental_age=9;
    }
    if($score_overall >= 17 & $score_overall <= 18){
        $mental_age=10;
    }
    if($score_overall >= 19 & $score_overall <= 20){
        $mental_age=11;
    }
    if($score_overall >= 21 & $score_overall <= 23){
        $mental_age=12;
    }
    if($score_overall >= 24 & $score_overall <= 27){
        $mental_age=13;
    }
    if($score_overall >= 28 & $score_overall <= 31){
        $mental_age=14;
    }
    if($score_overall >= 32 & $score_overall <= 36){
        $mental_age=15;
    }

    if($mental_age==6){
        $iq=43;

    }
    if($mental_age==7){
        $iq=50;

    }
    if($mental_age==8){
        $iq=57;

    }
    if($mental_age==9){
        $iq=64;

    }
    if($mental_age==10){
        $iq=71;

    }
    if($mental_age==11){
        $iq=79;

    }
    if($mental_age==12){
        $iq=86;

    }
    if($mental_age==13){
        $iq=93;

    }
    if($mental_age==14){
        $iq=10;

    }
    if($mental_age==15){
        $iq=107;

    }
    echo "mental age is : $mental_age";
    echo "iq is :$iq";

    $sql = "INSERT INTO kent (patient_id,score_overall, mental_age, iq,k_q1,k_q2,k_q3,k_q4,k_q5,k_q6,k_q7,k_q8,k_q9,k_q10) VALUES ('$p_id','$score_overall', '$mental_age', '$iq','$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10');";
    $result=mysqli_query($con, $sql);
    $error=mysqli_error($con);
    echo $error;
    header("location: ../patient-page.php");

    
}

?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body>
<div class="chartjs-wrapper">
<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 10%; width: 10%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
<canvas id="chartjs-2" class="chartjs" width="120" height="25" style="display: block; height: 22px; width: 120px;"></canvas>
<script>new Chart(document.getElementById("chartjs-2"),
{"type":"horizontalBar","data":{"labels":["IQ"],"datasets":[{"label":"IQ Score","data":[<?php echo $iq ?>],"fill":false,"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"xAxes":[{"ticks":{"beginAtZero":true}}]}}});
</script>
</div>






</body>
</html> 







