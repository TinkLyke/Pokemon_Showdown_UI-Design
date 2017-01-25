
<!-- This is the log in page -->

<html>
<!-- title -->
<head>
	<title>Pokemon ShowDown - Proof of Concept Demonstration
	</title>

<!--Add Styple sheets and script-->	
	<link rel="stylesheet" href="style/FirstPage.css?ver=<?php echo filemtime('style/FirstPage.css');?>">
	<script src="script/jquery-3.0.0.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>

<body>


</script>

<!-- header bar -->

<div class="header">
	<img class="Title-Image" src="style/Title_Icon.png"> 
</div>


<!-- login page -->
<div class="mainpanel">
	<div class="Login">
	<b>Username</b>


<!-- username input field -->

<form method="POST" action="index2.php">
	<input type="text" name="username" class="Username" id="UN" placeholder="Enter the username">

	<input type="submit" class="Battle-Button button" value="Battle!">

</form>


	</div >

</div>


<!-- Subpanel -->
<div class="subpanel">
	<a href="" class="button TB-Button">Team builder</a>
	<a href="" class="button LADDER-Button">Ladder</a>

	
<!-- Database display button -->
<form method="POST" action="OutputDB.php">
	<input type="submit" class="DB-Button button" value="Database Information">
</form>
</div>

<div class="Tutorial">
<iframe width="600" height="480" src="https://www.youtube.com/embed/h4EjKsMRRxI">
</iframe>
</div>


</body>