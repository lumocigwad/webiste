<?php
include("../connect.php");

// if(!isset($_SESSION['username'])) {
// 	header("location: login.php");
// 	exit();
// 	} 
// $id = (INT) $_GET['id'];


if(isset($_POST['submit'])) {
// $id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);
$slug = mysqli_real_escape_string($conn, $_POST['slug']);
$content = mysqli_real_escape_string($conn, $_POST ['content']); 
$date = date('Y-m-d H:i');
// $posted_by = mysqli_real_escape_string($conn, $_SESSION['username']);

$sql = "INSERT INTO posts (title, slug, content, created_at ) VALUES( '$title', '$slug', '$content', '$date')";

if ($title == "" || $content == "")
{
    echo " Please Complete Your Post";
    return;
}
mysqli_query($conn, $sql) ;

  printf("Posted successfully. <meta http-equiv='refresh' content='2'; url=view_post.php?pid=id'/>", mysqli_insert_id($conn));
	
	
	}
else {}
	?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Computer Castles Limited || Your Number One ERP Sacco Sytems Software Solutions Provider</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900&amp;display=swap" rel="stylesheet">
    <script src="../js/site.js" async></script>
</head>

<body>
    <div id="main-nav" class=" solid-header">
        <div class="menu-bg-wrapper">
            <div class="menu-bg"></div>
            <div class="menu-arrow"></div>
        </div>
        <div class="row-container">
            <nav>
                <div class="login-button-wrapper">
                    <a id="login-button" class="button primary-button active accent-pink" href="new_post.php">
                        <span>Create a new post</span>
                    </a>
                </div>
                <div class="login-button-wrapper">
                    <a id="login-button" class="button primary-button accent-pink"
                        href="http://localhost/computercastleswebsite/login.php#">
                        <span>Add a team member</span>
                    </a>
                </div>
                <div class="login-button-wrapper">
                    <a id="login-button" class="button primary-button accent-pink"
                        href="http://localhost/computercastleswebsite/login.php#">
                        <span>Post a job advert</span>
                    </a>
                </div>
            </nav>
            <span class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
    </div>
    <section>
        <div class="row-container">
            <div class="row">
                <div class="column-container">
                    <div class="column centered accent-blue">
                        <h1>Computer Castles Blog</h1>
                        <p class="lead">Stay up to date with our most recent news and updates</p>
                        <!-- <form id="search-form" role="search" method="get" id="header_search"
                                action="https://www.elegantthemes.com/blog/">
                                <div class="et_manage_input">
                                    <input type="text" value="" placeholder="Search Our Blog" name="s">
                                    <label>Enter Search Term</label>
                                </div>
                                <input type="image" name="submit" class="search-icon"
                                    src="https://www.elegantthemes.com/images/icons/search.svg">
                            </form> -->
                    </div>
                </div>
            </div>
        </div>
        <section>
            <form class="w3-container" action="new_post.php" method="POST">
                <div class="et_manage_input">
                    <input required placeholder="Blog Title" id="title" name="title" type="text" value="" size="30"
                        aria-required='true' />
                    <label>Title of Blog</label>
                </div>
                <div class="et_manage_input">
                    <input required placeholder="slug" id="slug" name="slug" type="text" value="" size="30"
                        aria-required='true' />
                    <label>Introductory piece</label>
                </div>
                <div class="et_manage_input">
                    <textarea autocomplete="nope" required name="content" placeholder="Tell us your story" cols="45" rows="8" aria-required="true"></textarea>
                    <!-- <textarea id="content" aria-hidden="true" name="content" autocomplete="nope" style="padding:0;clip:rect(1px, 1px, 1px, 1px);position:absolute !important;white-space:nowrap;height:1px;width:1px;overflow:hidden;" tabindex="-1"></textarea> -->

                    <label>Content of the blog</label>
                </div>
                <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="button primary-button inline-button"
                        value="Submit Post" />
                </p>
            </form>
        </section>