<!DOCTYPE html>

<html lang="en">

<?php>
    if(!isset ($_COOKIE['visited']))
    {
      $redirect = "g_start.php";
      setcookie("redirect", $redirect, time () + 30, "/");
      header("Location: ../EntryForm/SignUp/signup.php");
    }
?>

<head>
	<title>Getting Started</title>
	<meta charset="UTF-8">
	<meta name="description" content="Main Page">
    <meta name="author" content="Gavin Wurm">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/introStyles.css">
    <link rel="icon" href="../brandDesign/logo_icon.png">
    <script type = "text/javascript" src = "g_start.js"></script>


    <style type="text/css">
        .img1 {z-index: 10;}
        .img2 {z-index: 0;}
        .img3 {z-index: 0;}
        .img4 {z-index: 0;}
        .img5 {z-index: 0;}

    </style>
    

</head> 

<body onload = "startTimer()">
    <!--navigation bar-->

    <header class="nav-bar">
        <div class="logo-bar">
            <a href="../Home/home.html">
                <img src="../brandDesign/logo_icon.PNG" width="40px">
            </a>
        </div>
        <nav id="navbuttons">
            <a href="g_start.html">STARTING OUT</a>
            <a href="../EntryForm/SignUp/signup.html">SIGN UP</a>
            <a href="../About/contact.html">ABOUT US</a>
        </nav>
    </header>

    <!--end of navigation bar -->
    <br><br><br>
    
<div class ="wrapper">
    
    

    <div class="gs_box">
        <center><h1>Table Of Contents</h1></center>
        <table class="gs_table">
            <tr>
                <td>Videos</td>
                <td>Documentation</td>
            </tr>

            <tr>
                <td>To head over to our videos section click here! <br>
                    <a href="Pages/Video/video_page.html">
                        <img src = "images_gs/videos_button.png"
                            alt = "(Picture of videos_button)" width = "75" height = "75"/>
                    </a>
                </td>

                <td>To head over to our documentation section click here! <br>
                    <a href="Pages/Doc/doc_page.html">
                        <img src = "images_gs/documentation_button.png"
                            alt = "(Picture of documentation_button)" width = "75" height = "75"/>
                    </a>
                </td>

            </tr>

            <tr>
                <td>Practice</td>
                <td>Projects</td>
            </tr>

            <tr>
                <td>To head over to our practice section click here! <br>
                    <a href="Pages/Practice/practice_page.html">
                        <img src = "images_gs/practice_button.png"
                            alt = "(Picture of practice_button)" width = "75" height = "75"/>
                    </a>
                </td>

                <td>To head over to our projects section click here! <br>
                    <a href="Pages/Project/project_page.html">
                        <img src = "images_gs/projects_button.png"
                            alt = "(Picture of projects_button)" width = "75" height = "75"/>
                    </a>
                </td>
                
            </tr>

        </table>
    </div>

    <div class="slideshow_outer">
        <div id="spacer" style="height: 350px; margin-right:0px;"></div>
        <div class="slideshow_inner">
            <a href="https://www.python.org/downloads/">
            <img class = "img1"  id = "starting_out" src = "images_gs/starting_out.png"
                alt = "(Picture of starting_out)" width = "700" height = "400"/>
            </a>

            <a href="Pages/Video/video_page.html">
            <img class = "img2"  id = "videos" src = "images_gs/videos.png"
                alt = "(Picture of videos)" width = "700" height = "400"/>
            </a>

            <a href="Pages/Doc/doc_page.html">
            <img class = "img3"  id = "documentation" src = "images_gs/documentation.png"
                alt = "(Picture of documentation)" width = "700" height = "400"/>
            </a>
            
            <a href="Pages/Practice/practice_page.html">
            <img class = "img4"  id = "practice" src = "images_gs/practice.png"
                alt = "(Picture of practice)" width = "700" height = "400"/>
            </a>
            
            <a href="Pages/Project/project_page.html">
            <img class = "img5"  id = "projects" src = "images_gs/projects.png"
                alt = "(Picture of projects)" width = "700" height = "400"/>
            </a>
        </div>
        
    </div>

    <br>

    <footer>

        <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
        <div id="rightfoot">3/10/2021</div>

    </footer>
</body>
</html>