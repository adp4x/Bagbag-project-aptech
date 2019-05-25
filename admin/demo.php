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
	<title>Demo đổ ảnh</title>
</head>
<body>
	<div class="container-fluid">
		<div class="table row">
			<div class="col-md-12">
				<h2 class="text-center">Customers manager</h2>
			</div>
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>BagID</th>
						<th>Name</th>
						<th>Specification</th>
						<th>Price</th>
						<th>categoryID</th>
						<th>img</th>
					</tr>
					<?php
						$sql="SELECT * FROM bagbag";
						$query=mysqli_query($con,$sql);
						$num=mysqli_num_rows($query);
						if ($num>0) {
							while ($row = mysqli_fetch_assoc($query)){
					?>	

					<tr>
						<td><?php echo $row['bagID']?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['specification']?></td>
						<td><?php echo $row['price']?></td>
						<td><?php echo $row['categoryID']?></td>
						<td><?php echo '<img src='.$row['img'].' />'?></td>
					</tr>
					<?php
							}
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>