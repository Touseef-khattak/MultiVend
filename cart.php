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
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="costumer/my_account.php">My Account</a>
                            </li>
                            <li class="active">
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
                        <li><a href="#">Shopping Cart</a></li>
                    </ul>
                </div><!--breadcrumb Section End-->


                <div class="row">

                    <div class="col-md-9" id="cart">
                        <div class="box-details box">
                            <form action="cart.php" method="post" enctype="multipart/form-data">
                                <h1>Shooping Cart</h1>
                                <p class="text-muted">Currently You have 3 item(s) in your cart</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th> 
                                                <th>Quantity</th> 
                                                <th>Unit Price</th> 
                                                <th>Size</th> 
                                                <th colspan="1">Remove</th> 
                                                <th colspan="1">Sub Total</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="admin_area/product_images/designer_shawl_%20(2).jpg" width="60">
                                                </td>
                                                <td>
                                                    Designer Shawl by RSheen Designer Shawl by RSheen
                                                </td>
                                                <td>2</td>
                                                <td>Rs 3000</td>
                                                <td>Medium</td>
                                                <td><input type="checkbox" name="remove[]"></td>
                                                <td>Rs 6000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="admin_area/product_images/DSLR_3.jpg" width="60">
                                                </td>
                                                <td>
                                                    Nikon DSLR 60D
                                                </td>
                                                <td>1</td>
                                                <td>Rs 50000</td>
                                                <td>N/A</td>
                                                <td><input type="checkbox" name="remove[]"></td>
                                                <td>Rs 50000</td>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="1">Rs 56000</th>
                                            </tr>
                                        </tfoot>

                                    </table>

                                </div><!--Table responxice End-->
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="index.php" class="btn btn-default">
                                            <i class="fa fa-chevron-left"></i> Continue Shopping
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default" type="submit" name="update" value="update_cart"> 
                                            <i class="fa fa-refresh"></i>Update Cart
                                        </button>
                                        <a href="#" class="btn btn-primary">
                                            Proceed To Checkout <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div><!--box-details box End-->


                        <div id="row"><!--row same-height-row Start-->
                            <div class="col-md-12 box-details box">
                                <div class="same-height-row">
                                    <h2 class="text-center">You May Also Like These Products</h2>
                                </div>
                            </div><!--col-md-3 col-sm-6 End-->
                        </div> 

                        <div class="row" id="product-suggestion">
                            <div class="col-md-12">
                                <div class="same-height-row  headline">
                                    <div class="center-responsive col-md-3">
                                        <div class="product same-height">
                                            <a href="#">
                                                <img src="admin_area/product_images/sm-j610f_008_dynamic_gray.jpg" class="img-responsive">
                                            </a>
                                            <div class="text">
                                                <h3><a href="details.php">Product Name</a></h3>
                                                <p class="price">Rs 20000</p>
                                            </div>
                                        </div>
                                    </div><!--col-md-3 col-sm-6 End-->

                                    <div class="center-responsive col-md-3">
                                        <div class="product same-height">
                                            <a href="#">
                                                <img src="admin_area/product_images/galaxyj7.jpg" class="img-responsive">
                                            </a>
                                            <div class="text">
                                                <h3><a href="details.php">Product Name</a></h3>
                                                <p class="price">Rs 20000</p>
                                            </div>
                                        </div>
                                    </div><!--col-md-3 col-sm-6 End-->

                                    <div class="center-responsive col-md-3">
                                        <div class="product same-height">
                                            <a href="#">
                                                <img src="admin_area/product_images/0003114_aj-463_1000.jpeg" class="img-responsive">
                                            </a>
                                            <div class="text">
                                                <h3><a href="details.php">Product Name</a></h3>
                                                <p class="price">Rs 20000</p>
                                            </div>
                                        </div>
                                    </div><!--col-md-3 col-sm-6 End-->

                                    <div class="center-responsive col-md-3">
                                        <div class="product same-height">
                                            <a href="#">
                                                <img src="admin_area/product_images/watch_.jpg" class="img-responsive">
                                            </a>
                                            <div class="text">
                                                <h3><a href="details.php">Product Name</a></h3>
                                                <p class="price">Rs 20000</p>
                                            </div>
                                        </div>
                                    </div><!--col-md-3 col-sm-6 End-->

                                </div>
                            </div>

                        </div><!--row same-height-row-->

                    </div><!--col-md-9 Closing-->
                    
                    <div class="col-md-3"><!--col-md-3 shopping summery start-->
                        
                        <div class="box box-details" id="order-summary">
                            <div class="box-header">
                                <h3>Order Summary</h3>
                            </div>
                            
                            <p class="text-muted">
                                Shipping and additionl costs are calculated based on the value you have entered
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order Subtotal</td>
                                            <th>PKR 4000</th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <td>PKR 0</td>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td>PKR 0</td>
                                        </tr>
                                        <tr class="total"> 
                                            <td>Total</td>
                                            <th>PKR 4000</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        
                    </div><!--col-md-3 shopping summery End-->
                    
                    

                </div>



            </div>        
        </div>        










        <!--Footer Include Code Start      -->
        <?php include('includes/footer.php'); ?>
        <!--Footer Include Code End        -->


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>        


