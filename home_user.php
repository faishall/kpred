<?php
  require_once("admin/config/koneksi.php");
        session_start();
     if (empty($_SESSION['email']))

                {

                                header("location:proses_login_user.php");

                }   
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Redforce - Toko Computer</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  <div id="header">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>027445338847</li>
                <li class="email"><a href="redforce:official@gmail.com"><i class="fa fa-envelope"></i>redforce:official@gmail.com</a></li>
                
              </ul>
            </div>
            
          </div>

     <div id="top-links" class="nav pull-right flip">
            <ul> 
           
            <?php 
            if(isset($_GET['user'])){
              $user=mysql_real_escape_string($_GET['user']);
              $sql=mysqli_query($koneksi, "select * from tbl_customer where username='$user'");
            while($b=mysqli_fetch_array($sql)){
              ?>
            <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><i class="caret">My Profile</i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                        <a href="profil.php?id=<?php echo $b['username']; ?>" class="btn btn-default btn-flat">Profile</a>
                                </li>
                                <li class="user-header bg-light-blue">
                                        <a href="checkout.php?id=<?php echo $b['username']; ?>" class="btn btn-default btn-flat">My Cart</a>
                                </li>
                                <li class="user-header bg-light-blue">
                                        <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                                </li>
                                <!-- Menu Body -->
                               
                                
                            </ul>
                        </li>

  <?php }}?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="index.php"><img class="img-responsive" src="image/redforce1.png" title="MarketShop" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
              <span class="cart-icon pull-left flip"></span>
              <span id="cart-total"></span></button>
              <ul class="dropdown-menu">
                
                
              </ul>
            </div>
          </div>
          <!-- Mini Cart End-->
          <!-- Search Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <!-- Search End-->
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main Menu Start-->
    <div class="container">
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="Home" href="index.php"><span>Home</span></a></li>
            
            <li class="menu_brands dropdown"><a href="#">Brands</a>
              <div class="dropdown-menu">
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="Apple" alt="Apple" /></a><a href="#">Apple</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="Canon" alt="Canon" /></a><a href="#">Canon</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="image/product/hp_logo-60x60.jpg" title="Hewlett-Packard" alt="Hewlett-Packard" /></a><a href="#">Hewlett-Packard</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/htc_logo-60x60.jpg" title="HTC" alt="HTC" /></a><a href="#">HTC</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/palm_logo-60x60.jpg" title="Palm" alt="Palm" /></a><a href="#">Palm</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/sony_logo-60x60.jpg" title="Sony" alt="Sony" /></a><a href="#">Sony</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">test</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">test1</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">test2</a></div>
              </div>
            </li>
            
            <li><a class="Service" title="Service" href="pesan.php"><span>service</span></a></li>
            <li class="custom-link-right"><a href="#" target="_blank"> Buy Now!</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Main Menu End-->
  </div>
  <div id="container">
    <!-- Feature Box Start-->
    <div class="container">
      <div class="custom-feature-box row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_1">
            <div class="title">Free Shipping</div>
            <p>Free shipping on order over $1000</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_2">
            <div class="title">Free Return</div>
            <p>Free return in 24 hour after purchasing</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_3">
            <div class="title">Gift Cards</div>
            <p>Give the special perfect gift</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_4">
            <div class="title">Reward Points</div>
            <p>Earn and spend with ease</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Box End-->
    <div class="container">
      <div class="row">
        


        <!-- Left Part Start-->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Categories</h3>
                 <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_merek ORDER BY id_merek ASC ");
                    while($data = mysqli_fetch_array($sql)){
                 ?> 
          <div class="box-category">
            <ul id="cat_accordion">
              
              <li><a href="category.php"><?php echo $data['nama_merek']; ?></a></li>
          </div>
           <?php } ?>



          <h3 class="subtitle">Bestsellers</h3>
          <div class="side-item">

