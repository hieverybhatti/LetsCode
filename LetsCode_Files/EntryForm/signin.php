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
    <script language="javascript" type="text/javascript">
        //Browser Support Code
        function ajaxFunction(server, user, pwd, dbName) {
            var ajaxRequest; // The variable that makes Ajax possible!

            ajaxRequest = new XMLHttpRequest();

            // Create a function that will receive data sent from the server and will update
            // the div section in the same page.

            ajaxRequest.onreadystatechange = function() {
                if (ajaxRequest.readyState == 4) {
                    var ajaxDisplay = document.getElementById('ajaxDiv');
                    ajaxDisplay.innerHTML = ajaxRequest.responseText;
                }
            }

            // Now get the value from user and pass it to server script.
            var username = document.getElementById('U').value;
            var password = document.getElementById('P').value;
            if (username && password) {
                var queryString = "?username=" + username;

                queryString += "&password=" + password + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;

                ajaxRequest.open("GET", "registering.php" + queryString, true);
                ajaxRequest.send(null);
            } else {
                alert("please fill out the missing fields.")
            }
        }
    </script>

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
            <form id = "signin">
                <center>
                    <h1 style="font-size: 45px;"> LOGIN </h1>
                </center>
                <table id="signup">
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

                <input class = "sign" type = "button" onclick = "ajaxFunction('$server','$user','$pwd','$dbName')" value = " Login "/>
FORM;
            ?>
            </form>
        </div>
    </div>

    <div id="ajaxDiv"> Your confirmation will show up here.</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>

        <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
        <div id="rightfoot">3/10/2021</div>

    </footer>
</body>
</html>