<?php
error_reporting(0);
  require_once("admin/config/koneksi.php");
        session_start();

    $rex=mysqli_query($koneksi,"SELECT * FROM dtl_transaksi WHERE nama ='$_SESSION[nama]' AND   status_bayar='Belum Dibayar'");
    $jo=mysqli_fetch_array($rex);

    if ($jo['id_det_transaksi'] == true) {
      header('location:detail_transaksi.php?transaksi='.$jo['id_det_transaksi'].'');
      exit;
    }

?>
<a href=""></a>
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
          <?php include "tab.php";?>
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
          
          <!-- Mini Cart End-->
          <!-- Search Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
            <form action="" method="post" >
              <input id="filter_name" type="text" name="cari" value="" placeholder="Search" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
              </form>
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
              
              <li><a href="index.php?k=<?php echo $data['id_merek']; ?>"><?php echo $data['nama_merek']; ?></a></li>
          </div>
           <?php } ?>



          <h3 class="subtitle">Bestsellers</h3>
          <div align="center" class="side-item">

                  <?php

                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang ASC limit 3");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb clearfix">
              <div align="center">
                <a href="#">
                <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive"  style="display:block;max-width:100%;height:100px;"/> </a>
              </div>
              <div align="center">
                <h4><a href="produk.php"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"><span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?>h</span> </p>
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
       
        </aside>
        <!-- Left Part End-->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
          <?php $cari = $_POST['cari']; 
          if ($cari==false) 
          {
            
          ?>
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid1.jpg" alt="banner 1" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid2.jpg" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/slid3.jpg" alt="banner 3" /></a> </div>
          </div>
          <h3 class="subtitle">Barang Baru</h3>
          <?php 
          }
          else
            { ?>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <!-- pencarian -->
          <!-- <h3 class="subtitle"></h3>
          <div class="owl-carousel product_carousel">
            
          </div> -->
          <!-- pencarian -->
          <h3 class="subtitle">Pencarian <?php echo "'$cari'"; ?></h3>
          <?php 
          }
           ?>
          <div class="owl-carousel product_carousel">
          <?php 

          $merek=$_GET['k'];
          if(empty($merek))
          {
            // $cari = $_POST['cari'];

            if ($cari==false) {
              
                  // echo "<h1>Maaf, barang yang anda cari tidak ditemukan.<h1>";
                 
              $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6"); 
            }else{
              
              $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE nama_barang LIKE '%$cari%' ORDER BY id_barang DESC ");

            }
          }
          else{
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_merek='$merek' ORDER BY id_barang DESC limit 6");
                  }

          $ketemu=mysqli_num_rows($sql);
          if (empty($ketemu)) {
                        echo"<div><h1>Maaf, item yang anda cari tidak ditemukan</h1></div>";
                      }
                    while($data = mysqli_fetch_array($sql)){  
                 ?>
            <div class="product-thumb ">
              <div align="center">
              <a href="#">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive" style="max-width:100%;height: 100px"/></a></div>
              <div class="caption">
                <h4> <a href="#"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price"><span class="price-new">Rp.<?php echo number_format($data['harga'],2,",",".");?></span></p>
              </div>

              <div class="button-group">
                <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                
              </div>
            </div>
            <?php 
          } 
          // while (empty(mysqli_fetch_array($sql))) {
          //   echo "<div><h1>Maaf, item yang anda cari tidak ditemukan</h1> </div>";
          // }
            ?> 
            
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
            <!-- <h3 class="subtitle">Barang Jual</h3> -->
            <div class="category-module-content">
              
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
                  <div class="product-thumb">
                    <div align="center">
                    <a href="product.php">
                    <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive" style="max-width:100%;height: 100px" /></a></div>
                    <div class="caption">
                      <h4><a href="#"><?php echo $data['nama_barang']; ?></a></h4>
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
        <!--   <h3 class="subtitle">Barang Bagus &amp; Murah</h3> -->
          <div class="owl-carousel latest_category_carousel">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb">
              <div align="center">
              <a href="#">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive" style="max-width:100%;height: 100px" /></a></div>
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
       <!--    <h3 class="subtitle">Paling Dicari</h3>
          <div class="owl-carousel latest_brands_carousel">
          <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC limit 6");
                    while($data = mysqli_fetch_array($sql)){
                 ?>
            <div class="product-thumb">
              <div align="center">
              <a href="product.html">
              <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="img-responsive" style="max-width:100%;height: 100px" /></a></div>
              <div class="caption">
                <h4><a href="product.html"><?php echo $data['nama_barang']; ?></a></h4>
                <p class="price">Rp.<?php echo number_format($data['harga'],2,",",".");?> </p>
                
              </div>
              <div class="button-group">
                <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button class="btn-primary" type="button"><span>Add to Cart</span></button></a>
                
              </div>
            </div>
            <?php } ?> 
          
          
          </div> -->
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
  
  <!-- Facebook Side Block End -->
  <!-- Twitter Side Block Start -->
  
  <!-- Twitter Side Block End -->
  <!-- Video Side Block Start -->
  
  <!-- Video Side Block End -->
  <!-- Custom Side Block Start -->
  
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
