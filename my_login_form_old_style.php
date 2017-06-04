<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">

<head>

<title>My Form</title>

</head>

<body>

<form id="my-form" action="myform.php" method="post" >
USERNAME: <input type="text" name="username" id="usernameField"> <br />
PASSWORD: <input type="password" name="password" id="passwordField">


</form>
<br />

<p id="user-note-field" style="display: none; color: red; font-weight: bold;"></p>



<script type="text/javascript">
	
var usrName = document.getElementById("usernameField"); 
usrName.setAttribute("size","12");
usrName.style.margin = "0px 0px 12px 0px";
usrName.style.backgroundColor = "black";
usrName.style.color = "white";
usrName.onclick = function(){
 
  document.getElementById("user-note-field").innerHTML = "Please, enter your username<br /> Example: Murad";
  document.getElementById("user-note-field").style.display = "inline";

};
usrName.onblur = function(){

	  document.getElementById("user-note-field").style.display = "none";

};

var pWord = document.getElementById("passwordField"); 
pWord.setAttribute("size","12"); 
pWord.style.margin = "0px 0px 12px 0px";
pWord.style.backgroundColor = "black";
pWord.style.color = "white";
pWord.onclick = function(){
 
  document.getElementById("user-note-field").innerHTML = "Please, enter your 6-character-long password."
  document.getElementById("user-note-field").style.display = "inline";
};
pWord.onblur = function(){

	  document.getElementById("user-note-field").style.display = "none";

};


var Form = document.getElementById("my-form");
Form.style.backgroundColor = "silver";
Form.style.maxWidth = "240px";
Form.style.borderRadius = "13px";
</script>
</body>


</html>