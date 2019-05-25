<?php
	require_once '../index/database/database.php';
	require_once './function/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
	<title>Register</title>
</head>
<body>
	<div class="container-fluid"> 
		<div class="row-fluid"> 
			<div class="col-md-offset-4 col-md-4" id="box"> 
			   <h2 class="text-center">Admin register</h2>
			   <hr>
			   <div class="row text-center">
			   	<div class="col-md-12">
			   		<?php
			   			if(isset($_POST['submit'])){
				   			$username = $_POST['username'];
				   			$password = $_POST['password'];
				   			$password_cf = $_POST['password_cf'];
				   			if(strlen($password)<6) echo "Your password must be more than 6 character";
				   			if(empty($username)||empty($password)||empty($password_cf)){
				   				echo "Please enter full information";
				   			}elseif (strcmp($password, $password_cf)!=0) {
				   				echo "Password must be the same as password confirm";
				   			}else{
				   				$password = md5($password);
				   				$sql = "INSERT INTO admin(name,password) VALUES ('".$username."','".$password."')";
				   				$query = mysqli_query($con, $sql);
				   				if($query) echo "Completed";
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
			       <div class="input-group"> 
			       		<span class="input-group-addon">
			       		<i class="fas fa-clipboard-check"></i></span> 
			       		<input name="password_cf" placeholder="Confirm password" class="form-control" type="password"> 
			       </div> 
			      </div> 
			     </div> 
			     <div class="form-group"> 
				    <div class="col-md-12"> 
				    	<button type="submit" class="btn btn-md btn-danger pull-right" name="submit">Submit</button> 
				    </div> 
			     </div> 
			    </fieldset> 
			   </form> 
			</div> 
		</div>
	</div>
</body>
</html>