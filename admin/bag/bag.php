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
							<li class="active"><a href="bag.php">Bag</a></li>
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
				<h2 class="text-center">Products</h2>
			</div>
			<div class="col-md-12">
				<table class="table text-left">
					<tr>
						<th>BagID</th>
						<th >Products IMG</th>
						<th>Name</th>
						<th>Specification</th>
						<th>Price</th>
						<th>CatogoryID</th>
						<th class="text-center">.</th>
						<th class="text-center">.</th>
					</tr>
					<a href="add.php"><button type='button' class='btn btn-info'>Add</button></a>
					<?php
						$num_re = 10;

						$sql="SELECT * FROM bagbag";
						$query=mysqli_query($con,$sql);
						$num=mysqli_num_rows($query);
						$num_page = round($num/$num_re,0, PHP_ROUND_HALF_UP);
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						$start = ($page-1)*$num_re;
						$sql2 = "SELECT * FROM bagbag LIMIT ".$start.", ".$num_re."";
						#echo $sql2;
						$query2 = mysqli_query($con,$sql2);
						$num2 = mysqli_num_rows($query2);
						if(!isset($_GET['page']) || filter_var($_GET['page'], FILTER_VALIDATE_INT)||$page > $num_page ||$page<1){
							//header('location: bag.php?page=1');
						}
						if ($num2>0) {
							while ($row = mysqli_fetch_assoc($query2)){
					?>	
					<tr>
						<td><?php echo $row['bagID']?></td>
						<td><?php echo '<img src='.$row['img'].' width="100px" height="100px"/>'?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['specification']?></td>
						<td><?php echo $row['price']?></td>
						<td><?php echo $row['categoryID']?></td>
						<td>
							<a href="edit.php?bagID=<?php echo $row['bagID'] ?>"><button type="button" class="btn btn-info">Edit</button></a>		
						</td>
						<td><a href="delete.php?bagID=<?php echo $row['bagID'] ?>" onclick="return confirmAction()"><button type="button" class="btn btn-danger">DELETE</button></a></td>
						
					</tr>
					<?php
							}
						};
						
					?>
				</table>
			</div>
			<div class="col-md-12 text-center">
				<?php
				for ($i=1; $i<=$num_page+1; $i++) { 

					echo "<a href='?page=".$i."'><button type='button' class='btn btn-info'>".$i."</button></a>";
					echo "&nbsp;";
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>
