

<!DOCTYPE html>

<html>

<head>

<title> Admin Panel </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" href="font-awesome/css/all.css">


<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>


</head>

<body>

<div class="content-wrapper"><!-- content-wrapper Starts -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav"><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Starts -->

<a class="navbar-brand" href="index.php?dashboard"> Admin Panel </a>

<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive">

<span class="navbar-toggler-icon"> </span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive"><!-- collapse navbar-collapse Starts -->

<ul class="navbar-nav navbar-sidenav"><!-- navbar-nav navbar-sidenav Starts -->

<li class="nav-item active"><!-- li Starts -->

<a class="nav-link" href="index.php?dashboard">

<i class="fa fa-fw fa-tachometer-alt"></i> 

<span class="nav-link-text"> Dashboard </span>

</a>

</li><!-- li Ends -->

<li class="nav-item"><!-- Settings li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#settings">

<i class="fa fa-fw fa-cog"></i> Settings

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="settings" class="li-second-level collapse">

<li>

<a href="index.php?general_settings"> General Settings </a>

</li>

<li>
<a href="index.php?payment_settings"> Payment Settings </a>
</li>

<li>

<a href="index.php?store_settings"> Store Settings </a>

</li>

<li>

<a href="index.php?api_settings"> Api Services </a>

</li>

<li>

<a href="index.php?membership_settings"> Membership Settings </a>

</li>

</ul>

</li><!-- Settings li Ends -->

<li class="nav-item"><!-- boxes section li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#boxes"><!-- anchor Starts -->

<i class="fa fa-fw fa-th-large"></i> Boxes Section

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="boxes" class="li-second-level collapse">

<li>

<a href="index.php?insert_box"> Insert Box </a>

</li>

<li>

<a href="index.php?view_boxes"> View Boxes </a>

</li>

</ul>

</li><!--boxes section li Ends -->

<li class="nav-item"><!-- Products li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Products


<span class="badge badge-secondary">0</span>

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="products" class="li-second-level collapse">

<li>
<a href="index.php?product"> Insert Products </a>
</li>

<li>
<a href="index.php?view_products"> View Products </a>
</li>

</ul>

</li><!-- Products li Ends -->

<li class="nav-item"><!-- Bundles Li Starts --->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Bundles


<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="li-second-level collapse">

<li>
<a href="index.php?bundle"> Insert Bundle </a>
</li>

<li>
<a href="index.php?view_bundles"> View Bundles </a>
</li>

</ul>

</li><!-- Bundles Li Ends --->

<li class="nav-item"><!-- relations li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->

<i class="fa fa-fw fa-retweet"></i> Assign Products To Bundles Relations

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="relations" class="li-second-level collapse"><!-- collapse Starts -->

<li>

<a href="index.php?insert_rel"> Insert Relation </a>

</li>


<li>

<a href="index.php?view_rel"> View Relations </a>

</li>

</ul><!-- collapse Ends -->


</li><!-- relations li Ends -->

<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#downloads">

<i class="fa fa-fw fa-download"></i> Downloads

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="downloads" class="li-second-level collapse">

<li>
<a href="index.php?insert_download"> Insert Download </a>
</li>

<li>
<a href="index.php?view_downloads"> View Downloads </a>
</li>

</ul>

</li><!-- li Ends -->

<li class="nav-item"><!-- Icons Li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#shipping_zones">

<i class="fa fa-truck" aria-hidden="true"></i> Ecommerce Shipping

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="shipping_zones" class="li-second-level collapse"><!-- Icons Ul Starts -->

<!-- <li>

<a href="index.php?shipping_settings"> Shipping Settings </a>

</li> -->

<li>
<a href="index.php?insert_shipping_zone"> Insert Shipping Zone  </a>
</li>

<li>
<a href="index.php?view_shipping_zones"> View Shipping Zones </a>
</li>

<li>
<a href="index.php?insert_shipping_type"> Insert Shipping Type  </a>
</li>

<li>
<a href="index.php?view_shipping_types"> View Shipping Types </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->

<li class="nav-item"><!-- Icons Li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#countries">

