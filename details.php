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
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="#">Product Name</a></li>
                    </ul>
                </div><!--breadcrumb Section End-->

<!--
                <div class="col-md-3">
                    <?php 

//                    include('includes/sidebar.php');

                    ?>
                </div>
-->
                    
                <!--col-md-3 Section End-->


                <div class="col-md-12">
                    <div class="row" id="productmain">
                        <div class="col-sm-6"><!--col-md-6 slider Start-->
                            <div id="mainimage">
                                <div id="productCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="productCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="productCarousel" data-slide-to="1"></li>
                                        <li data-target="productCarousel" data-slide-to="2"></li>
                                    </ol>    
                                    <div class="carousel-inner"><!--carousel inner Start-->
                                        <div class="item active">
                                            <center>
                                                <img src="admin_area/product_images/DSLR_%20(2).png" class="img-responive">
                                            </center>
                                        </div>
                                        <div class="item">
                                            <center>
                                                <img src="admin_area/product_images/DSLR_%20(3).png" class="img-responive">
                                            </center>
                                        </div>
                                        <div class="item">
                                            <center>
                                                <img src="admin_area/product_images/DSLR_%20(4).png" class="img-responive">
                                            </center>
                                        </div>
                                    </div><!--carousel inner End-->
                                    <a href="#productCarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#productCarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div><!--col-sm-6 slider End-->

                        <div class="col-sm-6">
                            <div class="box-details box">
                                <h1 class="text-center">Nikon DSLR 60D Pakistan with the world</h1>
                                <form action="details.php" method="post" class="form-horizontal">
                                    <div class="form-group"><!--form-group start-->
                                        <label class="col-md-5">Product Quantity</label>
                                        <div class="col-md-7"><!--col-md-7 form Start-->
                                            <input type="number" name="product_qty" class="form-control" value="1">
                                        </div><!--col-md-7 form End-->

                                    </div><!--form-group End-->
                                    <div class="form-group"><!--form-group start-->
                                        <label class="col-md-5">Product Quantity</label>
                                        <div class="col-md-7"><!--col-md-7 form Start-->
                                            <select type="number" name="product_size" class="form-control">
                                                <option>Select your size</option>
                                                <option>SM</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>    
                                        </div><!--col-md-7 form Start-->
                                    </div><!--form-group End-->
                                    <p class="price">Price : Rs 50000</p>
                                    <p class="text-center buttons">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-shopping-cart"> Add to cart</i>
                                        </button>
                                        <button class="btn btn-primary">
                                            <i class="fa fa-heart"> Add to wishlist</i>
                                        </button>
                                    </p>
                                </form>
                            </div><!-- Product Box End-->
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/DSLR_%20(5).png" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/DSLR_%20(4).png" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/DSLR_3.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>

                    </div><!-- Row End-->


                    <div class="box-details box" id="details"><!--details Start-->
                        <h4>Product Details</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <h4>Size</h4>
                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                            <li>Extra large</li>
                        </ul>
                    </div><!--details End-->
                    <div id="row"><!--row same-height-row Start-->
                        <div class="col-md-12 box-details box">
                            <div class="same-height-row">
                                <h2 class="text-center">You May Also Like These Products</h2>
                            </div>
                        </div><!--col-md-3 col-sm-6 End-->
                    </div> 

                    <div class="row" id="product-suggestion">
                        <div class="col-md-12">
<!--                            <div class="same-height-row  headline">-->
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

<!--                            </div>-->
                        </div>

                    </div><!--row same-height-row-->


                </div>

            </div><!--Container End-->
        </div><!--Content End-->








        <!--Footer Include Code Start      -->
        <?php include('includes/footer.php'); ?>
        <!--Footer Include Code End        -->


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>