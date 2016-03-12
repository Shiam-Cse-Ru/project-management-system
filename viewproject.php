
<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>


<!DOCTYPE html><html lang="en">  
<head>    
	<meta charset="utf-8">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<title>Project Management</title>    
	<!-- Bootstrap -->    
	<link href="css/bootstrap.min.css" rel="stylesheet">   
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->    
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->   
	<!--[if lt IE 9]>      
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]--> 
 <style >
	.padding{

		padding-top: 25px;
	}

</style>
 </head>  
 <?php require('config.php'); ?>	
 <body">		
	<div class="container">		

		<div class="row">	
		<div class="padding">
             <form method="post" action="search.php">
	        <input type="text" name="search_text" ">&nbsp
	        <button class="btn btn-primary">search</button>
	        </form><br>
	        </div>
			<div class="span12">					
				<table class="table table-hover table-striped table-bordered  table-condensed">						
					<thead>							
						<tr>								
						<th>Poject Name</th>								
						<th>Group Member Name</th>								
	                	<th>Using Languagae</th>									
						<th>Date</th>							
						</tr>						
					</thead>													
					<tbody>						
						<?php						
						$result = mysqli_query($con,"SELECT * FROM guestbook");						
						while($row = mysqli_fetch_array($result))						
						{ ?>							
						<tr>							
						<td><?php echo $row['name']; ?></td>								
						<td><?php echo $row['email']; ?></td>								
						<td><?php echo $row['comment']; ?></td>								
						<td><?php echo $row['datetime']; ?></td>							
						</tr>							
						<?php }							
						mysqli_close($con);						
						?>						
					</tbody>					
				</table>				
			</div>			
		</div>		
	</div>	
 </body>
 </html>