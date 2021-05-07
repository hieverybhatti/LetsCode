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
		<tr><td><a href="lists.html">Lists</a></td></tr>
		<tr><td><a href="ifelse.html">If..Else</a></td></tr>
		<tr><td><a href="loops.html">Loops</a></td></tr>
		<tr><td><a href="class.html">Class</a></td></tr>
		</table>
	</div>
	<div class="doc_info">
	<div class="doc_title">Documentation-Variables</div>
        <div class="doc_info-box">
		<div class="doc">
			<p><b>Variables</b> is a named location within a program that stores a given data value.
			<br>In Python, you do not need to declare a variable. A variable gets created by simply assigning a value to it.
			However, there are some rules for creating a variable.
			<ul>
			<li>variable name starts with a <u>letter or underscore</u></li>
			<li>variable name is <u>case-sensative</u></li>
			<li>variable name may contain only <u>letters, digits, and underscores</u></li>
			<li>variable name <u>cannot be a reserved word</u></li>
			</ul>
			Following are <b>reserved words</b> that may not be used as variable names.
			<div style="padding: 1em; font-style: italic;">and, as, assert, break, class, continue, def, del, elif, else, except, False, finally, for, from, 
			global, if, import, in, is, lambda, None, nonlocal, not, or, pass, raise, return, True, try, while, 
			with, yield</div>
			</p>
			In order to change the value assigned to the variable, you simply have to reassign the value.</p>
			<table><tr><td class="code" style="width: 100px">Input:<br> x = 2 <br> print(x)<br> x = 3<br> print(x)</td>
			<td style="vertical-align: top">Output:<br> 2<br> 3</td></tr></table>
			<p>You may <u>assign multiple variables in a single line.</u>
			<br>For instance,
			<div class="code">x, y, z = 1, 2, "no"</div>
			will assign each value to each variable in order.
			<br><br>This also works when you want to assign <u>same value to different variables.</u>
			<div class="code"><br>x, y, z = 1</div>
			will assign 1 to all three variables.
			</p>
			<p>If you want to specify the type of data for a variable, you can do so with <u>casting.</u></p>
			<div class="code">x = int(1)<br>y = str("yes")</div>
			will limit data type of "x" as int and "y" as string.
			</p>
			<table style="width:100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-variables/"><img class="site" src="site_logos/gfg.PNG"></a></td>
			<td><a href="https://www.w3schools.com/python/python_variables.asp"><img class="site" src="site_logos/w3.PNG"></a></td>
			<td><a href="https://www.programiz.com/python-programming/variables-constants-literals"><img class="site" src="site_logos/programiz.PNG"></a></td>
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