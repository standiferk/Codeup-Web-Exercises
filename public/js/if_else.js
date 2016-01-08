// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if (color == 'red'){
	console.log("red");
} else if (color == 'orange'){
	console.log("orange");
} else if (color == 'yellow'){
	console.log('yellow');
} else if (color == 'green'){
	console.log('green');
} else if (color == 'blue'){
	console.log('blue');
} else {
	console.log('I do not know anything about this color');
}
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
// if (colors === favorite) {
// 	document.body.style.background = "blue";
// } else if (colors === 'indigo' || 'violet') {
// 	document.body.style.background = 'indigo'
// alert("This is indigo. Hit OK to see violet")
// document.body.style.background = 'violet'
// alert("This is violet. Hit OK to do the Random color check exercise")
// }
alert("Next exercise")

if (color === 'red') {
	document.body.style.background = 'red';
	console.log("Red is for suckers.  Cherry flavor is the best.");
} else if (color === 'orange'){
	document.body.style.background = 'orange';
	console.log("Nothing rhymes with Orange.");
} else if (color === 'yellow'){
	document.body.style.background = 'yellow';
	console.log("Reminds me of Beatles tune.");
} else if (color === 'green'){
	document.body.style.background = 'green';
	console.log("There\'s a Kermit joke here somewhere.");
} else if (color === 'blue'){
 	document.body.style.background = 'blue';
 	console.log("I like blue.");
} else { (color === 'indigo' || 'indigo');
	console.log("I do not know anything about that color.");
} 
// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
(color === favorite)?console.log("It\'s a match"):console.log("I do not care for this color");