<i class="fa fa-globe" aria-hidden="true"></i> Countries

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="countries" class="li-second-level collapse"><!-- Icons Ul Starts -->

<li>
<a href="index.php?insert_country"> Insert Country </a>
</li>

<li>
<a href="index.php?view_countries"> View Countries  </a>
</li>

</ul><!-- Icons Ul Ends -->


<li class="nav-item"><!-- slide li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#slides">

<i class="fab fa-slideshare"></i> Slides

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="slides" class="li-second-level collapse">

<li>
<a href="index.php?insert_slide"> Insert Slide </a>
</li>

<li>
<a href="index.php?view_slides"> View Slides </a>
</li>

</ul>

</li><!-- slide li Ends -->

</li><!-- Icons Li Ends -->

<li class="nav-item"><!-- Icons Li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#icons">

<i class="fa fa-fw fa-retweet"> </i> Icons

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="icons" class="li-second-level collapse"><!-- Icons Ul Starts -->

<li>
<a href="index.php?insert_icon"> Insert Icon </a>
</li>

<li>
<a href="index.php?view_icons"> View Icons </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->


<li class="nav-item"><!-- manufacturer li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Manufacturers

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="manufacturers" class="li-second-level collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Insert Manufacturer </a>
</li>

<li>
<a href="index.php?view_manufacturers"> View Manufacturers </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-list-ol"></i> Products Categories

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="p_cat" class="li-second-level collapse">

<li>
<a href="index.php?insert_p_cat"> Insert Product Category </a>
</li>

<li>
<a href="index.php?view_p_cats"> View Products Categories </a>
</li>


</ul>

</li><!-- li Ends -->


<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-pencil-alt"></i> Categories

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="li-second-level collapse">

<li>
<a href="index.php?insert_cat"> Insert Category </a>
</li>

<li>
<a href="index.php?view_cats"> View Categories </a>
</li>

</ul>

</li><!-- li Ends -->

<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="index.php?vendors_commissions">

<i class="fa fa-fw fa-balance-scale"></i> Vendors Commissions


<span class="badge">2</span>


</a>

</li><!-- li Ends -->

<li class="nav-item"><!-- reviews li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#reviews">
	<i class="fa fa-fw fa-star"></i> Product Reviews
	<i class="fa fa-fw fa-caret-down"></i>
</a>

<ul id="reviews" class="li-second-level collapse">

<li>
<a href="index.php?insert_review"> Insert Review </a>
</li>

<li>
<a href="index.php?view_reviews"> View Reviews </a>
</li>

</ul>

</li><!-- reviews li Ends -->

<li class="nav-item"><!-- services section li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#services">

<i class="fa fa-fw fa-briefcase"></i> Services

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="services" class="li-second-level collapse">

<li>
<a href="index.php?insert_service"> Insert Service </a>
</li>

<li>
<a href="index.php?view_services"> View Services </a>
</li>

</ul>

</li><!-- services section li Ends -->


<li class="nav-item"><!-- contact us li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-phone-square"> </i> Contact Us Section

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="li-second-level collapse">

<li>

<a href="index.php?edit_contact_us"> Edit Contact Us </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Insert Enquiry Type </a>

</li>

<li>

<a href="index.php?view_enquiry"> View Enquiry Types </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li class="nav-item"><!-- about us li Starts -->

<a class="nav-link" href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Edit About Us Page

</a>

</li><!-- about us li Ends -->


<li class="nav-item"><!-- Coupons Section li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

<i class="fas fa-weight"></i> Coupons

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="coupons" class="li-second-level collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_coupon"> Insert Coupon </a>
</li>

<li>
<a href="index.php?view_coupons"> View Coupons </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Coupons Section li Ends -->

<li class="nav-item"><!-- terms li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Terms

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="li-second-level collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Insert Terms </a> 
</li>

<li>
<a href="index.php?view_terms"> View Terms </a> 
</li>

</ul><!-- ul collapse Ends -->

</li><!-- terms li Ends -->

<li class="nav-item"><!-- Edit Css li Starts -->

<a class="nav-link" href="index.php?edit_css">

<i class="fa fa-fw fa-list"></i> Edit Css File

</a>

</li><!-- Edit Css li Ends -->

