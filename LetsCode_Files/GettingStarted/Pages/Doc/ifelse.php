<!DOCTYPE html>

<html lang="en">

<head>
    <title>Documentation</title>
    <meta charset="UTF-8">
    <meta name="description" content="page linking to documentation for basic python">
    <meta name="author" content="Yeonji/Lindsay Kim">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../CSS/introStyles.css">
    <link rel="icon" href="../../../brandDesign/logo_icon.png">
</head>

<?php
if(!isset($_COOKIE["signedin"])){
    $redirect = "Home/home.php";
    setcookie("redirect",$redirect,time()+120,"/");
    header("Location: ../../../EntryForm/signin.php");
}
?>

<body>
    <!--navigation bar-->

    <header class="nav-bar">
        <div class="logo-bar">
            <a href="../../../Home/home.html">
                <img src="../../../brandDesign/logo_icon.PNG" width="40px">
            </a>
        </div>
        <nav id="navbuttons">
            <a href="../../g_start.html">STARTING OUT</a>
            <a href="../../../EntryForm/SignUp/signup.html">SIGN UP</a>
            <a href="../../../About/contact.html">ABOUT US</a>
			<a href = "../../../Home/home.html">HOME</a>
        </nav>
    </header>

    <!--end of navigation bar -->
    <br><br><br>

	<div class="doc_nav">
		<table>
		<tr><td><a href="syntax.html">Syntax</a></td></tr>
		<tr><td><a href="variables.html">Variables</a></td></tr>
		<tr><td><a href="operators.html">Operators</a></td></tr>
		<tr><td><a href="functions.html">Functions</a></td></tr>
		<tr><td><a href="strings.html">Strings</a></td></tr>
		<tr><td><a href="lists.html">Lists</a></td></tr>
		<tr><td><a href="dictionary.html">Dictionaries</a></td></tr>
		<tr><td><a href="ifelse.html">If..Else</a></td></tr>
		<tr><td><a href="loops.html">Loops</a></td></tr>
		<tr><td><a href="files.html">Files</a></td></tr>
		<tr><td><a href="recursion.html">Recursion</a></td></tr>
		<tr><td><a href="class.html">Class</a></td></tr>
		</table>
	</div>
	<div class="doc_info">
	<div class="doc_title">Documentation-If...Else</div>
        <div class="doc_info-box">
		<div class="doc">
			<p><b>If statments</b> are used to check conditions and decide whether part of the code will be runned or not.
			If the condition is met, a block of code will be executed.
			<div class="code">if <i>condition</i>:<br>&nbsp; &nbsp; statement1<br>statement2</div>
			Statement 2 will always be executed, whereas statement 1 will only be executed if <i>condition</i> is true
			</p>
			<p><b>Else statements</b>can be added to execute a block of code when the condition is <u>not met</u>.
			<div class="code">if <i>condition</i>:<br>&nbsp; &nbsp; statement1
			<br>else:<br>&nbsp; &nbsp; statement2</div>
			Statment 1 will be executed if the <i>condition</i> is true, and statement 2 will be executed if false.
			</p>
			<p>You may want to add more than 2 conditions. In that case, you can use <b>elif statment</b>.
			Elif is short for saying "else if", and it is used after <i>if</i> and before <i>else</i>.
			<div class="code">if <i>condition1</i>:<br>&nbsp; &nbsp; statement1
			<br>elif <i>condition2</i>:<br>&nbsp; &nbsp; statement2
			<br>else:<br>&nbsp; &nbsp; statement3</div>
			You may have as many elif condition as you would like.
			</p>
			<table>
			<tr><td class="code">Input:<br><br>x = 1<br>y = 2<br>z = 3
			<br>if x == 1:<br>&nbsp; &nbsp; print("x is 1.")
			<br>elif y == 2:<br>&nbsp;&nbsp; print("y is 2.")
			<br>else:<br>&nbsp; &nbsp; print("Something is wrong!")
			<br>if z == 3:<br>&nbsp; &nbsp; print("z is 3.")
			</td>
			<td class="code" style="vertical-align: top">Output:<br><br>
			x is 1.<br> z is 3.</td></tr>
			</table>
			<br>
			<table styel="width: 100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-if-else/?ref=lbp"><img class="site" src="site_logos/gfg.png"></a></td>
			<td><a href="https://www.w3schools.com/python/python_conditions.asp"><img class="site" src="site_logos/w3.png"></a></td>
			<td><a href="https://www.programiz.com/python-programming/if-elif-else"><img class="site" src="site_logos/programiz.png"></a></td>
			</tr>
			</table>
		</div>
        </div>
	</div>
    <footer>

            <div id="leftfoot"> &#169; Haris Bhatti, Gavin Wurm, Yeonji Kim, Francesc Aguilar Lite</div>
            <div id="rightfoot">3/10/2021</div>
    
    </footer>
</body>

</html>