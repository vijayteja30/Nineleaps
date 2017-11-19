<!--$query="SELECT * FROM `Employee` WHERE Manager is not null";
			  $query_result=@mysqli_query($conn,$query);
			  while($result=mysqli_fetch_assoc($query_result))
			  {
				 $Name=$result['Name'];
				  $query1="SELECT * FROM `Employee` WHERE Manager='$Name'";
				  $query_result1=@mysqli_query($conn,$query1); 
				  $rows=@mysqli_num_rows($query_result1);
				  $flag=true;
				  if($rows>=1)
				  {
					  
					  while($result1=mysqli_fetch_assoc($query_result1))
					  {
						if($flag)
						{
							$flag=false;
							echo '<li><a href="View.php?id='.$result['Id'].'">'.$result["Name"].'</a><small>'.$result["Designation"].'</small><ul><li><a href="View.php?id='.$result1['Id'].'">'.$result1["Name"].'</a><small>'.$result1["Designation"].'</small></li>';
						}
						else{
							echo '<li><a href="View.php?id='.$result1['Id'].'">'.$result1["Name"].'</a><small>'.$result1["Designation"].'</small></li>';
						}
					  }
					  echo "</ul>";
				  }
				  
			  }
			-->





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
	    .navbar{
			 height:80px;
			
			
		}
		.collapse{
			padding-left:250px;
		}
		.breadcrumb{
			margin-top:20px;
		}
		.container{
			margin-top:10px;
		}
	   small{
		   margin-left:5px; 
	   }
	   a{
		   text-decoration:none;
	   }
	   a:hover{
		   text-decoration:none;
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
		<div class="container"><ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		  <li class="breadcrumb-item active">List</li>
		</ol></div>
		<div class="container">
		  <h1>Employee Hierarchy</h1>
		  <hr><br>
		  <ul>
			<li> <a href="view.php?id=1">Anchal</a><small>CEO</small><ul>
			
			<?php
			  include 'Db.php';
			  
			  $q1="SELECT * FROM `Employee` WHERE Manager is not null";
			  $qr1=mysqli_query($conn,$q1);
			  while($r1=mysqli_fetch_assoc($qr1) )
			  {
				  
				  $Name1=$r1['Name'];
				  $q2="SELECT * FROM `Employee` WHERE Manager='$Name1'";
				  $qr2=mysqli_query($conn,$q2);
				  $row2=mysqli_num_rows($qr2);
				  if($row2>=1)
				  {
					
					echo '<li> <a href="view.php?id='.$r1["Id"].'">'.$r1["Name"].'</a><small>'.$r1["Designation"].'</small><ul>';
					while($r2=mysqli_fetch_assoc($qr2))
					{
						
						$Name2=$r2['Name'];
						$q3="SELECT * FROM `Employee` WHERE Manager='$Name2'";
						$qr3=mysqli_query($conn,$q3);
						$row3=mysqli_num_rows($qr3);
						if($row3>=1)
						{
							echo '<li> <a href="view.php?id='.$r2["Id"].'">'.$r2["Name"].'</a><small>'.$r2["Designation"].'</small><ul>';
							while($r3=mysqli_fetch_assoc($qr3) )
							{
								
								$Name3=$r3['Name'];
								$q4="SELECT * FROM `Employee` WHERE Manager='$Name3'";
								$qr4=mysqli_query($conn,$q4);
								$row4=mysqli_num_rows($qr4);
								if($row4>=1)
								{
									echo '<li><a href="view.php?id='.$r3["Id"].'">'.$r3["Name"].'</a><small>'.$r3["Designation"].'</small><ul>';
									while($r4=mysqli_fetch_assoc($qr4))
									{
										
										echo '<li><a href="view.php?id='.$r4["Id"].'">'.$r4["Name"].'</a><small>'.$r4["Designation"].'</small></li>';
									}
									echo "</ul></li>";
									
								}
								else
								{
									echo '<li><a href="view.php?id='.$r3["Id"].'">'.$r3["Name"].'</a><small>'.$r3["Designation"].'</small></li>'; 
								}
							}
							echo "</ul></li>";
							
						}
						else
						{
							echo '<li><a href="view.php?id='.$r2["Id"].'">'.$r2["Name"].'</a><small>'.$r2["Designation"].'</small></li>';
						}
					}
					echo "</ul></li>";
					
				  }
				  else
				  {
					echo '<li> <a href="view.php?id='.$r1["Id"].'">'.$r1["Name"].'</a><small>'.$r1["Designation"].'</small></li>';
					
				  }
				  
			  }
			  
			
			?>
			
			
			
			</ul>
			</li>
		  
		  
		  
		  </ul>
		
		</div>
		
		
		
  </body>



</html>