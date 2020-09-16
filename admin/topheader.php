
<?php include 'session.php';?>
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <img alt="" src="assets/img/logo.png">
                <span class="logo-default">CityTaxi</span> </a>
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler font-size-23"><i class="fa fa-bars"></i></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left in">
            <!-- start full screen button -->
            <li><a href="javascript:;" class="fullscreen-click font-size-20"><i
                        class="fa fa-arrows-alt"></i></a></li>
            <!-- end full screen button -->
        </ul>
        <form class="search-form-opened" action="#" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <span class="input-group-btn search-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="fa fa-search"></i>
                    </a>
                </span>
            </div>
        </form>
        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
            data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- start notification dropdown -->
               
                <!-- end notification dropdown -->
                <!-- start message dropdown -->
              
                <!-- end message dropdown -->
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <img alt="" class="img-circle " src="assets/img/dp.jpg" />

                    </a>
                    <ul class="dropdown-menu dropdown-menu-default animated jello">
                       
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
            
            </ul>
        </div>
    </div>
</div>