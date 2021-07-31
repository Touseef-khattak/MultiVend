<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu -->
    <div class="panel-heading"><!-- Panel heading Start -->
        <h3 class="panel-title">Product Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            
            
             <?php
                
                include('includes/db.php');
                $p_categ = mysqli_query($con , "SELECT * FROM `product_categories` LIMIT 6");
                
                while($catp = mysqli_fetch_array($p_categ)){
                
                
                
                ?>
            
            <li><a href="shop.php?cat_id=<?=$catp['pro_cat_id'];?>"><?=$catp['pro_cat_title'];?></a></li>
            
            <?php } ?>
        </ul>
    </div>
    <!-- Panel heading End -->
</div><!-- panel panel-default sidebar-menu -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu -->
    <div class="panel-heading"><!-- Panel heading Start -->
        <h3 class="panel-title">Product Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            
            
              <?php
                
                $categ = mysqli_query($con , "SELECT * FROM `categories` LIMIT 4");
                
                while($cat = mysqli_fetch_array($categ)){
                
                
                
                ?>
            
            <li><a href="shop.php?cat=<?=$cat['cat_id'];?>"><?=$cat['cat_title'];?></a></li>
            
            <?php } ?>
        </ul>
    </div>
    <!-- Panel heading End -->
</div><!-- panel panel-default sidebar-menu -->