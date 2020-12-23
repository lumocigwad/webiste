<?php
include('../connect.php');	
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
    <script src="js/site.js" async></script>
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
                    <a id="login-button" class="button primary-button accent-pink"
                        href="new_post.php">
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
                        <h1>Computer Admin Panel</h1>
                        <p class="lead">Welcome to the admin Panel</p>
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
        <div class="row-container wide-width blog-index">
            <div class="row three-column equal-column-heights small-gutters">
                <?php
                    require_once ("../nbbc/nbbc.php");

                    $bbcode = new BBCode;
                    // use global $conn object in function
                    global $conn;
                    $sql = "SELECT * FROM posts WHERE published=true ORDER BY id DESC" ;
                    $result = mysqli_query($conn, $sql) or die(mysqli_error());
                                
                    $posts = "";
                               
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                            {
                                $id = $row['id'];
                                $user_id = $row['user_id'];
                                $title = $row['title'];
                                $slug = $row['slug'];
                                $image = $row['image'];
                                $content = $row['content'];
                                $created_at = $row['created_at'];
                                $views = $row['views'];

                                $post_title = $bbcode->Parse ($title);

                                $post_content = $bbcode->Parse ($content);
                                $post_slug = $bbcode->Parse ($slug);
                
                                $admin = "<div><br /><a class = 'button tertiary-button' href = 'edit_post.php?pid=$id'>Edit Post</a><br /><a class = 'button tertiary-button' href = 'delete_post.php?pid=$id'>Delete Post</a></div>";

                                $posts .= "<div class='column-container'>
                                                        <div class='column card accent-blue'>
                                                            <article id='post-$id' class='entry post-$id type-post status-publish format-standard has-post-thumbnail hentry category-divi-resources tag-divi-nation tag-web-design tag-wordpress'>
                                                                <h3>
                                                                    <a href='view_post.php?pid=$id'>$post_title</a>
                                                                </h3>
                                                                <p class='blog-meta'>
                                                                    <span class='published updated'>Published On $created_at</span> || <span class='comments-number'>$views Views</span>
                                                                </p>
                                                                <p>$post_slug....</>
                                                                <a class='button tertiary-button fullwidth-button' href='../view_post.php?pid=$id' class='viewfull'>View Full Post</a>
                                                                $admin
                                                            </article>
                                                        </div>
                                                    </div>";
                            }
                                echo $posts;
                    }
                        else
                        {
                            echo"There are no posts to display";
                        }
			    ?>
            </div>
        </div>
        <div class="row-container">
            <div class="row ">
                <div class="column-container">
                    <div class="column centered">
                        <div class='wp-pagenavi' role='navigation'>
                            <span class='pages'>Page 1 of 259</span>
                            <span aria-current='page' class='current'>1</span>
                            <a class="page larger" title="Page 2" href="page/2.html">2</a>
                            <a class="page larger" title="Page 3" href="page/3.html">3</a>
                            <a class="page larger" title="Page 4" href="page/4.html">4</a>
                            <a class="page larger" title="Page 5" href="page/5.html">5</a>
                            <span class='extend'>...</span>
                            <a class="nextpostslink" rel="next" href="page/2.html">»</a>
                            <a class="last" href="page/259.html">Last »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>