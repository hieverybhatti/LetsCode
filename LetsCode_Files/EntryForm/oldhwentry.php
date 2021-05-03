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



<body onload="checkStatus()">
    <script language="javascript" type="text/javascript">
        var username = document.getElementById('U').value;
        var password = document.getElementById('P').value;

        function ajaxFunction(server, user, pwd, dbName) {
            var ajaxRequest; // The variable that makes Ajax possible!

            ajaxRequest = new XMLHttpRequest();
            ajaxRequest.onreadystatechange = function() {
                if (ajaxRequest.readyState == 4) {
                    var ajaxDisplay = document.getElementById('ajaxDiv');
                    ajaxDisplay.innerHTML = ajaxRequest.responseText;
                }
            }
            var queryString = "?username=" + username;

            queryString += "&password=" + password + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;

            ajaxRequest.open("GET", "registering.php" + queryString, true);
            ajaxRequest.send(null);
        }
        // if user name and password fields are filled...
        var inputV;
        var flag;
        var flags;
        var yes = "&#10004;";
        var no = "&#10006;";
        var submit = document.getElementById('subm');

        // later on have to change alerts to ajax 
        submit.onclick = function calculateValue() {
            flag = true;
            if (flags.includes("n")) {
                flag = false;
            }
            if (flag == true) {
                clearInterval(inputV);
                function ajaxFunction();
            } else {
                alert("User invalid.");
            }
        }

        function checkStatus() {
            flags = new Array("n", "n", "n", "n", "n", "n");
            inputV = setInterval(checkInput, 100);
        }

        // check username and password
        function checkInput() {
            var U = document.getElementById("U").value;
            var P = document.getElementById("P").value;
            var RP = document.getElementById("R").value;

            // out of length
            if (U.length < 6 || P.length < 6) {
                document.getElementById("six").innerHTML = no;
                flags[0] = "n";
            } else {
                document.getElementById("six").innerHTML = yes;
                flags[0] = "y";
            }

            // password and repeat not equal
            if (P !== RP || P.length == 0) {
                document.getElementById("match").innerHTML = no;
                flags[1] = "n";
            } else {
                document.getElementById("match").innerHTML = yes;
                flags[1] = "y";
            }

            // check letters and digits
            var checkU = checkContain(U);
            var checkP = checkContain(P);
            if (checkU == false || checkP == false) {
                document.getElementById("special").innerHTML = no;
                flags[2] = "n";
            } else {
                document.getElementById("special").innerHTML = yes;
                flags[2] = "y";
            }

            // check cases and digits
            if (!/[A-Z]/.test(U) || !/[A-Z]/.test(P)) {
                document.getElementById("upper").innerHTML = no;
                flags[3] = "n";
            } else {
                document.getElementById("upper").innerHTML = yes;
                flags[3] = "y";
            }
            if (!/[a-z]/.test(U) || !/[a-z]/.test(P)) {
                document.getElementById("lower").innerHTML = no;
                flags[4] = "n";
            } else {
                document.getElementById("lower").innerHTML = yes;
                flags[4] = "y";
            }
            if (!/[0-9]/.test(U) || !/[0-9]/.test(P)) {
                document.getElementById("num").innerHTML = no;
                flags[5] = "n";
            } else {
                document.getElementById("num").innerHTML = yes;
                flags[5] = "y";
            }
        }

        // checks if x has only letters and digits
        function checkContain(x) {
            if (/^[A-Za-z0-9]+$/.test(x)) {
                return true;
            }
            return false;
        }

        // clears all text fields
        // function resetValue() {
        //     document.getElementById("U").value = "";
        //     document.getElementById("P").value = "";
        //     document.getElementById("R").value = "";
        // }
    </script>

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

    print <<<SIGNUP

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
<form method="post">
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
<input class="sign" id = "subm" type="submit" name = "signup" value=" get started "/>
SIGNUP;

    ?>


    </form>
    </div>
    </div>

    <br>
    <div id="ajaxDiv"> Your confirmation will show up here.</div>



    <footer>
        <br>
        <br>
        <br>
        <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
        <div id="rightfoot">3/10/2021</div>

    </footer>
</body>

</html>