
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//which cookie was set? based on that redirect it using that cookie 

if (!isset($_COOKIE['visited'])) {
SignUpPage();
}


function SignUpPage ()
{
$script = $_SERVER['PHP_SELF'];
print <<<SIGNUP
<html lang="en">

<head>
    <title>Sign Up - LetsCode</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sign up page">
    <meta name="author" content="Yeonji/Lindsay Kim">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/introStyles.css">
    <link rel="icon" href="../brandDesign/logo_icon.png">
    <script src="signup.js" defer></script>
</head>

<body onload="checkStatus()">
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
<h1> Before you start please login below! </h1>
<div class="signup-box">
<form method="post" action="$script">
<table id="signup">
    <tr>
        <th>username:</th>
    </tr>
    <tr>
        <td><input id="U" name="username" type="text"/></td>
    </tr>
    <tr>
        <th>password:</th>
    </tr>
    <tr>
        <td><input id="P" name="password" type="password"/></td>
    </tr>
    <tr>
        <th>repeat password: </th>
    </tr>
    <tr>
        <td><input id="R" name="repeat password" type="password"/></td>
    </tr>
</table>
<table id="checker">
    <tr>
        <td><span class="check" id="lower">&#10006;</span> one lowercase character</td>
        <td><span class="check" id="upper">&#10006;</span> one uppercase character</td>
    </tr>
    <tr>
        <td><span class="check" id="num">&#10006;</span> one number</td>
        <td><span class="check" id="six">&#10006;</span> 6 characters minimum</td>
    </tr>
    <tr>
        <td><span class="check" id="match">&#10006;</span> passwords match</td>
        <td><span class="check" id="special">&#10006;</span> no special character</td>
    </tr>
</table>
<input class="sign" type="submit" name = "signup" value=" get started "/>
</form>
</div>
</div>


    <footer>

        <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
        <div id="rightfoot">3/10/2021</div>

    </footer>
</body>



</html>

SIGNUP;
}

if (isset($_POST["signup"])){ //ONLY RUN AFTER SUBMIT HAS OCCURED
    $visited = 'visited';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userinfo = "$username:$password";
    $file = file_get_contents("./passwd.txt");
    $fp = fopen('./passwd.txt', 'a');
    fwrite($fp, $userinfo.'\n');  
    fclose($fp);
    echo "user registered";
    setcookie('visited', $visited, time() + 20, "/");
    // header("Location:".$_COOKIE["redirect"]);

}

?>