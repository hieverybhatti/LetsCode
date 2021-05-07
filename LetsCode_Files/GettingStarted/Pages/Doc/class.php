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
    header("Location:  ../../../EntryForm/signin.php");
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
	<div class="doc_title">Documentation-Class</div>
        <div class="doc_info-box">
		<div class="doc">
			<p>A <b>class</b> is a description of a group of objects, 
			and an <b>object</b> is a collection of variables and functions.
			<br>To create a class, you begin with <i>class</i> instead of <i>def</i>.
			Inside the class, <i>__init__()</i> function follows to initiate and assign values to object properties.
			<div class="code" style="width: 100%">class Friends:<br>&nbsp; &nbsp; def __init__(self, name):
			<br>&nbsp; &nbsp; &nbsp; &nbsp; self.name = name</div>
			You can add functions inside the class after the values are assigned.
			<div class="code" style="width: 100%">class Friends:<br>&nbsp; &nbsp; def __init__(self, name):
			<br>&nbsp; &nbsp; &nbsp; &nbsp; self.name = name
			<br>&nbsp; &nbsp; def welcome(self):
			<br>&nbsp; &nbsp; &nbsp; &nbsp; print("Hellow my friend, " + self.name)
			<br>friend1 = Friends("John")<br>friend1.welcome()</div>
			By doing so, an object(friend) named "John" is created, and the welcome function is executed.
			</p>
			<table style="width: 100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-for-loops/"><img class="site" src="site_logos/gfg.PNG"></a></td>
			<td><a href="https://www.w3schools.com/python/python_for_loops.asp"><img class="site" src="site_logos/w3.PNG"></a></td>
			<td><a href="https://www.programiz.com/python-programming/for-loop"><img class="site" src="site_logos/programiz.PNG"></a></td>
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