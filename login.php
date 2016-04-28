<!DOCTYPE html>
<html>
	<head>
		<title>Smart House</title>

		<style>

			/* background display */
			body
			{
				background-color: white;
				/*background-image: url("bin/background.jpg");
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
				background-size: 1200px 900px;*/
			}
			/* navigation menu begin */
			#nav
			{
   				position:fixed;
   				top:0;
  				left:0;
				right:0;
   				width:1350px;
   				height:60px;
   				background-color: orange;
			}

			#nav-wrapper
			{
				width: 1300px;
				margin: 0 auto;
				text-align: center;
				
			}

			#nav ul
			{
				list-style-type: none;
				padding: 0;
				margin: 0; 
			}

			#nav ul li
			{
				display: inline-block;
			}

			#nav ul li:hover
			{
				background-color: blue;
			}

			#nav ul li a,visited
			{
				color: #CCC;
				display: block;
				padding: 15px;
				text-decoration: none;
			}
			/* navigation menu end */
			

			/* main section */
			#section
			{
				
				width: 1080px;
				height: 1000px;
				background-color: blue;
				color: white;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 105px;
				padding: 60px;
				opacity: 0.7;
			}

			#section-wrapper
			{
				width: 900px;
				height 600px;
				background-color: black;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 10px;
				padding: 10px 20px;
				text-align: center;
			}

			/* bottom of page */
			#footer
			{
				width: 100%;
				height: 40px:
				clear: both;
				text-align: center;
				background-color: black;
				bottom: 0;
				
			}

			h1
			{
				font-weight: bold;
				font-family: Impact, Charcoal, sans-serif;
				font-size: 35px;
				text-align: center;
			}

			p1
			{
    				font-weight: bold;
				color: white;
			}

			p2 
			{ 
    				font-size: 23.5px;
    				font-weight: none;
				font-family: Impact, Charcoal, sans-serif;
				color: black
			}

			p3
			{
				font-size: 23.5px;
				font-family: Impact, Charcoal, sans-serif;
				color: white;
			}

		</style>
	</head>


	<body overflow-y: scroll; width: 1300px; >
 
		<div id="section" >

			<div id="section-wrapper">

				<h1>
					Log In to Your Home
				</h1>

				<form name="form1" method="post" action="checklogin.php">
					Username<br>
						<input type="text" id="myusername" name="myusername"><br>
					Password<br>
						<input type="password" name="mypassword" id="mypassword"><br>
                        <input type="submit" value="Login!" name="Submit"><br>
				</form>
			</div>

			<div id="section-wrapper">
				<h1>
					Sign Up Today
				</h1>

				<form name="form2" method="post" action="addlogin.php">
					First Name<br>
						<input type="text" name="myfirstname"><br>
					Last Name<br>
						<input type="text" name="mylastname"><br>
					Username<br>
						<input type="text" name="myusername"><br>
					Password<br>
						<input type="password" name="mypassword"><br>
					Password Again<br>
						<input type="password" name="mypassword2"><br>
                        <input type="submit" value="Sign Me Up!" name="Submit1"><br>
				</form>
			</div>

<?php

	}else{

?>

			<div id="section-wrapper">
		
				Welcome <?= $_Request("uname") ?> to Your Home!!

			</div>

<?php

	}

?>

		</div>

		<div id="nav">

			<div id="nav-wrapper">
				<ul>				
					<li><a><p2>Smart House</p2></a><br></li>
					<li><a href="index.html"><p1>Home</p1></a><br></li>
					<li><a href="login.html"><p1>Your Home</p1></a><br></li>
					<li><a href="store.html"><p1>Device Store</p1></a><br></li>
					<li><a href="about.html"><p1>About Us</p1></a><br></li>
					<li><a href="contact.html"><p1>Contact Us</p1></a><br></li>
					<li><a><p2>Giving Your House a Brain</p2></a><br></li>
				</ul>
			</div>

		</div>


		<div id="footer">
			<h></h>
			<p><font color="white">
			
			</font></p>
		</div>

	</body>

</html>