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
                <img src="../../../brandDesign/logo_icon.png" width="40px">
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
	<div class="doc_title">Documentation-Operators</div>
        <div class="doc_info-box">
		<div class="doc">
			<p><b>Operators</b> are used to perform arithmetic or logical operations on variables and values, and there are different operators in Python.
			</p>
			<p><span class="subcategory">Arithmetic</span>
			<br>Arithmetic operators are used to perform math.
			<table class="doc_table">
			<tr><th>Operator</th><th>Description</th><th>Example</th></tr>
			<tr><td>+</td><td>Addition</td><td>x + y</td></tr>
			<tr><td>-</td><td>Subtraction</td><td>x - y</td></tr>
			<tr><td>*</td><td>Multiplication</td><td>x * y</td></tr>
			<tr><td>/</td><td>Division</td><td>x / y</td></tr>
			<tr><td>//</td><td>Integer Division</td><td>x // y</td></tr>
			<tr><td>%</td><td>Remainder</td><td>x % y</td></tr>
			<tr><td>**</td><td>Exponentiation</td><td>x ** y</td></tr>
			</table></p>
			
			<p><span class="subcategory">Comparison</span>
			<br>Comparison operators are used to compare values.
			The result of this comparison is a Boolean - <i>True</i> / <i>False</i>.
			<table class="doc_table">
			<tr><th>Operator</th><th>Description</th><th>Example</th></tr>
			<tr><td>==</td><td>Equal to</td><td>x == y</td></tr>
			<tr><td>!=</td><td>Not Equal to</td><td>x != y</td></tr>
			<tr><td>></td><td>Greater than</td><td>x > y</td></tr>
			<tr><td>>=</td><td>Greater or Equal</td><td>x >= y</td></tr>
			<tr><td><</td><td>Less than</td><td>x < y</td></tr>
			<tr><td><=</td><td>Less or Equal</td><td>x <= y</td></tr>
			</table></p>
			
			<p><span class="subcategory">Logical</span>
			<br>Logical operators are used to combine different conditional statements.
			<table class="doc_table">
			<tr><th>Operator</th><th>Description</th><th>Example</th></tr>
			<tr><td>and</td><td>True if both statements are true</td><td>x and y</td></tr>
			<tr><td>or</td><td>True if either statement is true</td><td>x or y</td></tr>
			<tr><td>not</td><td>True if statement is false</td><td>not x</td></tr>
			</table></p>
			
			<p><span class="subcategory">Bitwise</span>
			<br>Bitwise operators apply only to interger types as they act on binary digits.
			The result of this comparison is a Boolean - <i>True</i> / <i>False</i>.
			<table class="doc_table">
			<tr><th>Operator</th><th>Description</th><th>Example</th></tr>
			<tr><td>&</td><td>AND</td><td>x & y</td></tr>
			<tr><td>|</td><td>OR</td><td>x | y</td></tr>
			<tr><td>-</td><td>NOT</td><td>-x</td></tr>
			<tr><td>^</td><td>XOR</td><td>x ^ y</td></tr>
			<tr><td>>></td><td>right shift</td><td>x >> y</td></tr>
			<tr><td><<</td><td>left shift</td><td>x << y</td></tr>
			</table></p>
			
			<table style="width: 100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-operators/"><img class="site" src="site_logos/gfg.png"></a></td>
			<td><a href="https://www.w3schools.com/python/python_operators.asp"><img class="site" src="site_logos/w3.png"></a></td>
			<td><a href="https://www.programiz.com/python-programming/operators"><img class="site" src="site_logos/programiz.png"></a></td>
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