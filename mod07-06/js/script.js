// var userName;
// var firstName;
// var lastName;

// userName = "billyarante";
// firstName = "Billy Wilson";
// lastName = "Arante";

// console.log(userName);
// console.log(firstName);
// console.log(lastName);

// var message = "Your name is " + firstName + " " + lastName + " and your username is " + userName + ".";

// console.log(message);

// document.getElementById("yourMessage").innerHTML = message;

/*
 *
 * If statement
 *
 */

// var userName;
// var passWord;

// userName = "billyarant";
// passWord = "bc123";

// if (userName == "billyarante") {
// 	console.log("Your username is correct.");
// } else {
// 	console.log("Username entered is incorrect.");
// }

// if (passWord == "abc123") {
// 	console.log("Your password is correct.");
// } else {
// 	console.log("Password entered is incorrect.");
// }

/*
 *
 * Loops (while, do...while, for)
 *
 */

// var counter = 0;
// while (counter <= 10) {
// 	console.log(counter);
// 	counter = counter + 2;
// }

// var counter = 0;
// while (counter <= 100) {
	/* print all even numbers only between 0 and 100 */
// 	if (counter % 2 == 0) {
// 		console.log(counter);
// 	}
// 	counter = counter + 1;
// }

// var yourName = "Juan Dela Cruz";
// var counter = 0;
// var markup = "";
// while (counter < 10) {
	// console.log(yourName);
	// markup = markup + "<p>" + yourName + "</p>";
	// console.log(markup);
// 	counter = counter + 1;
// }
// document.getElementById("yourMessage").innerHTML = markup;

var expression = "";

function updateDisplay(val) {
	// console.log(val);
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;
}

function computeExpression() {
	// console.log("expression = " + expression);
	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
	expression = "";
}

function clearDisplay() {
	expression = "";
	document.getElementById("display").innerHTML = 0;
}

function deleteLastChar() {
	expression = expression.substr(0, expression.length-1);
	console.log(expression);
	
	if (expression == "") {
		document.getElementById("display").innerHTML = 0;
	} else {
		document.getElementById("display").innerHTML = expression;
	}
}