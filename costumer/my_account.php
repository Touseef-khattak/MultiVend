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
                        <li><a href="../costumer_register.php">Register</a></li>
                        <li><a href="my_account.php">My Account</a></li>
                        <li><a href="../costumer_cart.php">Goto Cart</a></li>
                        <li><a href="../costumer_login.php">Login</a></li>
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
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../shop.php">Shop</a>
                            </li>
                            <li class="active">
                                <a href="my_account.php">My Account</a>
                            </li>
                            <li>
                                <a href="../cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="../about.php">About Us</a>
                            </li>
                            <li>
                                <a href="../services.php">Services</a>
                            </li>
                            <li>
                                <a href="../contactus.php">Contact Us</a>
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
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div><!--breadcrumb Section End-->
                
                <div class="row">
                    <div class="col-md-3">
                        <?php  include('includes/sidebar.php'); ?>
                    </div>
                    
                    <div class="col-md-9">
                        
                        <?php
                        
                        if(isset($_GET['my_order'])){
                            include('my_order.php');
                        }
                        
                        else if(isset($_GET['pay_offline'])){
                            include('pay_offline.php');
                        }
                        
                        else if(isset($_GET['edit_act'])){
                            include('edit_account.php');
                        }
                        
                        else if(isset($_GET['change_pass'])){
                            include('change_password.php');
                        }
                        
                        else if(isset($_GET['delete_act'])){
                            include('delete_account.php');
                        }
                        
                        
                        
                        
                        ?>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
                
                
            </div><!-- Container End--->
        </div><!-- Content End--->
        
        
                
<!--Footer Include Code Start      -->
        <?php include('includes/footer.php'); ?>
<!--Footer Include Code End        -->
        
        
 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>