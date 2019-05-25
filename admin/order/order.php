<?php
	require_once '../../index/database/database.php';
	require_once '../function/function.php';
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
							<li class=""><a href="../admin.php">Customers manager</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../bag/bag.php">Bag</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="active"><a href="../order/order.php">Order</a></li>
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
		<div class="table row">
			<div class="col-md-12">
				<h2 class="text-center">Order</h2>
			</div>
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>OrderID</th>
						<th>BagID</th>
						<th>Number</th>
						<th>Order date</th>
						<th>Name</th>
						<th>Price</th>
						<th>Confirm</th>
						<th>.</th>
					</tr>
					<?php
						$sql="SELECT * FROM orders ORDER BY orderdate desc";
						$query=mysqli_query($con,$sql);
						$num=mysqli_num_rows($query);
						if ($num>0) {
							while ($row = mysqli_fetch_assoc($query)){
					?>

					<tr>	
						<td><?php echo $row['orderID']?></td>
						<td><?php echo $row['bagID']?></td>
						<td><?php echo $row['number']?></td>
						<td><?php echo $row['orderdate']?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['price']?></td>
						<td><?php echo $row['confirm']?></td>
						<td><a href="change.php?id=<?php echo $row['orderID'] ?>"><button type="button" class="btn btn-info">Change</button></a></td>
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
