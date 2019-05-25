<?php
	require_once '../../index/database/database.php';
	require_once 'function.php';
	if (!isset($_SESSION['username'])) {
		redirect_to("index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Admin</title>
	<script type="text/javascript">
		function confirmAction(){
			return confirm("Are you sure?");
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default" >
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="../admin.php" class="navbar-brand" style="color: red">Admin</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Customers manager</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../bag/bag.php">Bag</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../order/order.php">Order</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../feedback/feedback.php">FeedBack</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../gallery/gallery.php">Gallery</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../contact/contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class=""><a href="./function/logout.php">Logout</a></li>
							<?php
								$username = $_SESSION['username'];
								echo '<li><a href="#">'.$username.'</a></li>';
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php
			$id = $_GET['customersID'];
			//echo "<h2>".$id."</h2>";
			$sql = "SELECT * FROM customers WHERE customersID = ".$id."";
			$query = mysqli_query($con,$sql);
			$num = mysqli_num_rows($query);
			$row = mysqli_fetch_array($query);
			?>
		<div class=" row">
			<div class="col-md-12">
				<h2 class="text-center">Change information</h2>
			</div>
			<?php
				//$id = $_GET['customersID'];
				//echo "<h2>".$id."</h2>";

				if (isset($_POST['submit'])) {
					$phonenumber = $_POST['phonenumber'];
					$address = $_POST['address'];
					$email = $_POST['email'];
					$name = $_POST['name'];
					//echo $email;
					$sql2 = "UPDATE customers SET phonenumber = '".$phonenumber."', address='".$address."',email = '".$email."',name = '".$name."'  where customersID = ".$id." ";


					$result = mysqli_query($con,$sql2);
					if ($result) {
						redirect_to("../admin.php");
					}else{
						echo "FAILED";
					}
				}
			?>
			<div class="row">
				<div class="col-md-12">
					<form action="" method="POST" class="was-validated">
					    <div class="form-group">
					      <label for="uname">Phone number:</label>
					      <input type="text" class="form-control"  placeholder="phonenumber" value="<?php echo $row['phonenumber'] ?>" name="phonenumber" required>
					    </div>
					    <div class="form-group">
					      <label for="pwd">Address:</label>
					      <input type="text" class="form-control"  placeholder="address" value="<?php echo $row['address'] ?>" name="address" required>
					    </div>
					     <div class="form-group">
					      <label for="pwd">Email:</label>
					      <input type="Email" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>" name="email" required>
					    </div>
					     <div class="form-group">
					      <label for="pwd">Name:</label>
					      <input type="text" class="form-control" placeholder="Name" value="<?php echo $row['name'] ?>" name="name" required>
					    </div>
					    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					  </form>
					  
				</div>
			</div>
		</div>
	</div>
</body>
</html>
