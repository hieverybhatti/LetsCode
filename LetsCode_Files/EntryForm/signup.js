
var inputV;
var flag;
var flags;
var yes = "&#10004;";
var no = "&#10006;";
// later on have to change alerts to ajax 

<<<<<<< Updated upstream
=======
function ajaxFunction() {
	alert ("im inside");
	var username = document.getElementById('U').value;
	var password = document.getElementById('P').value;
	var ajaxRequest; // The variable that makes Ajax possible!

	ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function () {
		if (ajaxRequest.readyState == 4) {
			var ajaxDisplay = document.getElementById('ajaxDiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var queryString = "?username=" + username;

	queryString += "&password=" + password;

	alert("query string is done");

	ajaxRequest.open("POST", "registering.php" + queryString, true);
	ajaxRequest.send(null);
}


// if user name and password fields are filled...
>>>>>>> Stashed changes
function calculateValue() {
	flag = true;
	if (flags.includes("n")) {
		flag = false;
	}
	if (flag == true) {
		ajaxFunction();
		clearInterval(inputV);
		alert("User validated.");
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
function resetValue() {
	document.getElementById("U").value = "";
	document.getElementById("P").value = "";
	document.getElementById("R").value = "";
}
