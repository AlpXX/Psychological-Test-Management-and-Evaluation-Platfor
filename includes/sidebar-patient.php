<?php

$p_id=$_SESSION["p_id"];
$result2 = mysqli_query($con, "SELECT patient_id FROM mmpi where patient_id= '$p_id'");

$mmpi_patient_id=-1;
while($row2= mysqli_fetch_array($result2)){
  extract($row2);
  $mmpi_patient_id=$patient_id;
}

$kent_patient_id=-1;
$result3 = mysqli_query($con, "SELECT patient_id FROM kent where patient_id= '$p_id'");
while($row3= mysqli_fetch_array($result3)){
  extract($row3);
  $kent_patient_id=$patient_id;

}

?>
<aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
         <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="logout-patient.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION["p_name"]." ".$_SESSION["p_surname"];?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    
                </div>
            </div>
            </li>
            <li class="bold active"><a href="patient-page.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Main page</a>
            </li>
                <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> All Tests</a>
                  <div class="collapsible-body" >
              <ul>
              <?php
                          $sql = mysqli_query($con, "SELECT t_name FROM tests;");
                            while($row = mysqli_fetch_array($sql)){
                                extract($row);
                                if($row["t_name"]=="MMPI" and $mmpi_patient_id==$p_id){
                                    echo '<li><a>'.$t_name.'</a>
                                    </li>';
                                }
                                if($row["t_name"]=="KENT-EGY" and $kent_patient_id==$p_id){
                                    echo '<li><a>'.$t_name.'</a>
                                    </li>';
                                }
                                if($row["t_name"]=="KENT-EGY" and $kent_patient_id!=$p_id){
                                    echo '<li><a href="./tests/'.$t_name.'.php">'.$t_name.'</a>
                                    </li>';
                                }
                                if($row["t_name"]=="MMPI" and $mmpi_patient_id!=$p_id){
                                    echo '<li><a href="./tests/'.$t_name.'.php">'.$t_name.'</a>
                                    </li>';
                                }
                        }
                        ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>                   
            <li class="bold"><a href="patient-details.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Edit Details</a>
            </li>       
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>