<li  class="nav-item">

<a class="nav-link" href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> View Customers

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> View Orders

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="index.php?view_payments">

<i class="fa fa-fw fa-credit-card"></i> View Payments

</a>

</li>

<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-users"></i> Users

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="users" class="li-second-level collapse">

<li>
<a href="index.php?insert_user"> Insert User </a>
</li>

<li>
<a href="index.php?view_users"> View Users </a>
</li>

<li>
<a href="index.php?user_profile=2"> Edit Profile </a>
</li>

</ul>

</li><!-- li Ends -->

<li class="nav-item"><!-- li Starts -->

<a class="nav-link" href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->


</ul><!-- navbar-nav navbar-sidenav Ends -->

<div class="dropdown ml-auto"><!-- dropdown ml-auto Starts -->

<a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown"><!-- btn btn-secondary dropdown-toggle Starts -->

<i class="fa fa-user"></i>

Mohammad Tahir Ahmed
</a><!-- btn btn-secondary dropdown-toggle Ends -->


<div class="dropdown-menu" style="margin-left: -170px;"><!-- dropdown-menu  Starts -->


<a class="dropdown-item" href="index.php?user_profile=2"><!-- dropdown-item Starts -->

<i class="fa fa-fw fa-user"></i> Edit Profile

</a><!-- dropdown-item Ends -->


<a class="dropdown-item" href="index.php?view_jobs"><!-- dropdown-item Starts -->

<i class="fab fa-fw fa-product-hunt"></i> Products <small> (Pending) </small>

<span class="badge badge-secondary"> 0 </span>

</a><!-- dropdown-item Ends -->


<a class="dropdown-item" href="index.php?view_customers"><!-- dropdown-item Starts -->

<i class="fa fa-fw fa-globe"></i> Customers

<span class="badge badge-secondary"> 5 </span>

</a><!-- dropdown-item Ends -->


<a class="dropdown-item" href="index.php?view_payments"><!-- dropdown-item Starts -->

<i class="fa fa-fw fa-certificate"></i> Product Categories

<span class="badge badge-secondary"> 8 </span>

</a><!-- dropdown-item Ends -->

<div class="dropdown-divider"> </div>


<a class="dropdown-item" href="logout.php"><!-- dropdown-item Starts -->

<i class="fa fa-fw fa-power-off"></i> Log Out

</a><!-- dropdown-item Ends -->


</div><!-- dropdown-menu Ends -->

</div><!-- dropdown ml-auto Ends -->

</div><!-- collapse navbar-collapse Ends -->

</nav><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Ends -->
<div class="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<div class="top-space"></div>

<div class="col-md-12"><!-- col-md-12 Starts -->


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-tachometer-alt"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="card border-primary"><!-- card border-primary Starts -->

<div class="card-header bg-primary"><!-- card-header bg-primary Starts --> 

<div class="row"><!-- row Starts -->

<div class="col-3"><!-- col-3 Starts -->

<i class="fa fa-list fa-4x"></i>

</div><!-- col-3 Ends -->

<div class="col-9 text-right"><!-- col-9 text-right Starts -->

<div class="huge"> 0 </div>

<div class="text-caption"> 

<span class="badge badge-secondary"> Pending </span> Products/Bundles

</div>

</div><!-- col-9 text-right Ends -->

</div><!-- row Ends -->

</div><!-- card-header bg-primary Ends --> 

<a href="index.php?view_products"><!-- a Starts -->

<div class="card-footer"><!-- card-footer Starts -->

<span class="float-left"> View Details </span>

<span class="float-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- card-footer Ends -->

</a><!-- a Ends -->

</div><!-- card border-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="card border-success"><!-- card border-success Starts -->

<div class="card-header bg-success"><!-- card-header bg-success Starts --> 

<div class="row"><!-- row Starts -->

<div class="col-3"><!-- col-3 Starts -->

<i class="fa fa-globe fa-4x"></i>

</div><!-- col-3 Ends -->

<div class="col-9 text-right"><!-- col-9 text-right Starts -->

<div class="huge"> 5 </div>

<div class="text-caption"> Customers </div>

</div><!-- col-9 text-right Ends -->

</div><!-- row Ends -->

