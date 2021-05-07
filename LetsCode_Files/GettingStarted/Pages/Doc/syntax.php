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
	<div class="doc_title">Documentation-Syntax</div>
        <div class="doc_info-box">
		<div class="doc">
			<p><b>Python</b> is one of the most common programming language used these days.
			<br>It is loved by many people for its simple yet concise syntax.
			Unlike many other languages including java and C that require the programmer to specify the type and assign a variable,
			python interprets the value without having to specify the type, and because of its concise and compact design, Python is easy to read and write.
			</p>
			<p>There are two ways to use Python.
			<br>First, you may write the code <u>directly in command line, followed by >>>.</u>
			<div class="code"> >>> print ("Hello World!")<br> Hello World!</div>
			<br>Second, you may <u>create a file that ends with <i>.py</i> extension</u> for longer programs.
			<br>To run the program, you will type <i>python (filename).py</i> in command line.
			</p>
			<p>One unique feature about Python is that <b>indentation matters</b>.
			<br>Instead of brackets, indentation is used to divide and sort the blocks of code.
			</p>
			<table>
			<tr>
			<td class="code" style="width: 200px">x = 2<br> if (x == 3):<br> &nbsp; print("x is 3.")</td>
			<td colspan="2">Correct syntax</td>
			<td></td>
			</tr>
			<tr>
			<td class="code" style="width: 200px">x = 2<br> if (x == 3):<br> print("x is 3.")</td>
			<td colspan="2">No indentation, therefore will be a syntax error.</td>
			<td></td>
			</tr>
			</table>
			<table style="width:100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-language-introduction/"><img class="site" src="site_logos/gfg.PNG"></a></td>
			<td><a href="https://www.w3schools.com/python/python_syntax.asp"><img class="site" src="site_logos/w3.PNG"></a></td>
			<td><a href="https://www.programiz.com/python-programming/first-program"><img class="site" src="site_logos/programiz.PNG"></a></td>
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