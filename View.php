<html>
  <head>
	   
	   <title>Nineleaps Project</title>
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
	   <script type="text/javascript" src="jquery-min.js"></script>
	   <script type="text/javascript" src="tether.min.js"></script>
	   <link rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
	   <link rel="stylesheet" href="jqueryui/jquery-ui.css">
	   <link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
	   <script src="jquery-3.1.1.js"> </script>
	   <script src="jquery-3.1.1.min.js"> </script>
	   <script src="jqueryui/jquery-ui.js"> </script>
  
	   <script type="text/javascript" src="jquery-3.2.1.slim.min.js"></script>
	   <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	   <script type="text/javascript">
	   
				
	   
	   </script>
	   <style>
	    .navbar{
			 height:80px;
			
			
		}
		.collapse{
			padding-left:250px;
		}
		.jumbotron{
			margin-top:50px;
			height:450px;
		}
	   .bold{
		   font-size:25px;
	   }
	   .details{
		   font-size:35px;
		   margin-left:15px;
		   font-weight:initial;
	   }
	   a {
		   text-decoration:none;
	   }
	   a:hover{
		   text-decoration:none;
	   }
	   #Edit{
		   width:400px;
		   float:right;
		   background-color:#38EC07;
	   }
	   
	   
	   </style>
  </head>
  <body>
  
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded " style="background-color: #07ECE1;">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <h1 style="color:#30DE10;">Nineleaps</h1>
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="table.php">Table</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="List.php">TableList</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Tree.php">Tree</a>
			  </li>
			</ul>
			
		  </div>
		</nav>
	
		<?php
		  include 'Db.php';
		  $id=$_GET['id'];
		  session_start();
		  $_SESSION['id']=$id;
		  $query="SELECT * FROM `Employee` WHERE Id='$id'";
		  $query_result=mysqli_query($conn,$query);
		  if($query_result)
		  {
			  while($result=mysqli_fetch_assoc($query_result))
			  {
				  $name=$result['Name'];
				  $Designation=$result['Designation'];
				  $Manager=$result['Manager'];
				  echo '<div class="jumbotron jumbotron-fluid">
						  <div class="container">
							<h3 class="display-3">Employee Details</h3><button type="button"  id="Edit" class="btn btn-secondary btn-lg"><a href="Edit.php?id='.$id.'">Edit</a></button><br><br><br>
							<p><span class="bold">Employee Name:</span><span class="details">'.$name.'</span></p><p><span class="bold">Designation:</span><span class="details">'.$Designation.'</span></p><p><span class="bold">Manager:</span><span class="details">'.$Manager.'</span></p>
						  </div>
						</div>';
			  }
		  }
		?>
	  
	  
	

		
		
		
		
		
  </body>



</html>