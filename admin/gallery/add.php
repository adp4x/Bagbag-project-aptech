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
	
	<title>Products</title>
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
							<li class=""><a href="../bag/bag.php">Bag</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class=""><a href="../order/order.php">Order</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="active"><a href="../feedback/feedback.php">FeedBack</a></li>
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
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Add</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form method="POST" enctype="multipart/form-data" class="was-validated">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" value="" class="form-control">
					</div>
					<div class="form-group">
						<label>IMG URL:</label>
						<input type="file" name="fileUpload" class="form-control">
					</div>
					<div class="form-group">
						<label>IMG URL2:</label>
						<input type="file" name="fileUpload2" class="form-control">
					</div>
					<div class="form-group">
						<label>IMG URL3:</label>
						<input type="file" name="fileUpload3" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
				<?php
					if (isset($_POST['submit'])) {
						$id = $_GET['galleryID'];
						//echo $id;
						$name = $_POST['name'];
						$file = $_FILES['fileUpload'];
						$file2 = $_FILES['fileUpload2'];
						$file3 = $_FILES['fileUpload3'];
						$new_filename = "a".bin2hex(random_bytes(10));
						$new_filename2 = "b".bin2hex(random_bytes(10));
						$new_filename3 = "c".bin2hex(random_bytes(10));
						//echo $new_filename;
						move_uploaded_file($file['tmp_name'],'../../img/news/'.$new_filename);
						move_uploaded_file($file2['tmp_name'],'../../img/news/'.$new_filename2);
						move_uploaded_file($file3['tmp_name'],'../../img/news/'.$new_filename3);
						$url = '/eProject/img/news/'.$new_filename;
						$url2 = '/eProject/img/news/'.$new_filename2;
						$url3 = '/eProject/img/news/'.$new_filename3;
						$sql = "INSERT INTO gallery(name,img,img2,img3) VALUES('".$name."','".$url."','".$url2."','".$url3."')"; 
						//echo $sql;
						$query = mysqli_query($con,$sql);
						if (!$query) {
							echo "Failed";
						}else{
							redirect_to("gallery.php");
						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
