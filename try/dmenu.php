<header class="tj-header">
    <!--Header Content Start-->
    <div class="container">
        <div class="row">
            <!--Toprow Content Start-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!--Logo Start-->
                <div class="tj-logo">
                    <h1><a href="index.php">Fake Taxi</a></h1>
                </div>
                <!--Logo End-->
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="info_box">
                    <i class="fa fa-home"></i>
                    <div class="info_text">
                        <span class="info_title">Address</span>
                        <span>Rofel, Vapi</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="info_box">
                    <i class="fa fa-envelope"></i>
                    <div class="info_text">
                        <span class="info_title">Email Us</span>
                        <span><a href="mailto:primecab@booking.com">primecab@booking.com</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="phone_info">
                    <div class="phone_icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="phone_text">
                        <span><a href="tel:1-234-000-2345">+1-234-000-2345</a></span>
                    </div>
                </div>
            </div>
            <!--Toprow Content End-->
        </div>
    </div>
    
    <div class="tj-nav-row">
        <div class="container">
            <div class="row">
                <!--Nav Holder Start-->
                <div class="tj-nav-holder">
                    <!--Menu Holder Start-->
                    <nav class="navbar navbar-default"> 
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false"> 
                              <span class="sr-only">Menu</span>
                              <span class="icon-bar"></span> 
                              <span class="icon-bar"></span> 
                              <span class="icon-bar"></span>
                          </button>
                        </div>
                        <!-- Navigation Content Start -->
                        <div class="collapse navbar-collapse" id="tj-navbar-collapse">
                          <ul class="nav navbar-nav">
                            
                                    
                                    <li><a href="index.php">Home</a></li>
                                   
                               
                            
                            <li>
                                <a href="aboutus.php">Aboutus</a>
                            </li>
                           
                                
                                    <li><a href="services.php">Our Services</a></li>
                                
              
                            <li > 
                                <a href="fleet-grid.php">Cars</a>
                               
                            </li>
                            
                            <li > 
                                <a href="gallery.php">Gallery</a>
                               
                            </li>
                            
                            <li>
                                <a href="contact.php">Contactus</a>
                            </li>
                           
                          </ul>
                        </div>
                        <!-- Navigation Content Start -->
                    </nav>
                    <!--Menu Holder End-->
                    

                    <div class="book_btn">
                    <?php  if(isset($_SESSION['dlogin'])){ ?><a href="driver-account.php">Account <i class="fa fa-user" aria-hidden="true"></i></a><?php }else{ ?> <a href="login.php">Login <i class="fa fa-user" aria-hidden="true"></i></a> <?php } ?>
                       
                    </div>

                </div><!--Nav Holder End-->
            </div>
        </div>
    </div>
</header>