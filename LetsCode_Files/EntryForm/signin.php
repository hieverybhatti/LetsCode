<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In - LetsCode</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sign up page">
    <meta name="author" content="Yeonji/Lindsay Kim">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/introStyles.css">
    <link rel="icon" href="../brandDesign/logo_icon.png">
    <script src="signin.js" defer> </script>
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
            <a href="../GettingStarted/g_start.php">STARTING OUT</a>
            <a href="signup.php">SIGN UP</a>
            <a href="../About/contact.html">ABOUT US</a>
        </nav>
    </header>
    <div class="content-area">
        <div class="signup-box">

            <?php

            $server = "spring-2021.cs.utexas.edu";
            $user = "cs329e_bulko_haris";
            $pwd = "Along+turk\$worthy";
            $dbName = "cs329e_bulko_haris";
            $mysqli = new mysqli($server, $user, $pwd, $dbName);

            if ($mysqli->connect_errno) {
                die('Connect Error: ' . $mysqli->connect_errno .
                    ": " . $mysqli->connect_error);
            }
            // echo "Server: <code>" . $server . "</code><br>";
            // echo "User: <code>" . $user . "</code><br>";
            // echo "Database name: <code>" . $dbName . "</code><br>";

            print <<<FORM
            <form id = "signinform">
                <center>
                    <h1 style="font-size: 45px;"> LOGIN </h1>
                </center>
                <table class="signing">
                    <tr>
                        <th>username:</th>
                    </tr>
                    <tr>
                        <td><input id="U" name="username" type="text" /></td>
                    </tr>
                    <tr>
                        <th>password:</th>
                    </tr>
                    <tr>
                        <td><input id="P" name="password" type="password" /></td>
                    </tr>
                </table>

                <input class = "sign" type = "button" onclick = "ajaxFunction();" value = " Login "/>
FORM;
            ?>
            </form>
        </div>
    </div>
<br>
<br>
<br>
<br>
    <div id="ajaxDiv" class = "msgdisplayer"> Your confirmation will show up here.</div>

    <footer>

        <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
        <div id="rightfoot">3/10/2021</div>

    </footer>
</body>
</html>