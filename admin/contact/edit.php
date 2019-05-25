<?php
	require_once '../../index/database/database.php';
	require_once '../function/function.php';
	if (!isset($_SESSION['username'])) {
		redirect_to("../index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<title>Edit</title>
	<script type="text/javascript">
		function confirmAction(){
			return confirm("Are you sure?");
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar  navbar-default" >
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="../admin.php" class="navbar-brand "><p class="text-danger">Admin</p></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class=""><a href="../admin.php">Customers manager</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="bag.php">Bag</a></li>
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
							<li class="active"><a href="../contact/contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class=""><a href="../function/logout.php">Logout</a></li>
							<?php
								$username = $_SESSION['username'];
								echo '<li><a href="#">'.$username.'</a></li>';
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Edit</h2>
			</div>
		</div>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM contact WHERE id = '".$id."'";
			$query = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($query);
		?>
		<div class="row">
			<div class="col-md-12">
				<form method="POST" enctype="multipart/form-data" class="was-validated">
					<div class="form-group">
						<label>Address: </label>
						<input type="text" name="address" value="<?php echo $row['address']?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Phonenumber: : </label>
						<input type="text" name="phonenumber" value="<?php echo $row['phonenumber']?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Email: </label>
						<input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
				<?php
					if (isset($_POST['submit'])) {
						$address = $_POST['address'];
						$phonenumber = $_POST['phonenumber'];
						$email = $_POST['email'];
						$sql = "UPDATE contact SET address = '".$address."', phonenumber = '".$phonenumber."',email = '".$email."' WHERE id = '".$id."'";
						//echo $sql;
						$query = mysqli_query($con,$sql);
						if (!$query) {
							echo "Failed";
						}else{
							redirect_to("contact.php");
						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
