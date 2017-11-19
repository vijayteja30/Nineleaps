<?php
 include 'Db.php';
  $name=$_POST['name'];
  $designation=$_POST['designation'];
  $manager=$_POST['manager'];
  if(isset($name) && isset($designation) && isset($manager))
  {
	  if(!empty($name) && !empty($designation) && !empty($manager))
	  {
		  $query="INSERT INTO `Employee`(`Id`, `Name`, `Designation`, `Manager`) VALUES ('','$name','$designation','$manager')";
		  $query_result=mysqli_query($conn,$query);
		  if($query_result)
			  echo '<div class="alert alert-Success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  You\'ve <strong>Successfully Inserted</strong>
</div>';
	  }
  }


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
	   <script type="text/javascript">
		$(function()
		{
			
			$("form").submit(function(e)
			{
				//e.preventDefault();
				var error="";
				if($("#Name").val()=="")
				{
					error+="<p>Please Enter Name!</p>";
					
				}
				if($("#Designation").val()=="")
				{
					error+="<p>Please Enter Designation!</p>";
					
				}
				if($("#Manager").val()=="")
				{
					error+="<p>Please Enter Manager!</p>";
					
				}
				if(error!="")
				{
					$("#error").html('<div class="container"> <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>'+error+'</strong></div></div>');
					return false;

				}
				else{
					return true;
				}
			});
		});
	   
	   
	   </script>
	   
	   
	   
	   <style>
		.container{
			margin-top:50px;
		}
	   a{
		   text-decoration:none;
	   }
	   .btn-lg{
		   margin-top:25px;
		   
	   }
	   a:hover{
			text-decoration:none;
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
		<div id="error"></div>
  <div class="container">
	<form method="post" action="EmployeeInsertion.php">
	  <div class="form-group">
		<label for="Name">Name</label>
		<input type="text" class="form-control" id="Name"  placeholder="Enter Employee name" name="name">
		
	  </div>
	  <div class="form-group">
		<label for="Designation">Designation</label>
		<input type="text" name="designation" class="form-control" id="Designation" placeholder="Give Employee Designation">
	  </div>
	  <div class="form-group">
		<label for="Manager">Manager</label>
		<select class="form-control" id="Manager" name="manager">
		  <option value="">-- Select Reporting Manager Name--</option>
		  <option value="Anchal">Anchal</option>
		  <option value='Anika'>Anika</option>
		  <option value='Ashlesha'>Ashlesha</option>
		  <option value='Birju'>Birju</option>
		  <option value="Devak">Devak </option>
		  <option value="Phani">Phani</option>
		  <option value="Hardik">Hardik </option>
		  <option value="Jaganmay">Jaganmay </option>
		  <option value="Lakhan">Lakhan </option>
		  <option value="Naamdev">Naamdev </option>
		  <option value="Pradosh">Pradosh </option>
		  <option value="Sachit">Sachit </option>
		  <option value="Udit">Udit </option>
		  <option value="">Yatiyasa </option>
		  <option value="Zena">Zena </option>
		  <option value="Aahna">Aahna </option>
		  <option value="Yashraj">Yashraj</option>
		  <option value="Veena">Veena </option>
		  <option value="Torsha">Torsha</option>
		  <option value="Ruchita">Ruchita</option>
		  <option value="Oindrila">Oindrila</option>
		  <option value="Madulika">Madulika </option>
		  <option value="Kimaya">Kimaya </option>
		  <option value="Indu">Indu </option>
		  <option value="Gayatri">Gayatri </option>
		  <option value="Ekaa">Ekaa </option>
		  <option value="Chitral">Chitral </option>
		</select>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
	
	<button type="button" class="btn btn-secondary btn-lg"><a href="table.php">Go Back!</a></button>
  </div>
  
  
  
  
		  
  </body>



</html>