<?php require_once("admin/config/koneksi.php");
     session_start();
    // if(empty($_SESSION['username']))
    // {
    //   header('location:anc.php');
    // }
     ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Detail Barang</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="js/swipebox/src/css/swipebox.min.css">
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
    <div class="container">
      <!-- Breadcrumb Start-->
      
      <!-- Breadcrumb End-->
      <div class="row">

       <table class="table table-hover table-condensed">
          <tr>
          <th><center>No</center></th>
          <th><center>Item</center></th>
          <th><center>Quantity</center></th>
          <th><center>Berat</center></th>
          <th><center>Sub Total</center></th>
          <th><center>Opsi</center></th>
        </tr>
                    <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            $berat=$data['berat']*$val;
            ?>
                <tr>
                <td><center><?php echo $no ++; ?></center></td>
                <td><center><?php echo $data['nama_barang']; ?></center></td>
                <td><center><?php echo number_format($val); ?> Pcs</center></td>
                <td class="text-center"><?php echo $berat; ?> Kg</td>
                <td><center>Rp. <?php echo number_format($jumlah_harga); ?></center></td>
                <td><center><a href="cart.php?act=plus&amp;id_barang=<?php echo $key; ?>&amp;ref=detailproduk.php" class="btn btn-xs btn-success">Tambah</a> <a href="cart.php?act=min&amp;id_barang=<?php echo $key; ?>&amp;ref=detailproduk.php" class="btn btn-xs btn-warning">Kurang</a> <a href="cart.php?act=del&amp;id_barang=<?php echo $key; ?>&amp;ref=detailproduk.php" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>
                
          <?php
                    //mysql_free_result($query);      
            }
              //$total += $sub;
            }?>
                        <?php
        if($total == 0){ ?>
          <td colspan="4" align="center"><?php echo "Keranjang Kosong!"; ?></td>
        <?php } else { ?>
          
                        <td colspan="4" style="font-size: 18px;"><b><div class="pull-right">Total Belanja Anda : Rp. <?php echo number_format($total); ?>,- </div> </b></td>
                        
                        <td>
                        <div align="right">
                            <a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
                            </div>
                        </td>
                        <td>
                        <!-- <a href="anc.php?total=<?php echo $total ?>" class="btn btn-success"> CHECK OUT &raquo;</a> -->
                        <?php 
                        if(empty($_SESSION['email']))
                        {
                          echo "<a href='login.php?total=$total' class='btn btn-success'> CHECK OUT &raquo;</a>";
                        }
                        else{
                          echo "<a href='checkout.php?transaksi=INV".date("ymdhis")."' class='btn btn-success'> CHECK OUT &raquo;</a>";
                        }
                        ?>
                        </td>
          
      <?php }
        ?>
                </table> 

        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
           <?php 
           $kode=$_GET['kd'];                 
$query = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$kode'");
$data  = mysqli_fetch_array($query);
?>
          <div itemscope itemtype="http://schema.org/Product">
            <h1 class="title" itemprop="name"><?php echo $data['nama_barang']; ?></h1>
            <div class="row product-info">
              <div class="col-sm-6">
                <div class="image"><img src="admin/gambar/<?php echo $data['gambar']; ?>"  class="img-responsive"/> </div>
                
                
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>Harga:</b> <a href="#"><span itemprop="brand"><?php echo $data['harga']; ?></span></a></li>
                  <li><b>Stok:</b> <span class="instock"><?php echo $data['stok']; ?></span></li>
                  <li><b>Detail:</b> <span class="instock"><?php echo $data['detail']; ?></span></li>
                  
                </ul>
                
                <div id="product">
                  <h3 class="subtitle">Available Options</h3>
                  <div class="form-group required">
                    <label class="control-label">Color</label>
                    <select class="form-control" id="input-option200" name="option[200]">
                      <option value=""> --- Please Select --- </option>
                      <option value="4">Black </option>
                      <option value="3">Silver </option>
                      <option value="1">Green </option>
                      <option value="2">Blue </option>
                    </select>
                  </div>
                  <div class="cart">
                    <div>
                      <div class="qty">
                        <label class="control-label" for="input-quantity">Qty</label>
                        <input type="number" value="1" name="quantity" size="2" id="input-quantity" class="form-control" />
                        <a class="qtyBtn plus" href="javascript:void(0);">+</a><br />
                        <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                        <div class="clear"></div>
                      </div>
                      <a href="cart.php?act=add&amp;id_barang=<?php echo $data['id_barang']; ?>&amp;ref=detailproduk.php?kd=<?php echo $data['id_barang'];?>"><button type="button" id="button-cart" class="btn btn-primary btn-lg">Add to Cart</button></a>
                    </div>
                    <!-- <script type="text/javascript">
                      function nilai(){

                      }
                    </script> -->
                  </div>
                </div>
                
                <hr>
                <!-- AddThis Button BEGIN -->
                
                
                <!-- AddThis Button END -->
              </div>
            </div>
            
            
              
              
              </div>
            </div>
            
                
              </div>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        
        <!--Right Part End -->
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
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="js/swipebox/lib/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="js/swipebox/src/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
// Elevate Zoom for Product Page image
$("#zoom_01").elevateZoom({
	gallery:'gallery_01',
	cursor: 'pointer',
	galleryActiveClass: 'active',
	imageCrossfade: true,
	zoomWindowFadeIn: 500,
	zoomWindowFadeOut: 500,
	lensFadeIn: 500,
	lensFadeOut: 500,
	loadingIcon: 'image/progress.gif'
	}); 
//////pass the images to swipebox
$("#zoom_01").bind("click", function(e) {
  var ez =   $('#zoom_01').data('elevateZoom');
	$.swipebox(ez.getGalleryList());
  return false;
});
</script>
<!-- JS Part End-->
</body>
</html>