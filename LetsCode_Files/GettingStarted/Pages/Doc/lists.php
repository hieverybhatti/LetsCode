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
	<div class="doc_title">Documentation-Lists</div>
        <div class="doc_info-box">
		<div class="doc">
			<p><b>List</b> is a collection of items, and each item can be a different type.
			<br>There are different ways to create a list. You can create <u>a list with items</u> or just <u>an empty list</u>.
			You can also <u>combine two lists together</u>, which is called <i>concatenation</i>.
			<div class="code" style="width: 100%"><i>list with items</i><br> aList = [1, 2, "dog"]
			<br><br><i>empty list</i><br> bList= []
			<br><br><i>concatenated list</i><br>cList = [4, 5]<br>newList = aList + cList = [1, 2, "dog", 4, 5]</div>
			You may also create a multi-dimensional list.
			<div class="code" style="width: 100%"><br>aList = [[1, 2], "dog", ["one", "two", 3]]</div>
			</p>
			<p>
			Elements inside the list may be duplicated, changed, added, and removed, and an <b>index</b> is used to access an element in a list.
			<br>Note that index of a list <u>starts at 0.</u>
			Therefore, a list with 3 elements will have index from 0 to 2. 
			</p>
			<p>
			<div class="subcategory">Index</div>
			Lists are changable, and each element can be changed by using index.
			<div class="code"><br>aList = [1, 2, 3]<br>aList[1] = 4</div>
			aList will now be [1, 4, 3].
			</p>
			<p><div class="subcategory">append() and extend()</div>
			Elements can be added to the list by using <i>extend()</i> or <i>append()</i>.
			<i>extend()</i> is used when several items are added to the list.
			<div class="code"><br>aList = [1, 2, 3]<br>aList.append(4)
			<br>bList = [1, 2, 3]<br>bList.extend([6, 7, 8])</div>
			aList and bList will each be [1, 2, 3, 4] and [1, 2, 3, 6, 7, 8].
			</p>
			<p><div class="subcategory">insert()</div>
			If you want to place an element in a specific location of the list, you can use <i>insert()</i>.
			<div class="code"><br>aList = [1, 2, 3]<br>aList.insert(0, 4)</div>
			First number indicates the index number, and second value is the value you want to insert.
			Therefore, aList will be [4, 1, 2, 3].
			</p>
			<p><div class="subcategory">remove() and pop()</div>
			If you want to delete a specific value inside the list, you can use <i>remove()</i>. Be aware that an error will arise if the value doesn't exist.
			<br>You may also delete an element from the list using <i>pop()</i>.
			By default, it removes the last element, however you may remove an element in specific location using index.
			
			<div class="code"><br>aList = ["one", "two", "three", "four"]<br>pop()
			<br>remove("two")</div>
			"four" is removed using <i>pop() and </i>"two" is removed using <i>remove()</i>, resulting in ["one", "three"].
			</p>
			
			<table style="width: 100%">
			<tr>
			<td colspan="2">for more information:</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td><a href="https://www.geeksforgeeks.org/python-list/"><img class="site" src="site_logos/gfg.png"></a></td>
			<td><a href="https://www.w3schools.com/python/python_lists.asp"><img class="site" src="site_logos/w3.png"></a></td>
			<td><a href="https://www.programiz.com/python-programming/list"><img class="site" src="site_logos/programiz.png"></a></td>
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