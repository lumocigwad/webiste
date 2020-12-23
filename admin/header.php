
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin panel </title>
    <!-- GLOBAL MAINLY STYLES-->
    <link rel="shortcut icon" type="image/ico" href="../favicon.ico" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- PLUGINS STYLES-->
    <link href="css/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- THEME STYLES-->
    <link href="css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">Admin 
                        <span class="brand-tip"> Panel</span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="fas fa-bars"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="fas fa-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                   
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <!-- <img src="./img/admin-avatar.png" /> -->
                            <?php
                     if(isset($_SESSION['admin'])){
                        echo' <span>'.$_SESSION['admin1'].'</span>';
}
                        ?>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <!-- <div>
                        <img src="./img/admin-avatar.png" width="45px" />
                    </div> -->
                    <div class="admin-info">
                        <div class="font-strong">
                        <?php
                     if(isset($_SESSION['admin'])){
                        echo' <span>'.$_SESSION['admin1'].'</span>';
}
                        ?>
                        </div>
                        <small>Administrator</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="post_blog.php"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Post Blog</span></a>
                        
                    </li>
                    <li>
                        <a href="job_posting.php"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Careers</span></a>
                    </li>
                    <li>
                        <a href="manage_blog.php"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Manage Blog</span><i class="fa fa-angle-left arrow"></i></a>
                    </li>
                    <li>
                        <a href="index.php"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                            <span class="nav-label">Our Team</span></a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                            <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="maps_vector.html">Vector maps</a>
                            </li>
                        </ul>
                    </li> -->
                   
                    <li class="heading">PAGES</li>
                   
                   
                  
              
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->