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
	
	<title>Gallery</title>
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
						<a href="../admin.php" class="navbar-brand" ><p class="text-danger">Admin</p></a>
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
							<li class="active"><a href="../gallery/gallery.php">Gallery</a></li>
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
		<dir class="table row">
			<dir class="col-md-12 text-center">
				<h2>Gallery</h2>
			</dir>
			<div class="col-md-12">
				<table class="table ">
					<tr><a href="add.php"><button type="button" class="btn btn-info">Add</button></a></tr>
					<tr>
						<tr>
							<th>GalleryID</th>
							<th>Name</th>
							<th>IMGURL</th>
							<th>IMGURL</th>
							<th>IMGURL</th>
							<th>.</th>
							<th>.</th>
						</tr>
					</tr>
					<?php
						$sql = "SELECT * FROM gallery";
						$query = mysqli_query($con,$sql);
						$num = mysqli_num_rows($query);
						if ($num>0) {
							while ($rows = mysqli_fetch_array($query)) {
							
					?>
					<tr>
						<td><?php echo $rows['galleryID']?></td>
						<td><?php echo $rows['name']?></td>
						<td><?php echo $rows['img']?></td>
						<td><?php echo $rows['img2']?></td>
						<td><?php echo $rows['img3']?></td>
						<td>
							<a href="./edit.php?galleryID=<?php echo $rows['galleryID'] ?>"><button type="button" class="btn btn-info">Edit</button></a>
						</td>
						<td>
							<a href="./delete.php?galleryID=<?php echo $rows['galleryID'] ?>" onclick="return confirmAction()"><button type="button" class="btn btn-danger">Delete</button></a>
						</td>
					</tr>
					<?php
						}
							};
					?>
				</table>
			</div>
		</dir>
	</div>
</body>
</html>
