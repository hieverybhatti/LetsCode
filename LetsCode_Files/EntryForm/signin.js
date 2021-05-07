

// later on have to change alerts to ajax 
var server = "spring-2021.cs.utexas.edu";
var user = "cs329e_bulko_haris";
var pwd = "Along+turk\$worthy";
var dbName = "cs329e_bulko_haris";


function ajaxFunction() {
	alert("im inside");
	// var username = "";
	var username = document.getElementById('U').value;
	var password = document.getElementById('P').value;
	var ajaxRequest; // The variable that makes Ajax possible!
	// echo these above statements 
	ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function () {
		if (ajaxRequest.readyState == 4) {
			var ajaxDisplay = document.getElementById('ajaxDiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var queryString = "?username=" + username;

	queryString += "&password=" + password + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;

	alert(queryString);
	alert("the user name and pass is" + username + password);

	ajaxRequest.open("GET", "registering.php" + queryString, true);
	ajaxRequest.send(null);
	// window.location.href = "../GettingStarted/g_start.php";
	setTimeout(function () {
		window.location.href = "../GettingStarted/g_start.php";
	}, 3000);
}
