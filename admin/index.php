<?php
	require_once '../index/database/database.php';
	require_once './function/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
	<title>Login</title>
</head>
<body>
	<div class="container-fluid"> 
		<div class="row-fluid"> 
			<div class="col-md-offset-4 col-md-4" id="box"> 
			   <h2 class="text-center ">Login</h2> 
			   <hr>
			   <div class="row text-center">
			   	<div class="col-md-12">
			   		<?php 
			   			if(isset($_POST['submit'])){
			   				$username = $_POST['username'];
			   				$password = $_POST['password'];
			   				if(empty($username)||empty($password)){
			   					echo  "<h3>Please input your Username, Password</h3>";
			   				}else{
			   					$password = md5($password);
			   					//echo $password;
			   					$sql = "SELECT * FROM admin WHERE name ='".$username."' AND password ='".$password."' ";
			   					$query = mysqli_query($con,$sql);
			   					$num = mysqli_num_rows($query);
			   					if($num==0) echo "Username or password is incorrect";
			   					else{
			   						$_SESSION['username'] = $username;
			   						redirect_to("admin.php");
			   					}
			   				}
			   			}
			   		?>
			   	</div>
			   </div> 
			   <form class="form-horizontal"  method="POST" > 
			    <fieldset> 
			     <div class="form-group"> 
			      <div class="col-md-12"> 
			       <div class="input-group"> 
			       		<span class="input-group-addon">
			       		<i class="glyphicon glyphicon-user"></i></span> 
			       		<input name="username" placeholder="Username" class="form-control" type="text"> 
			       </div> 
			      </div> 
			     </div> 
			     <div class="form-group"> 
			      <div class="col-md-12"> 
			       <div class="input-group"> 
			       		<span class="input-group-addon">
			       		<i class="glyphicon glyphicon-lock"></i></span> 
			       		<input name="password" placeholder="Password" class="form-control" type="password"> 
			       </div> 
			      </div> 
			     </div> 
			     <div class="form-group"> 
				    <div class="col-md-12"> 
				    	<button type="submit" class="btn btn-md btn-danger pull-right" name="submit">Login</button> 
				    </div> 
			     </div> 
			    </fieldset> 
			   </form> 
			</div> 
		</div>
	</div>
</body>
</html>