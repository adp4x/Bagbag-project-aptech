<?php
	require_once '../index/database/database.php';
	require_once './function/function.php';
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
						<a href="#" class="navbar-brand"><p class="text-danger">Admin</p></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Customers manager</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="./bag/bag.php">Bag</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="./order/order.php">Order</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="./feedback/feedback.php">FeedBack</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="./gallery/gallery.php">Gallery</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="./contact/contact.php">Contact</a></li>
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
		<div class="table row">
			<div class="col-md-12">
				<h2 class="text-center">Customers manager</h2>
			</div>
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>CustomerID</th>
						<th>Name</th>
						<th>Phone number</th>
						<th>Address</th>
						<th>Email</th>
						<th>.</th>
					</tr>
					<?php
						$sql="SELECT * FROM customers";
						$query=mysqli_query($con,$sql);
						$num=mysqli_num_rows($query);
						if ($num>0) {
							while ($row = mysqli_fetch_assoc($query)){
					?>

					<tr>
						<td><?php echo $row['customerID']?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['phonenumber']?></td>
						<td><?php echo $row['address']?></td>
						<td><?php echo $row['email']?></td>
						<td><a class="delete" href="./function/fix_customers.php?customerID=<?php echo $row['customerID'] ?>" ><i class="fas fa-pen"></i></a></td>
						<td><a class="delete" href="./function/delete_customers.php?customerID=<?php echo $row['customerID'] ?>" ><i class="fas fa-minus-circle" onclick="return confirmAction()"></i></a></td>

					</tr>
					<?php
							}
						}
						mysqli_free_result($query);
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
