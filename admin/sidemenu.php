
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/img/dp.jpg" class="img-circle user-img-circle"
                                alt="User Image" />
                        </div>
                        <div class="pull-left info">
                        <?php
                      include 'conn.php';
                        $em=$_SESSION['alogin'];
                        $name = "select name from admin where uname='$em' limit 1";
                        $sqssl=mysqli_query($con,$name);
                       foreach ($sqssl as $rowss) {
                          $sqls=$rowss['name'];
                       }
                      ?>
    

                            <p> <?php echo $sqls ?></p>

   
                           
                           
                            <a title="Profile" href="user_profile.php"><i class="material-icons">person</i></a>
                            <a title="Inbox" href="support.php"><i class="material-icons">email</i></a>
                            
                            <a title="Logout" href="logout.php"><i
                                    class="material-icons">power_settings_new</i></a>
                        </div>
                    </div>
                </li>
                <li class="menu-heading">
                    <span>-- Main</span>
                </li>
                <li class="nav-item active">
                    <a href="index.php" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                    
                </li>
              
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">local_taxi</i>
                        <span class="title">Trip</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="active_trips.php" class="nav-link ">
                                <span class="title">Active Trips</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="completed_trips.php" class="nav-link ">
                                <span class="title">Completed Trips</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="canceled_trips.php" class="nav-link ">
                                <span class="title">Cancelled Trips</span>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">person</i>
                        <span class="title">Drivers</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="add_driver.php" class="nav-link ">
                                <span class="title">Add New Driver</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_drivers.php" class="nav-link ">
                                <span class="title">All Drivers</span>
                            </a>
                        </li>
                      
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">people</i>
                        <span class="title">Passengers</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="add_passenger.php" class="nav-link ">
                                <span class="title">Add New Passenger</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_passenger.php" class="nav-link ">
                                <span class="title">All Passengers</span>
                            </a>
                        </li>
                       
                    </ul>
                </li>
               
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">airport_shuttle</i>
                        <span class="title">Vehicle</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="add_vehicle.php" class="nav-link ">
                                <span class="title">Add Vehicle Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_vehicles.php" class="nav-link ">
                                <span class="title">View All Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add_vtype.php" class="nav-link ">
                                <span class="title">Add Type</span>
                            </a>
                        </li>
                    </ul>
                </li>
               
                
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">airplay</i>
                        <span class="title">Page Management</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="cont_us.php" class="nav-link ">
                                <span class="title">Contact us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="fair_list.php" class="nav-link ">
                                <span class="title">About us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="viewgallery.php" class="nav-link ">
                                <span class="title">Gallery</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="menu-heading m-t-20">
                    
                        
                    
                </li>
            </ul>
        </div>
    </div>
</div>