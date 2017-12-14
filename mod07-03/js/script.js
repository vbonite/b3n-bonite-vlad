function identifyThis() {
	var num = parseInt(document.getElementById("numberInput").value);
	if (num % 2 == 0) {
		document.getElementById("theMessage").innerHTML = "It is an even number";
		document.getElementById("mainWrapper").style.backgroundColor = "blue";
	} else	{
		document.getElementById("theMessage").innerHTML = "It is an odd number";
		document.getElementById("mainWrapper").style.backgroundColor = "red";
	}

	document.getElementById("header1").style.color = "white";
}