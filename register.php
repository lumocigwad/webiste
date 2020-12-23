
<?php
session_start();

?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Computer Castles Limited || Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900&amp;display=swap" rel="stylesheet">
    <script src="js/site.js" async></script>
</head>

<body class="register">
    <div class="align-middle">
        <section>
            <div class="row-container narrow">
                <div id="checkout-cards" class="row checkout">
                    <div class="column-container">
                        <div class="column blurb card pricing-details dark-background centered">
                            <div class="et_payment_settings_details">
                                <h2><span class="et_subscription_price">Register with us</span></h2>
                                <ul>
                                    <li id="guarantee_disclaimer">Explore your options with our wide range of products
                                    </li>
                                    <li>
                                        <a href="#">CEMAS</a>, <a href="#">ASMAS</a>, & <a href="#">Others</a>
                                    </li>
                                    <li>Website Development</li>
                                    <li>Product Updates</li>
                                    <li>Premium 24/7 Support</li>
                                    <li>Software Customization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column-container">
                        <div id="checkout-form" class="column blurb card">
                        <?php 
                            if(isset($_SESSION['ERROR'])){
                              echo"  
                                <p >".$_SESSION['ERROR']."</p>";
                            }
                            unset($_SESSION['ERROR']);
                        ?>
                            <h2 class="card-title">Create Your Account</h2>
                            <form action="db.php" id="et_signup_form"
                                class="et_checkout_form clearfix" method="post" autocomplete="off">
                                <div class="et_manage_input_wrap">
                                    <div class="et_manage_input">
                                        <input type="text" placeholder="Username" name="username"
                                            class="validate_field " size="30" maxlength="20" value="" required  />
                                        <label>Username</label>
                                    </div>
                                    <div class="et_manage_input et_checkout_even">
                                        <input type="email" placeholder="Email Address" name="email"
                                            class="validate_field" size="30" value="" required />
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="et_manage_input_wrap">
                                    <div class="et_manage_input">
                                        <input type="password" placeholder="Password" name="password"
                                            class="validate_field" size="30" value="" required />
                                        <label>Password</label>
                                    </div>
                                    <div class="et_manage_input et_checkout_even">
                                        <input type="password" placeholder="Confirm Password" name="input_passwordc"
                                            class="validate_field" size="30" value="" required />
                                        <label>Confirm Password</label>
                                    </div>
                                </div>
                                <div class="et_manage_input_wrap">
                                    <div class="et_manage_input">
                                        <input type="text" placeholder="First Name" name="firstname" size="30"
                                            class="validate_field" value="" required />
                                        <label>First Name</label>
                                    </div>
                                    <div class="et_manage_input et_checkout_even">
                                        <input type="text" placeholder="Last Name" name="secondname" size="30"
                                            class="validate_field" value="" required />
                                        <label>Last Name</label>
                                    </div>
                                </div>
                                <?php include 'countries.php'; ?>
                              
                                <!-- <div class="et_subscription_settings">
                                    <div class="et_checkout_checkbox clearfix">
                                        <div class="et_checkout_checkbox_wrapper">
                                            <input type="checkbox" value="1" id="et_input_toc" name="et_input_toc" />
                                            <label for="et_input_toc"></label>
                                        </div>
                                        <span>You agree to our <a href="https://www.elegantthemes.com/policy/service/"
                                                target="_blank">Terms Of Service</a>.</span>
                                    </div>
                                    <div class="et_checkout_checkbox clearfix">
                                        <div class="et_checkout_checkbox_wrapper">
                                            <input type="checkbox" id="custom_3" name="custom_3" value="Subscribe"
                                                checked />
                                            <label for="custom_3"></label>
                                        </div>
                                        <span>Get updates via email.</span>
                                    </div>
                                </div> -->
                                <input type="hidden" name="custom_10" id="state" value="" />
                                <input type="hidden" name="subscription_id" value="14" />
                                <input type="hidden" name="et_token" value="U9NZTAH5CYNRZKAI8IRNM0RNC"
                                    autocomplete="off" />
                                <input type="submit" name ="register" class="button primary-button fullwidth-button accent-green"
                                    value="Complete Registration">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
    