<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang ASC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div class="image">
                <a href="produk.php">
                <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px" class="img-responsive" />
                </a>
              </div>
              <div class="caption">
                <h4><a href="produk.php"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"><span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?>h</span> </p>
              </div>
            </div>
             <?php } ?>   
          </div>
          <h3 class="subtitle">Specials</h3>
          <div class="side-item">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 5");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div class="image">
              <a href="product.html">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px" class="img-responsive" /></a>
              </div>
              <div class="caption">
                <h4><a href="product.html"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"> <span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span>  </p>
              </div>
            </div>
         <?php } ?> 
          </div>
          <div class="list-group">
            <h3 class="subtitle">Custom Content</h3>
            
          </div>
          <div class="banner owl-carousel">
            <div class="item"> <a href="#"><img src="image/banner/conten.jpg" alt="small banner" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="image/banner/conten.jpg" alt="small banner1" class="img-responsive" /></a> </div>
          </div>
          <h3 class="subtitle">Latest</h3>
          <div class="side-item">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 4");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div class="image">
              <a href="produk.php">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="produk.php"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"> <span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span> </p>
                
              </div>
              <?php } ?> 
            </div>
            
            
          </div>
        </aside>
        <!-- Left Part End-->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid1.jpg" alt="banner 1" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid2.jpg" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid3.jpg" alt="banner 3" /></a> </div>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">Barang Baru</h3>
          <div class="owl-carousel product_carousel">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div class="image">
              <a href="#">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="100px" height="50px" class="img-responsive"/></a></div>
              <div class="caption">
                <h4><?php echo $data['nama_barang']; ?></h4>
                <p class="price"><span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span></p>
              </div>

              <div class="button-group">
                <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                
              </div>
            </div>
            <?php } ?> 
            
          </div>
          <!-- Featured Product End-->
          <!-- Banner Start-->
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/promo1.jpg" alt="Sample Banner 3" title="Sample Banner 3" /></a></div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/promo2.jpg" alt="Sample Banner" title="Sample Banner" /></a></div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/promo3.jpg" alt="Sample Banner 2" title="Sample Banner 2" /></a></div>
            </div>
          </div>
          <!-- Banner End-->
          <!-- Categories Product Slider Start-->
          <div class="category-module" id="latest_category">
            <h3 class="subtitle">Barang Jual</h3>
            <div class="category-module-content">
              
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
                  <div class="product-thumb">
                    <div class="image">
                    <a href="product.html">
                    <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="100px" height="50px" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html"><?php echo $data['nama_barang']; ?></a></h4>
                      <p class="price"> <span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span>  </p>

                    </div>
                    <div class="button-group">
                      <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                      
                    </div>

                  </div>
                  <?php } ?> 
                 
                  
                  
                  
                  
              </div>
          
              
            </div>
          </div>
          <!-- Categories Product Slider End-->
          <!-- Banner Start -->
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/hrg2.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/hrg3.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
            </div>
          </div>
          <!-- Banner End -->
          <!-- Categories Product Slider Start -->
          <h3 class="subtitle">Barang Bagus &amp; Murah</h3>
          <div class="owl-carousel latest_category_carousel">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb">
              <div class="image">
              <a href="product.html">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="100px" height="50px" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"> Rp.<?php echo number_format($data['harga'],2,",",".");?> </p>
                
              </div>
              <div class="button-group">
                <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                
              </div>
            </div>
             <?php } ?> 
          
    
          </div>
          <!-- Categories Product Slider End -->
          <!-- Brand Product Slider Start-->
          <h3 class="subtitle">Paling Dicari</h3>
          <div class="owl-carousel latest_brands_carousel">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb">
              <div class="image">
              <a href="product.html">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="100px" height="50px" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price">Rp.<?php echo number_format($data['harga'],2,",",".");?> </p>
                
              </div>
              <div class="button-group">
                <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                
              </div>
            </div>
            <?php } ?> 
          
          
          </div>
          <!-- Brand Product Slider End -->
          <!-- Brand Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            <div class="item text-center"> <a href="#"><img src="image/product/ep1.jpg" alt="Palm" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/ep2.jpg" alt="Sony" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/hdd1.jpg" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/lp1.jpg" alt="Apple" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/lp2.jpg" alt="HTC" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/lp3.jpg" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/mouse1.jpg" alt="brand" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/mouse3.jpg" alt="brand1" class="img-responsive" /></a> </div>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  <footer id="footer">
    <div class="fpart-first">
      <div class="container">
        <div class="row">
          <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h5>Contact Details</h5>
            <ul>
              <li class="address"><i class="fa fa-map-marker"></i>Nologaten Sleman Yogyakarta</li>
              <li class="mobile"><i class="fa fa-phone"></i></li>
              <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="contact-us.html">Contact Us</a>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    <div class="fpart-second">
      <div class="container">
        <div id="powered" class="clearfix">
          <div class="powered_text pull-left flip">
            <p>Marketshop Ecommerce Template © 2016 | Template By redforce</p>
          </div>
          <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
        </div>
        
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
  <!-- Facebook Side Block Start -->
  <div id="facebook" class="fb-left sort-order-1">
    <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
    <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
      
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </div>
  <!-- Facebook Side Block End -->
  <!-- Twitter Side Block Start -->
  <div id="twitter_footer" class="twit-left sort-order-2">
    <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
    <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  <!-- Twitter Side Block End -->
  <!-- Video Side Block Start -->
  <div id="video_box" class="vb-left sort-order-3">
    <div id="video_box_icon"><i class="fa fa-play"></i></div>
    <p>
      <iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>
    </p>
  </div>
  <!-- Video Side Block End -->
  <!-- Custom Side Block Start -->
  <div id="custom_side_block" class="custom_side_block_left sort-order-4">
    <div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>
    <table>
      <tbody>
        <tr>
          <td><h2>CMS Blocks</h2></td>
        </tr>
        <tr>
          <td><img alt="" src="image/banner/cms-block.jpg"></td>
        </tr>
        <tr>
          <td>You can add any HTML content to this block or turn it off in Theme Admin panel!</td>
        </tr>
        <tr>
          <td><strong><a href="#">Read More</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>
