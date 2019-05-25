<?php
    require_once './../database/database.php';
?>


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
    <link rel="shortcut icon" href="../../img/logo/logoBBtop.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./style.css">
    <title>Bagbag</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../../img/logo/logoBB.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../product.php" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="../feedback/feedback.php" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contact_us/contact.php" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-4"></div>
        <?php
            $sql1 = "SELECT * FROM gallery";
            $query1 = mysqli_query($con,$sql1);
            $num1 = mysqli_num_rows($query1);
            if($num1>0){
                while ($row1 = mysqli_fetch_assoc($query1)) {
                    echo '<div class="col-md-12"><h3>'.$row1['name'].'</h3></div>';
                    echo '<div class="col-md-4"><img src='.$row1['img'].' class="img"/></div>';
                    echo '<div class="col-md-4"><img src='.$row1['img2'].'  class="img"/></div>';
                    echo '<div class="col-md-4"><img src='.$row1['img3'].' class="img"/></div>';
                }
            }

        ?>
        </div>
    </div>
    <footer style="background-color: rgb(141,207,244); color: #1e1e1e; margin-top: 70px;">

        <div class="container-fluid padding">
            <div class="row">
                <div class="col-md-3">
                    <img src="../../img/logo/logo.png" alt="">
                </div>
                <?php
                    $query ='SELECT * FROM contact limit 1';
                    $result = mysqli_query($con, $query);

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