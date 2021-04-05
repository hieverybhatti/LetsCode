var inputV;
var flag;
var yes = "&#10004;";
var no = "&#10006;";

function calculateValue() {
	var valid = document.getElementsByClassName("check");
	flag = true;
	var i = 0;
	while (flag) {
		alert(valid[i].innerHTML);
		if (i >= valid.length) {
			break;
		}
		if (valid[1].innerHTML == no) {
			flag = false;
		}
		i++;
	}
	if (flag == true) {
		clearInterval(inputV);
		alert("User validated.");
	} else {
		alert("User invalid.");
	}
}

function checkStatus() {
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
	} else {
		document.getElementById("six").innerHTML = yes;
	}

	// password and repeat not equal
	if (P !== RP || P.length == 0) {
		document.getElementById("match").innerHTML = no;
	} else {
		document.getElementById("match").innerHTML = yes;
	}

	// check letters and digits
	var checkU = checkContain(U);
	var checkP = checkContain(P);
	if (checkU == false || checkP == false) {
		document.getElementById("special").innerHTML = no;
	} else {
		document.getElementById("special").innerHTML = yes;
	}

	// check cases and digits
	if (!/[A-Z]/.test(U) || !/[A-Z]/.test(P)) {
		document.getElementById("upper").innerHTML = no;
	} else {
		document.getElementById("upper").innerHTML = yes;
	}
	if (!/[a-z]/.test(U) || !/[a-z]/.test(P)) {
		document.getElementById("lower").innerHTML = no;
	} else {
		document.getElementById("lower").innerHTML = yes;
	}
	if (!/[0-9]/.test(U) || !/[0-9]/.test(P)) {
		document.getElementById("num").innerHTML = no;
	} else {
		document.getElementById("num").innerHTML = yes;
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
