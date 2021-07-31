<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

		<link type="text/css" rel="stylesheet" href="style/style.css">



		<title> Insert Product </title>
	</head>

	<body>

		<div class="row"><!-- Row section starting -->
			<div class="col-md-12">
				<div class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard / insert product
					</li>
				</div>
			</div>
		</div>	<!-- Bread Crumb Row section ending -->


		<div class="row">
			<div class="container"><!-- MAin Row section starting-->

				<div class="col-md-7 col-md-offset-2">



					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa a-money fa-w"></i> Insert Product
							</h3>
						</div>

						<div class="panel-body">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="col-md-4">Product Title</label>
									<input type="text" name="pro_title" class="form-control" required>
								</div>



								<div class="form-group">
									<label class="col-md-4">Product Category</label>
									<select name="pro_cat" class="form-control">
										<option>Select Product Category</option>

										<?php 
										include("includes/db.php");
										$sel_category = mysqli_query( $con , "SELECT pro_cat_id, pro_cat_title FROM `product_categories`");

										while($row1 = mysqli_fetch_array($sel_category)){
											echo '<option value="' . $row1['pro_cat_id'] . '">' . $row1['pro_cat_title'] . '</option>';
										}

										?>

									</select>
								</div>



								<div class="form-group">
									<label class="col-md-4">Category</label>
									<select name="cat" class="form-control">
										<option>Select Product Category</option>

										<?php 
										include("includes/db.php");
										$category = mysqli_query( $con , "SELECT cat_id, cat_title FROM `categories`");

										while($cat = mysqli_fetch_array($category)){
											echo '<option value="' . $cat['cat_id'] . '">' . $cat['cat_title'] . '</option>';
										}

										?>

									</select>
								</div>



								<div class="form-group">
									<label class="col-md-7">Product Images <span class="text-muted text-danger text-capitalize">select atleast 3 images</span></label>
									<input type="file" name="image[]" class="form-control" required multiple>
								</div>
<!--
								<button class="btn btn-danger btn-sm" onclick="newImage()"><i class="fa fa-plus"> image</i></button>

								<br>
								<div id="newImage">
									
								</div>
								<br>
-->
								<div class="form-group">
									<label class="col-md-4">Product Price</label>
									<input type="text" name="pro_price" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label class="col-md-4">Product Keyword</label>
									<input type="text" name="pro_keywords" class="form-control" required>
								</div>



								<div class="form-group">
									<label class="col-md-4">Product Description</label>
									<textarea class="form-control" rows="6" name="pro_desc">
										
									</textarea>
								</div>
								
								<div class="form-group">
									<input type="submit" name="submit" value=" Insert Product" class="btn btn-primary form-control">
								</div>

							</form>
						</div>


					</div>


				</div>



			</div>
		</div>	<!-- MAin Row section ending-->


		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
		
		
	</body>
</html>
<?php


if(isset($_POST['submit'])){
	
	$title = $_POST['pro_title'];
	$pro_cat = $_POST['pro_cat'];
	$cat = $_POST['cat'];
	
	$price = $_POST['pro_price'];
	$keywords = $_POST['pro_keywords'];
	$desc = $_POST['pro_desc'];
	
	$img_name = $_FILES['image']['name'];  
  	$img_tmp = $_FILES['image']['tmp_name'];  
  	$img_type = $_FILES['image']['type'];
	
	
	foreach($img_type as $type){
		if($type == 'image/jpeg' || $type == 'image/png'){
			
		}
		else{
			echo '<script type="text/javascript">';
			echo ' alert("PLease select jpeg/png files.")';  //not showing an alert box.
			echo '</script>';
			exit;
		}
	}
	
	
        include("includes/db.php");
        
        $insert = mysqli_query($con, "INSERT INTO `products`( `pro_cat_id`, `cat_id`, `pro_title`, `pro_image`, `pro_price`, `pro_disc`, `pro_keyword`) VALUES ('$pro_cat','$cat','$title','$img_name[0]','$price','$desc','$keywords')");
        $pro_id = mysqli_insert_id($con);
	
	
	
	
	
        if($insert == 'TRUE') {
			
			foreach(array_combine($img_name, $img_tmp) as $name => $tmp){
				
				$imagInsert = mysqli_query($con , "INSERT INTO `product_images`(`pro_id`, `image`) VALUES('$pro_id','$name')");
				
				if($imagInsert == 'TRUE'){
					 $move_file = move_uploaded_file($tmp, 'product_images/'.$name);
					if($move_file) {
						mysqli_close($con);
		                header('location:insert_product.php');
		//              echo "Product Added Successfuly";
//					
					} else{
						echo "File upload error"mysqli_close($con);;
					}
				}else{
					echo '<script type="text/javascript">';
					echo ' alert("Error uploading files : '.mysqli_error($con).'")';  //not showing an alert box.
					echo '</script>';mysqli_close($con);
				}

				  

			}
        }else{
            echo '<script type="text/javascript">';
			echo ' alert("Error inserting : '.mysqli_error($con).'.")';  //not showing an alert box.
			echo '</script>';mysqli_close($con);
        }
        
        
  
	
	
	
	
	
	
	
}















?>







