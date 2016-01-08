var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; 

switch (color) {
	case "red":
		document.body.style.background = 'red';
		console.log("Red is for suckers.  Cherry flavor is the best.");
		break;
	case "orange":
		document.body.style.background = 'orange';
		console.log("Nothing rhymes with Orange.");
		break;
	case "yellow":
		document.body.style.background = 'yellow';
		console.log("Reminds me of Beatles tune.");
		break;
	case "green":
		document.body.style.background = 'green';
		console.log("There\'s a Kermit joke here somewhere.");
		break;
	case "blue":
		document.body.style.background = 'blue';
		console.log("I like blue.");
		break;
	default:
		document.body.style.background = 'black';
		console.log("This was one of those stupid colors");
} 

