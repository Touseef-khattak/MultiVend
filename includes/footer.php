<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start -->
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="costumer_register.php">Register</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div><!-- col-md-3 col-sm-6 End -->
            
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start -->
                <h4>Top Product Categories</h4>
                <ul>
                <?php
                
                include('includes/db.php');
                $category_query = mysqli_query($con , "SELECT * FROM `product_categories` LIMIT 6");
                
                while($cat = mysqli_fetch_array($category_query)){
                
                
                
                ?>
                
                
                
                    <li><a href="shop.php?cat_id=<?=$cat['pro_cat_id'];?>"><?=$cat['pro_cat_title'];?></a></li>
                    
                <?php } ?>    
                    
                    
                </ul>
                <hr class="hidden-md hidden-lg">
            </div><!-- col-md-3 col-sm-6 End -->
            
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start -->
                <h4>Where to find us</h4>
                <p>
                    <strong>Institute of management sciences</strong>
                    <br>Phase 7 sector E5
                    <br>Hayatabad
                    <br>Peshawar
                    <br>Khyber Pukhtonkhwa
                    <br>091-1234567
                </p>
                <a href="contact.php">Goto contact us page</a>
                <hr class="hidden-md hidden-lg">
            </div><!-- col-md-3 col-sm-6 End --> 
            
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Start -->
                <h4>Get the news</h4>
                <p class="text-muted">
                    subscribe here to get our latest news
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" required>
                        <span class="input-group-btn">
                            <input type="submit" name="" class="btn btn-default" value="subscribe">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Stay In Touch</h4>
                <p class="social">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="envelope"><i class="fa fa-envelope"></i></a>
                </p>
            </div><!-- col-md-3 col-sm-6 End -->    
            
            
        </div>
    </div>
</div><!-- Footer Section End-->

<div id="copyright"><!-- Copy Right Section End-->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">Template by: <a href="http://www.tkdeveloper.ml">tkdeveloper.ml</a></p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">&copy; 2021 by TK Developers</p>
        </div>
    </div>
</div>







