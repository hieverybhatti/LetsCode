<?php

   error_reporting(E_ALL);
   ini_set("display_errors", "on");
   
   $server = "spring-2021.cs.utexas.edu";
   $user = "cs329e_bulko_haris";
   $pwd = "Along+turk\$worthy";
   $dbName = "cs329e_bulko_haris";
   $mysqli = new mysqli($server, $user, $pwd, $dbName);
//    print just to confirm they got passed correctly

   // Connect to MySQL Server
   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   } else {
   }
  
   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);
   
   // Retrieve data from Query String
   $username = $_GET['username'];
   $password = $_GET['password'];
   
   // Escape User Input to help prevent SQL Injection
   $username = $mysqli->real_escape_string($username);
   $password = $mysqli->real_escape_string($password);


   //build query
//    echo "<code>...Building query</code><br>";
   $query = "SELECT user, pass FROM letscode WHERE user = '$username' AND pass = '$password'";
//    $query2 = "SELECT username FROM passwords WHERE username = '$username'";
   //Execute query

   $result = $mysqli->query($query) or die($mysqli->error);
//    $result2 =$mysqli->query($query2) or die($mysqli->error);

   $total_rows = $result->num_rows;
//    $total_rows2 = $result2->num_rows;
    if ($total_rows>=1)
    {
      echo "User and password confirmed, Welcome Back " . $username;
      echo " You can now visit the Starting Out Tab!" ;
	   setcookie("signedin",$username,time()+120 , '/');
    }
    else {
       echo "Invalid Username or Password. Please Try Again";
    }



//    echo "Query: <code>" . $query . "</code> <br><br>";
