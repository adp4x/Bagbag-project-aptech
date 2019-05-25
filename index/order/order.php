
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
    <title>Order</title>
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
                        <a href="../gallery/gallery.php" class="nav-link">Gallery</a>
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

    <div class="container-fluid padding">
        <div class="row padding">
            <?php
                $connect = mysqli_connect('localhost','root','','bag');
                $ID = $_GET['id'];
                //echo $ID;
                $query1 ='SELECT * FROM bagbag WHERE bagID = '.$ID.'';
                //ECHO $query;
                $result = mysqli_query($connect, $query1);

                if($result):
                    if(mysqli_num_rows($result)>0):
                        while($bagbag = mysqli_fetch_assoc($result)):
                        //    print_r($bagbag);
            ?> 
            <div class="col-lg-6 col-md-12">
                <div style='border: 1px solid rgb(255,183,11); background-color: #f1f1f1; border-radius: 5px; padding: 16px 16px 8px 16px; margin-bottom: 20px;'>
                    <img src="<?php echo $bagbag['img']; ?>" class="img-responsive" style="width:500px;height:500px;"/>
                    <h4 class="text-info"><?php echo $bagbag['name'];?></h4>
                    <h6> <?php echo $bagbag['specification'];?> </h6>
                    <h4> <?php echo $bagbag['price']; ?></h4>
                </div>
            </div>
            <div class="col-lg-6">
                <form method='POST' action="" >
                    <hr class="light">
                    <h3>Customer Infomation</h3>
                    <hr class="light">
                    <label for="quantity">Quantity:</label>
                    <input type="text" name='quantity' value='1' class='form-control' />
                    <label for="name">Name:</label>
                    <input type="text" name='customerName' placeholder='Your name' class='form-control' />
                    <label for="phone">Phone number:</label>
                    <input type="text" name='phonenumber' placeholder='xxx-xxx-xxxx' class='form-control' />
                    <label for="address">address:</label>
                    <input type="text" name='address' placeholder='1 xxx street, xxx districk, city' class='form-control' />
                    <label for="email">Email:</label>
                    <input type="text" name='email' placeholder='abc@gmail.com' class='form-control' />
                    <input type="hidden" name="name" value="<?php echo $bagbag['name'];?>" />
                    <input type="hidden" name="price" value="<?php echo $bagbag['price'];?>" />
                    <input type="submit" name="pay" class="btn btn-info"  value="Pay now" style="margin-top:10px;"/>
                    <?php
               if(isset($_POST['pay'])){
                    $number = $_POST['quantity'];
                    $name  = $_POST['customerName'];
                    $price = $_POST['price'];
                    $sql2 = "INSERT INTO orders(number,name,price) VALUES(".$number.",'".$name."',".$price.")";
                    $query2 = mysqli_query($connect,$sql2);
                    if ($query2) {
                        echo '<script> location.replace("success.php"); </script>';
                    }
                    else {
                        echo '<script> location.replace("error.php"); </script>';
                    }

                }
            ?>
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
                    <img src="../../img/logo/logo.png" alt="">
                </div>
                <?php
                    $query ='SELECT * FROM contact limit 1';
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