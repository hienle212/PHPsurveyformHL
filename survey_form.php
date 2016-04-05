<!DOCTYPE html>
<html>
<head>
	<title>survey_form</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.2.js"></script>
  	<script type="text/javascript">
    		$(document).ready(function() {

$("#button").click(function(event){
	event.preventDefault();
    window.location="surveyform.php";
});

});
 </script>   			
	<style type="text/css">

form{
	width:350px;
	height:260px;
	border:2px solid black;
	padding:30px;
	margin-top: 130px;
	margin-left: 400px;
}
h2{
	font-size: 15px;
	font-family: bold;
	text-decoration: underline;
}
label{
	margin-top: 25px;
	margin-bottom: 25px;
}
#button{
	margin-top: 140px;
	margin-left: 220px;
	border:2px solid black;
	background-color: blue;
	color:white;
	width:61px;
	height:20px;
}
#input0{
	margin-left: 70px;
}
#input1{
	margin-left: 50px;
}
#input2{
	margin-left: 23px;
}
#input3{
	margin-left: 80px;
}
	</style>

</head>
<body>
<form>
	<h2>Submitted information</h2>
	<label for="name">Your Name : </label>
  		<span id="input0"><?php  echo $_POST["name"]?></span>
  	<br>
	<label for="name">Dojo Location : </label>
		<span id="input1"><?php  echo $_POST["location"]?></span>
	<br>
	<label for="name">Favorite Language : </label>
		<span id="input2"><?php  echo  $_POST["language"]?></span>
	<br>
	<label for="name">Comment : </label>
		<span id="input3"><?php  echo  $_POST["comment"]?>
	<br>
	<input id="button" type="submit" value="Go Back">

</form>



</body>
</html>