
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/logo/logoBBtop.png">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bagbag</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../img/logo/logoBB.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a href="./index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./product.php" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="./gallery/gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="./feedback/feedback.php" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact_us/contact.php" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>		
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/header/1.png">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/2.jfif">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/3.jfif">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/4.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <hr>
            <div class="col-12">
                <h1 class="display-4">For MEN</h1>
            </div>
            <hr>
        </div>
    </div>
	<div class="container-fluid padding">
		<div class="row padding" style="margin-bottom:15px;">
            <div class="col-2">
                <form action="men.php?orderBy=asc" method="post">
                    <input type="submit" name="prup" class="btn btn-info form-control" value="Sort by Price UP" style="margin:3px;"/>
                </form>
            </div>
            <div class="col-2">
                <form action="men.php?orderBy=desc" method="post">
                    <input type="submit" name="prdown" class="btn btn-info form-control" value="Sort by Price DOWN" style="margin:3px;"/>
                </form>
            </div>
		</div>
        <div class="row padding">
            <?php
                $connect = mysqli_connect('localhost','root','','bag');
				$orderBy = $_GET['orderBy'];
                $query ='SELECT * FROM bagbag WHERE categoryID IN ("8", "9", "10") order by price '.$orderBy.';';
                $result = mysqli_query($connect, $query);
				 
                if($result):
                    if(mysqli_num_rows($result)>0):
                        while($bagbag = mysqli_fetch_assoc($result)):
                        //    print_r($bagbag);
            ?> 
            <div class="col-sm-6 col-md-4 col-lg-3">
                <form method="post" action="order/order.php?action=add&id=<?php echo $bagbag['bagID']; ?>">
                    <div style='border: 1px solid rgb(255,183,11); background-color: #f1f1f1; border-radius: 5px; padding: 16px 16px 8px 16px; margin-bottom: 20px;'>
                        <img src="<?php echo $bagbag['img']; ?>" class="img-responsive" style="width:240px;height:240px;"/>
                        <h4 class="text-info"><?php echo $bagbag['name']?></h4>
                        <h6> <?php echo substr($bagbag['specification'], 0, 150);?> ... </h6>
                        <h4>$ <?php echo $bagbag['price']?></h4>
                        <input type="hidden" name="name" value="<?php echo $bagbag['name']?>" />
                        <input type="hidden" name="price" value="<?php echo $bagbag['price']?>" />
                        <input type="submit" name="Buy now" class="btn btn-info" value="Buy now" style="margin:3px;"/>
                    </div>
                </form>
            </div>
            <?php
                        endwhile;
                    endif;
                endif;   
            ?>
        </div>
    </div>
    <footer style="background-color: rgb(141,207,244); color: #1e1e1e;">
        <div class="container-fluid padding">
            <div class="row">
                <div class="col-md-3">
                    <img src="../img/logo/logo.png" alt="">
                </div>
                <?php
                    $connect = mysqli_connect('localhost','root','','test');
                    $query ='SELECT * FROM contact';
                    $result = mysqli_query($connect, $query);

                    if($result):
                        if(mysqli_num_rows($result)>0):
                            while($contact = mysqli_fetch_assoc($result)):
                            //    print_r($bagbag);
                ?> 
                <div class="col-md-3">
                    <hr class="light">
                    <h5>Info</h5>
                    <hr class="light">
                    <p>Hotline: <?php echo $contact['phonenumber']?> </p>
                    <p>Email: <?php echo $contact['email']?></p>
                    <p>Address: <?php echo $contact['address']?></p>
                </div>
                <?php
                            endwhile;
                        endif;
                    endif;   
                ?>
                <div class="col-md-3">
                    <hr class="light">
                    <h5>Working hours</h5>
                    <hr class="light">
                    <p>Monday-Friday: 8am - 6pm</p>
                    <p>Weekend: 8am - 5pm</p>
                </div>
                <div class="col-md-3 text-center">
                    <hr class="light">
                    <h5>About Us</h5>
                    <hr class="light">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>