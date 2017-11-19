<?php
 include 'Db.php';
 $query="SELECT `Id`, `Name`, `Designation`, `Manager` FROM `Employee`";
 $query_result=mysqli_query($conn,$query);
 $rows=mysqli_num_rows($query_result);






?>




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
	   <script type="text/javascript" src="jquery-3.2.1.slim.min.js"></script>
	   <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	   <style>
		.container{
			margin-top:50px;
		}
		a{
			text-decoration:none;
		}
		a:hover{
			text-decoration:none;
		}
	   #addnew{
		   
		   postion:relative;
		   margin-left:800px;
		   
	   }
	   .navbar{
			 height:80px;
			
			
		}
		.collapse{
			padding-left:250px;
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
	<div class="container" id="addmenu">
	
	<h1>ALL EMPLOYEES</h1>
	<button id='addnew' type="button" class="btn btn-secondary"><a href="EmployeeInsertion.php">Add New</a></button>
	
	</div>
  
  <div class="container">
  
	<table class="table table-striped">
		  <thead>
			<tr>
			  <th>Id</th>
			  <th>Name</th>
			  <th>Designation</th>
			  <th>Manager</th>
			  <th>View</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
			 
			  while($result=mysqli_fetch_array($query_result))
			  {
				  
				  $id=$result['Id'];
				  $name=$result['Name'];
				  $designation=$result['Designation'];
				  $manager=$result['Manager'];
				  echo '<tr><td>'.$id.'</td>';
				  echo '<td>'.$name.'</td>';
				  echo '<td>'.$designation.'</td>';
				  echo '<td>'.$manager.'</td><td><button type="button" class="btn btn-success"><a href="view.php?id='.$id.'"><span style="color:red">View</span></a></button></tr>';
				  
				  
			  }
			
			?>
		  </tbody>
	</table>
	</div>	  
  </body>



</html>