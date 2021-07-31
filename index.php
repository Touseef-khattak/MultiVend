<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    
    <link type="text/css" rel="stylesheet" href="style/style.css">
    
    
    
	<title> MultiVend eCommerce </title>
</head>

	<body>
        
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">
                        Welcome Guest
                    </a>
                    <a href="#">
                        Shopping cart Total Price: Rs 1000, Total Items: 2
                    </a>
                </div>
                
                <div class="col-md-6">
                    <ul class="menu">
                        <li><a href="costumer_register.php">Register</a></li>
                        <li><a href="costumer_account.php">My Account</a></li>
                        <li><a href="costumer_cart.php">Goto Cart</a></li>
                        <li><a href="costumer_login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="navbar navbar-default" id="navbar">
            
            <div class="container">
                <div class="navbar-header"><!--Navbar header start-->
                    <a class="navbar-brand home" href="index.php">
                       <img src="images/yourLogo.png" alt="logo" class="hidden-xs" width="90">       
                       <img src="images/smalllogo.png" alt="logo" class="visible-xs" width="90">
                    </a>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
                    
                </div><!--Navbar header end-->
                
                <div class="navbar-collapse collapse" id="navigation">
                    <div class="padding-nav">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="costumer/my_account.php">My Account</a>
                            </li>
                            <li>
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="contactus.php">Contact Us</a>
                            </li>
                            
                            
                        </ul>
                    </div><!--Padding nav end-->
                    
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 items in cart</span>
                    </a>
                    
                    <div class="navbar-collapse right">
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                    </div><!--Navbar collapse right end-->
                    
                    <div class="collapse clearfix" id="search">
                        <form class="navbar-form" method="get" action="result.php">
                            <div class="input-group">
                                <input type="text" name="user_query" placeholder="Search" class="form-control" required>
                                <span class="input-group-btn">
                                    <button type="submit" value="search" name="search" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    
                </div><!--navbar Collapse end-->
<!--
                 <div class="collapse clearfix" id="search">
                        <form class="navbar-form" method="get" action="result.php">
                            <div class="input-group">
                                <input type="text" name="user_query" placeholder="Search" class="form-control" required>
                                <button type="submit" value="search" name="search" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
-->
                
            </div>
            
            
        </div><!--navbar navbar-default end-->
        
        
        
        <div class="container" id="slider"><!--Slider Start-->
            <div class="col-md-12">
                <div class="carousel slide" id="mycarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="mycarousel" data-slide-to="0" class="action"></li>
                      <li data-target="mycarousel" data-slide-to="1"></li> 
                      <li data-target="mycarousel" data-slide-to="2"></li> 
                      <li data-target="mycarousel" data-slide-to="3"></li>  
                    </ol>
                    
                    <div class="carousel-inner"><!--carousel-inner Start-->
                      <?php
                        include('includes/db.php');
                        $slider_query = mysqli_query($con , "SELECT slider_image FROM slider LIMIT 1");
                        
                        while($img = mysqli_fetch_array($slider_query)){
                        
                        ?>
                        <div class="item active">
                            <img src="admin_area/slider_images/<?=$img['slider_image'];?>">
                        </div>
                        
                        <?php } 
                        
                        
                        $slider_query2 = mysqli_query($con , "SELECT slider_image FROM slider LIMIT 1,3");
                        
                        while($img2 = mysqli_fetch_array($slider_query2)){
                        
                        ?>
                        <div class="item">
                            <img src="admin_area/slider_images/<?=$img2['slider_image'];?>">
                        </div>
                        
                        <?php } ?>
                    </div><!--carousel-inner End-->
                    <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#mycarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                </div><!--carousel slide End-->
            </div><!--Col-md-12 End-->
        </div><!--Slider end-->
        
        <div class="advantage" id="advantage"><!--advatage Start-->
            <div class="container">
                <div class="col-sm-4"><!--col-sm-4 Start-->
                    <div class="box same-hieght">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST PRICES</a></h3>
                        <p>You can check on all other sites about the prices and then compare it with us.</p>
                    </div>
                </div><!--col-sm-4 End-->
                <div class="col-sm-4"><!--col-sm-4 Start-->
                    <div class="box same-hieght">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
                        <p>Feel free to inquire about quality.</p>
                    </div>
                </div><!--col-sm-4 End-->
                <div class="col-sm-4"><!--col-sm-4 Start-->
                    <div class="box same-hieght">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
                        <p>We make sure to provide best possible services to our customers.</p>
                    </div>
                </div><!--col-sm-4 End-->
            </div>
        </div><!--advatage End-->
        
        
        <div id="hot-week"><!--Week Hot Header Start-->
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>Latest this week</h2>
                    </div>
                </div>
            </div>
        </div><!--Week Hot Header End-->
        
        
        <div class="container" id="content">
            
            
            <div class="row">
                
                <?php
                
                $product_query = mysqli_query($con , "SELECT pro_id, pro_title,pro_image,pro_price FROM `products` ORDER BY pro_id DESC LIMIT 8");
                
                while($product = mysqli_fetch_array($product_query)){
                
                
                ?>
                
                
                
                <div class="col-sm-4 col-sm-6 single"><!--Single product Start-->
                    <div class="product">
                        <a href="details.php?pro_id=<?=$product['pro_id'];?>" class="img_link">
                            <img src="admin_area/product_images/<?=$product['pro_image'];?>" class="img-responsive" >
                        </a>
                        <div class="text">
                            <h3><a href="details.php?pro_id=<?=$product['pro_id'];?>"><?=$product['pro_title'];?></a></h3>
                            <p class="price"><?=$product['pro_price'];?></p>
                            <p class="buttons">    
                            <a href="details.php?pro_id=<?=$product['pro_id'];?>" class="btn btn-default">View details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to cart</i></a>    
                            </p>
                        </div>
                    </div>
                </div><!--Single product End-->
                
                <?php } ?>
                
            </div>

            
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--Footer Include Code Start      -->
        <?php include('includes/footer.php'); ?>
<!--Footer Include Code End        -->
        
        
 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>










