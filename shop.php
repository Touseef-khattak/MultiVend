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
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
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
        
        
        
        
        <div id="content">
            <div class="container">
                <div class="col-md-12"><!--breadcrumb Section Start-->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div><!--breadcrumb Section End-->
                
                <div class="col-md-3">
                    <?php 
                
                        include('includes/sidebar.php');

                    ?>
                </div><!--col-md-3 Section End-->
                
                
                <div class="col-md-9"><!--col-md-9 Section Start-->
                    <div class="box-details box">
                        
                                    <?php

                                    if(isset($_GET['cat_id'])){
                                        $cat_id = $_GET['cat_id'];
                                        include("includes/db.php");
                                        $category = mysqli_query( $con , "SELECT pro_cat_id, pro_cat_title FROM `product_categories` WHERE pro_cat_id='$cat_id'");
                                        $catArr = mysqli_fetch_array($category);

                                        ?>
                                        <h1><?=$catArr['pro_cat_title']; ?></h1>


                    <?php        
                                    $per_page = 6;
                                    if (isset($_GET['pageno'])) {
                                        $pageno = $_GET['pageno'];
                                    } else {
                                        $pageno = 1;
                                    }
                                    $start = ($pageno - 1) * $per_page;    
                                        
                                        
                                    $product_query = mysqli_query($con , "SELECT pro_id, pro_title,pro_image,pro_price FROM `products` WHERE pro_cat_id='$cat_id' ORDER BY pro_id DESC LIMIT $start , $per_page");
                                    
                                    }
                                    else if(isset($_GET['cat'])){
                                        $cat = $_GET['cat'];
                                        include("includes/db.php");
                                        $category = mysqli_query( $con , "SELECT cat_id, cat_title FROM `categories` WHERE cat_id='$cat'");
                                        $catArr = mysqli_fetch_array($category);

                                        ?>
                                        <h1><?=$catArr['cat_title']; ?></h1>


                    <?php        
                                        
                                        $per_page = 6;
                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        $start = ($pageno - 1) * $per_page;
                                        
                                        
                                        $product_query = mysqli_query($con , "SELECT pro_id, pro_title,pro_image,pro_price FROM `products` WHERE cat_id='$cat' ORDER BY pro_id DESC LIMIT $start , $per_page");
                                    }
                                    else{
                    ?>
                                        <h1>Shop</h1>
                                        <p>MultiVend.pk is one of the largest online female retailers of Pakistan providing customers better than market prices and also connecting people of Pakistan with the world of Online Shopping.</p>

                    <?php     
                                        $per_page = 6;
                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        $start = ($pageno - 1) * $per_page;
                                        
                                        
                                        $product_query = mysqli_query($con , "SELECT pro_id, pro_title,pro_image,pro_price FROM `products` ORDER BY pro_id DESC LIMIT $start , $per_page");
                                    }


                    ?>
    
                    </div><!--Heading box End-->
                  
                    <?php
                    while($product = mysqli_fetch_array($product_query)){
                    ?>
                    
                    <!--Row Start-->
                      <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 single product Section Start-->
                          <div class="product shop-product">
                              <a href="details.php">
                                  <img src="admin_area/product_images/<?=$product['pro_image'];?>" class="img-responsive" width="200">
                                  <div class="text">
                                      <h3><a href="details.php?pro_id=<?=$product['pro_id'];?>"><?=$product['pro_title'];?></a>
                                      </h3>
                                      <p class="price"><?=$product['pro_price'];?></p>
                                      <p class="buttons">
                                          <a href="details.php?pro_id=<?=$product['pro_id'];?>" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                          <i class="fa fa-shopping-cart"> Add to cart</i></a>
                                      </p>
                                  </div>
                              </a>
                          </div>
                      </div><!--col-md-4 single product Section End-->
                        
                    <?php  } ?>    
                     
                    <div style="clear:both;"></div>
                  
                    <center>
                        <ul class="pagination">
                            <?php
                            $total_pages_sql = "SELECT COUNT(*) FROM `products`";
                            $result = mysqli_query($con,$total_pages_sql);
                            $total_rows = mysqli_fetch_array($result)[0];
                            $total_pages = ceil($total_rows / $per_page);
                            
                            
                            ?>
                            <li><a href="?pageno=1">First</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                            
                            
                           
                        </ul>
                    </center>
                    
                </div><!--col-md-9 Section End-->
                
            </div><!--Content-->
        </div>
        
        
        
        
        
        
        
        
<!--Footer Include Code Start      -->
        <?php include('includes/footer.php');mysqli_close($con); ?>
<!--Footer Include Code End        -->
        
        
 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>