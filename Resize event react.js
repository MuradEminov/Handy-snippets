

//THE SNIPPET FOR DETECTING WINDOW RESIZE AND DYNAMICALLY CHANGING THE PAGE'S CSS FILE. 
// IN THIS SNIPPET THE WINDOW CHANGES myCSS element's href link attribute from main.css to narrow.css once page width < 600 px

function adjustStyle(){
	
var width = 0; //get the width 

//Check for cross-browser issues: 
if (window.innerHeight){
	width = window.innerWidth; 
} else if (document.documentElement && document.documentElement.clientHeight) {
	 width = document.documentElement.clientWidth; 
} else if (document.body){

	width = document.body.clientWidth;
}
  
  // now, after the client browser's width and height are received, we can deal with it: 

  if(width < 600){

  	  document.getElementById("myCSS").setAttribute("href", "css/narrow.css"); // change the href attribute to the css file for resized view
  } else {
  	  document.getElementById("myCSS").setAttribute("href", "css/main.css"); // if window wasn't resized, use main.css 

  }



// We call adjustStyle function by using the anonymus function when the page was resized: 

window.onresize = function () {
 
  adjustStyle(); 

}; 