</div><!-- card-header bg-success Ends --> 

<a href="index.php?view_customers"><!-- a Starts -->

<div class="card-footer"><!-- card-footer Starts -->

<span class="float-left"> View Details </span>

<span class="float-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- card-footer Ends -->

</a><!-- a Ends -->

</div><!-- card border-success Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->



<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="card border-warning"><!-- card border-warning Starts -->

<div class="card-header bg-warning"><!-- card-header bg-warning Starts --> 

<div class="row"><!-- row Starts -->

<div class="col-3"><!-- col-3 Starts -->

<i class="fa fa-th-large fa-4x"></i>

</div><!-- col-3 Ends -->

<div class="col-9 text-right"><!-- col-9 text-right Starts -->

<div class="huge"> 8  </div>

<div class="text-caption"> Products Categories </div>

</div><!-- col-9 text-right Ends -->

</div><!-- row Ends -->

</div><!-- card-header bg-warning Ends --> 

<a href="index.php?view_p_cats"><!-- a Starts -->

<div class="card-footer"><!-- card-footer Starts -->

<span class="float-left"> View Details </span>

<span class="float-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- card-footer Ends -->

</a><!-- a Ends -->

</div><!-- card border-warning Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->



<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="card border-danger"><!-- card border-danger Starts -->

<div class="card-header bg-danger"><!-- card-header bg-danger Starts --> 

<div class="row"><!-- row Starts -->

<div class="col-3"><!-- col-3 Starts -->

<i class="fa fa-envelope fa-4x"></i>

</div><!-- col-3 Ends -->

<div class="col-9 text-right"><!-- col-9 text-right Starts -->

<div class="huge"> 1 </div>

<div class="text-caption"> Orders </div>

</div><!-- col-9 text-right Ends -->

</div><!-- row Ends -->

</div><!-- card-header bg-danger Ends --> 

<a href="index.php?view_orders"><!-- a Starts -->

<div class="card-footer"><!-- card-footer Starts -->

<span class="float-left"> View Details </span>

<span class="float-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- card-footer Ends -->

</a><!-- a Ends -->

</div><!-- card border-danger Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->




</div><!-- 2 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="card card-primary" ><!-- card card-primary Starts -->

<div class="card-header" ><!-- card-header Starts -->

<i class="fa fa-money-bill-alt fa-fw" ></i> New Orders

</div><!-- card-header Ends -->

<div class="card-body" ><!-- card-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order No:</th>

<th>Customer Email:</th>

<th>Invoice No:</th>

<th>Total:</th>

<th>Date:</th>

<th>Status:</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->


<tr>

<td>1</td>

<td>
</td>

<td>#1586530431</td>

<td>$35.0</td>

<td>July 11, 2019 06:48</td>

<td>
pending</td>

</tr>


</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->

</div><!-- card-body Ends -->

</div><!-- card card-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="card"><!-- card Starts -->

<div class="card-body"><!-- card-body Starts -->

<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

<img src="admin_images/image-1-updated.jpg" class="rounded img-fluid">

<div class="thumb-info-title"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner"> Mohammad Tahir Ahmed </span>

<span class="thumb-info-type"> Web Developer </span>

</div><!-- thumb-info-title Ends -->

</div><!-- thumb-info mb-md Ends -->

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-user"></i> <span>Email: </span> sad.ahmed22224@gmail.com  <br>
<i class="fa fa-user"></i> <span>Country: </span> Pakistan   <br>
<i class="fa fa-user"></i> <span>Contact: </span> 0923334566931   <br>

</div><!-- widget-content-expanded Ends -->

<hr class="dotted short">

<h5 class="text-muted">About</h5>

<p>
We are a full-stack Custom Web Application development company that specializes in building, designing and solving issues/glitches with projects of any size. Our greatest strength is our proactive team always on its toes to take that ‘extra-mile’ whenever needed, and always ready to respond to the client irrespective of the time-line barriers. </p>

</div><!-- mb-md Ends -->

</div><!-- card-body Ends -->

</div><!-- card Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->


</div><!-- col-md-12 Ends -->

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- content-wrapper Ends -->

<script src="font-awesome/js/all.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>

