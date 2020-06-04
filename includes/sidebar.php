<div id="main">

    <div class="wrapper">

      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION["d_name"]?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                  
                </div>
            </div>
            </li>
            
            <li class="bold active"><a href="calendar.php" target = "_blank" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Calendar</a>
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
                                echo '<li><a href="./tests-admin/'.$t_name.'.php">'.$t_name.'</a>
                                    </li>';
                        }
                        ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                			
            <li class="bold"><a href="patients.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Patients</a>
            </li>				
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>

