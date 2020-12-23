<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Computer Castles Limited || Your Number One ERP Sacco Sytems Software Solutions Provider</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900&amp;display=swap" rel="stylesheet">
    <script src="js/site.js" async></script>
</head>

<body>
    <div id="main-nav" class=" solid-header">
        <div class="menu-bg-wrapper">
            <div class="menu-bg"></div>
            <div class="menu-arrow"></div>
        </div>
        <div class="row-container">
            <?php
                include "navbar.php";
            ?>
            <span class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
    </div>
    <?php    
            include "connect.php";

            $id = (INT) $_GET['pid'];
            $sql = "Select * FROM positions WHERE id = '$id'";

            $result = mysqli_query($conn, $sql);

            $invalid = mysqli_num_rows($result);

            if($invalid == 0) {
                header("location: careers.php");
                        } 
                               
            $hsql = "Select * FROM positions WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
                                
            $id = $row['id'];
            $title = $row['job_title'];
            $description = $row['job_description'];
            $responsibilities = $row['responsibilities'];
            $qualifications = $row['qualifications']; 
            echo "<section>
                    <div class='row-container'>
                        <div class='row'>
                            <div class='column-container'>
                                <div class='column centered accent-blue'>
                                    <h1>$title</h1>
                                        <p class='lead'><span>$description</span></p>
                                </div>
                                <div class='column centered accent-blue'>
                                        <p class='lead'><span>$responsibilities</span></p>
                                </div>
                                <div class='column centered accent-blue'>
                                        <p class='lead'><span>$qualifications</span></p>
                                </div>
                                <div class='column centered accent-blue'>
                                        <p class='lead'><span>send us an email at hr@computercastlesltd.co.ke</span></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>"
                        ?>
    <span class="et-highlighted-overlay"></span>
    <section id="main-footer">
            <div class="row-container narrow">
                <!-- <div id="social-accounts" class="row small-gutters three-column-tablet two-column-phone">
                    <div class="column-container">
                        <a id="facebook" rel="noreferrer" href="#"
                            class="column card card-small elevation-1 centered accent-blue" target="_blank">
                            <svg viewbox="0 0 28 28" class="icon-small">
                                <path d="M17.35,14H15l0,9l-3,0v-9l-2,0v-3h2V9.07C12,5,15.69,5,15.69,5L18,5l0,3l-1.93,0C15.45,8,15,8.42,15,9.2l0,1.8
                            l2.67,0L17.35,14z" />
                            </svg>
                            <span>130k</span>Followers
                        </a>
                    </div>
                    <div class="column-container">
                        <a id="facebook-group" rel="noreferrer" href="#"
                            class="column card card-small elevation-1 centered accent-light-blue" target="_blank">
                            <svg viewbox="0 0 28 28" class="icon-small">
                                <path class="transparent"
                                    d="M10,18.21c0,2.38-6,2.38-6,0C4,14.74,5.42,13,7,13C8.58,13,10,14.74,10,18.21z M7,8c-1.1,0-2,0.9-2,2s0.9,2,2,2 s2-0.9,2-2S8.1,8,7,8z" />
                                <path class="transparent"
                                    d="M24,18.21c0,2.38-6,2.38-6,0c0-3.48,1.42-5.21,3-5.21C22.58,13,24,14.74,24,18.21z M21,8c-1.1,0-2,0.9-2,2 s0.9,2,2,2s2-0.9,2-2S22.1,8,21,8z" />
                                <path
                                    d="M19,20c0,4-10,4-10,0c0-4.74,2.26-7,5-7S19,15.26,19,20z M17,9c0,1.66-1.34,3-3,3s-3-1.34-3-3s1.34-3,3-3 S17,7.34,17,9z" />
                            </svg>
                            <span>35k</span> Members
                        </a>
                    </div>
                    <div class="column-container">
                        <a id="twitter" rel="noreferrer" href="#"
                            class="column card card-small elevation-1 centered accent-teal" target="_blank">
                            <svg viewbox="0 0 28 28" class="icon-small">
                                <path
                                    d="M22.34,9.04c-0.61,0.26-1.27,0.44-1.96,0.52c0.71-0.41,1.25-1.05,1.5-1.82c-0.66,0.38-1.39,0.65-2.17,0.8 c-0.62-0.64-1.51-1.04-2.5-1.04c-1.89,0-3.42,1.47-3.42,3.28c0,0.26,0.03,0.51,0.09,0.75c-2.84-0.14-5.36-1.45-7.05-3.43 C6.53,8.58,6.37,9.15,6.37,9.75c0,1.14,0.6,2.14,1.52,2.73c-0.56-0.02-1.09-0.17-1.55-0.41c0,0.01,0,0.03,0,0.04 c0,1.59,1.18,2.92,2.74,3.22c-0.29,0.07-0.59,0.11-0.9,0.11c-0.22,0-0.43-0.02-0.64-0.06c0.44,1.3,1.7,2.25,3.19,2.28 c-1.17,0.88-2.65,1.4-4.25,1.4c-0.28,0-0.55-0.02-0.82-0.05c1.51,0.93,3.31,1.48,5.24,1.48c6.29,0,9.73-5,9.73-9.34 c0-0.14,0-0.28-0.01-0.43C21.3,10.28,21.88,9.7,22.34,9.04z" />
                            </svg>
                            <span>47k</span> Followers
                        </a>
                    </div>
                    <div class="column-container">
                        <a id="email" href="#" class="column card card-small elevation-1 centered accent-gray">
                            <svg viewbox="0 0 28 28" class="icon-small">
                                <path
                                    d="M14,15.51l8-3.2L22,19c0,0.55-0.45,1-1,1L7,20c-0.55,0-1-0.45-1-1l0-6.69L14,15.51z M22,10.68l-8,3.2l-8-3.2 L6,9c0-0.55,0.45-1,1-1l14,0c0.55,0,1,0.45,1,1L22,10.68z" />
                            </svg>
                            <span>291k</span> Subscribers
                        </a>
                    </div>
                </div> -->
                <div id="footer-menu" class="row three-column-tablet two-column-phone">
                <div class="column-container">
                    <div class="column">
                        <a href="index.php">
                            <h3>Computer Castles Limited</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="contact.php">Book a Demo</a>
                            </li>
                            <li>
                                <a href="#">Partners & Clients</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column-container">
                    <div class="column">
                        <a href="portfolio.php">
                            <h3>Products</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="portfolio.php">CEMAS</a>
                            </li>
                            <li>
                                <a href="portfolio.php">ASMAS</a>
                            </li>
                            <li>
                                <a href="portfolio.php">ATM Bridge</a>
                            </li>
                            <li>
                                <a href="portfolio.php">PSV Collection System</a>
                            </li>
                            <li>
                                <a href="portfolio.php">Others</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column-container">
                    <div class="column">
                        <a href="#">
                            <h3>Blog</h3>
                        </a>
                        <ul class="link-list">
                            <li>
                                <a href="blog.php">Recent Posts</a>
                            </li>
                            <li>
                                <a href="blog.php">Product Updates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="column-container">
                        <div class="column centered">
                            <p>Copyright &copy; 2019 Computer Castles Limited &reg;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <script type="text/javascript" src="js/cookie-consent.js"></script>
        <script type="text/javascript" src="js/intersectional-observer.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <!-- <script type="text/javascript" src="js/magnificpopup.js"></script> -->
        <script type="text/javascript" src="js/relax.js"></script>
        <script type="text/javascript" src="js/allpages.js"></script>
        <!-- <script type="text/javascript" src="js/optin.js"></script> -->
        <script type="text/javascript" src="js/content-common.js"></script>
</body>

</html>