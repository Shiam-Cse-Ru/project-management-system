<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>


<!-- <?php
echo $_SESSION['email'];
?>
  -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Management</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/send_data.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <img src="image/n.gif" width="100">
  <marquee><h3>Welcome 
<?php
echo $_SESSION['email'];
?>
 </h3></marquee>
    <div class="container">
		<div class="row">
		<div class="span12">
					<h1 style="text-align: center;"><a href="logout.php">Logout here</a> </h1>		

			<div  class="cover">

				<h3 style="color:white">Enter your project here</h3>	
				<div id="result"></div>
				<div id="guestform"> 
					<p class="contact"><label for="name">Project &nbsp Name</label></p> 
					<input id="name" name="name" placeholder="project name" type="text"> 
					 
					<p class="contact"><label for="email">Group &nbsp Member &nbsp Name</label></p> 
					<input id="email" name="email" placeholder="Group Member Name" type="text"> 
			
					<p class="contact"><label for="comment">Using &nbsp Language</label></p> 
					<input name="comment" id="comment" tabindex="4" placeholder="Using Language"></input> <br>
					
					<input name="submit" id="submit" tabindex="5" value="Save" type="submit" style="width:200px;">
				</div> 
				<a href="viewproject.php" target="_blank" class="btn btn-success btn-large">View Project</a>
			</div>   
		</div>
		</div>
	</div>
	<br>
	<center><pre style="background-color:cyan">Copyright @ shiam</pre></center>
  </body>
</html>
