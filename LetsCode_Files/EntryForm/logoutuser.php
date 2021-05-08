<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up - LetsCode</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sign up page">
    <meta name="author" content="Yeonji/Lindsay Kim">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/introStyles.css">
    <link rel="icon" href="../brandDesign/logo_icon.png">
    <!-- <script src="signup.js" defer></script> -->
</head>

<body>
    <!--navigation bar-->

    <header class="nav-bar">
        <div class="logo-bar">
            <a href="../Home/home.html">
                <img src="../brandDesign/logo_icon.PNG" width="40px">
            </a>
        </div>
        <nav id="navbuttons">
            <a href="../GettingStarted/g_start.html">STARTING OUT</a>
            <a href="signup.html">SIGN UP</a>
            <a href="../About/contact.html">ABOUT US</a>
        </nav>
    </header>

    <div class="content-area">
        <div class="signup-box" id="logout">
            <form>
                <table>
                    <?php
                    function clearCookies()
                    {
                        setcookie($_COOKIE["signedin"], time() - 36000, '/');;
                    }
                    if (isset($_GET['clear'])) {
                        clearCookies();
                    }
                    ?>

                    <a href='index.php?clear=true'>Log Out</a>

</html>
<!-- once user hits this button above, it will drop cookie and session variables. -->
</form>
</div>
</div>


<footer>

    <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
    <div id="rightfoot">3/10/2021</div>

</footer>
</body>



</html>