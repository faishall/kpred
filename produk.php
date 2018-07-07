<?php require_once("admin/config/koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>produk</title>
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
              <li><a href="login.php">Login</a></li>
              <li><a href="registrasi.php">Register</a></li>
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
            
            
            <li class="custom-link"><a href="#">Service</a></li>
            
            
          </ul>
        </div>
      </nav>
    </div>
    <!-- Main Menu End-->
  </div>
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Categories</h3>
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_merek ORDER BY id_merek ASC ");
                    while($data = mysqli_fetch_array($sql)){
                 ?> 

          <div class="box-category">
            <ul id="cat_accordion">
               <li><a href="index.php?k=<?php echo $data['id_merek']; ?>"><?php echo $data['nama_merek']; ?></a></li>
             
          </div>
           <?php } ?>


          <h3 class="subtitle">Bestsellers</h3>
          <div class="side-item">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang ASC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div align="center">
              <a href="#">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive"  style="display:block;max-width:100%;height:100px; /></a>
              </div>
              <div class="caption">
                <h4><a href="produk.php"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"><span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?>h</span> </p>
              </div>
            </div>
            <?php } ?>   
          
            
            
            
          </div>
        
          
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">Produk</h1>
          
          <div class="product-filter">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
                 </div>
              <div class="col-sm-2 text-right">
               
              </div>
            
            </div>
          </div>
          <br />
          <div class="row products-category">
           <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC ");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-layout product-list col-xs-12">
           
              <div class="product-thumb clearfix">
                <div align="center">
                <a href="#">
                <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive" style="max-width:100%;height: 100px" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="produk.php"> <?php echo $data['nama_barang']; ?> </a></h4>
                    
                    <p class="price"> <span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span>  </p>
                  </div>
                  <div class="button-group">
                    <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                    
                  </div>
                </div>

              </div>
              
            </div>
            <?php } ?> 
                  
                </div>
              </div>c
            </div>
          </div>
         
        </div>
        <!--Middle Part End -->
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
              <li class="mobile"><i class="fa fa-phone"></i>027445338847</li>
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
          
        </div>
        
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
  <!-- Facebook Side Block Start -->

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