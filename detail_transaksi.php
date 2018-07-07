<?php require_once("admin/config/koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } 
    $detail=mysqli_query($koneksi,"SELECT gambar, nama_barang, kuantitas, tbl_transaksi.berat, total FROM tbl_transaksi
                      INNER JOIN tbl_barang ON tbl_transaksi.id_barang=tbl_barang.id_barang
                      WHERE id_det_transaksi='$_GET[transaksi]'");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Informasi Pengiriman</title>
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
            <div id="logo"><a href="index.php"><img class="img-responsive" src="image/redforce1.png" title="Redfroce" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
         
    </header>
    <!-- Header End-->
    <!-- Main Menu Start-->
    <div class="container">
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="Home" href="index.php"><span></span></a></li>
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
        <div class="col-sm-12">
          
            <div class="panel panel-default">
            
              <div class="panel-heading">
                <strong class="panel-title"><i class="fa fa-shopping-cart"></i> Informasi Barang</strong>
              </div>
              
                <div class="panel-body">
                
                  <div class="table-responsive">

                    <table class="table">
                     
                      <thead>
                        <tr>
                          <td class="text-center">Image</td>
                          <td class="text-center">Product Name</td>
                          <td class="text-center">Quantity</td>
                          <td class="text-center">Weight</td>
                          <td class="text-right">Unit Price</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      while ($data=mysqli_fetch_array($detail)) {?>
                        <tr>
                          <td class="text-center">
                            <a href="produk.php">
                              <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px">
                            </a>
                          </td>
                          <td class="text-center"><?php echo $data['nama_barang']; ?></td>
                          <td class="text-center"><?php echo $data['kuantitas']; ?></td>
                          <td class="text-center"><?php echo $data['berat']; ?> Kg</td>
                          <td class="text-right"><?php echo number_format($data['total']); ?></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                                                     
                    </table>

                  </div>
              </div>
          </div>
        </div>
        <!--Middle Part Start-->
        <div id="content" class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong class="panel-title"><i class="fa fa-shopping-cart"></i> Informasi Pembeli</strong>
                </div>
              <div class="panel-body">
                  <div class="table-responsive">
                    <?php 
                    //pembayaran
                    $detail3=mysqli_query($koneksi,"SELECT * FROM dtl_transaksi INNER JOIN tbl_transaksi ON dtl_transaksi.id_det_transaksi=tbl_transaksi.id_det_transaksi WHERE dtl_transaksi.id_det_transaksi='$_GET[transaksi]'");
                    $data3=mysqli_fetch_array($detail3);
                    if ($data3['status_bayar']=='Menunggu') {
                      $warna='orange';
                    }
                    if ($data3['status_bayar']=='Dibayar') {
                      $warna='green';
                    }
                    elseif ($data3['status_bayar']=='Kadaluarsa' OR $data3['status_bayar']=='Batal') {
                      $warna='red';
                    }
                    else{}
                    //pembeli
                    $detail2=mysqli_query($koneksi,"SELECT * FROM tbl_transaksi 
                    INNER JOIN tbl_customer ON tbl_transaksi.id_customer=tbl_customer.id_customer 
                    WHERE id_det_transaksi='$_GET[transaksi]'");
                    $data2=mysqli_fetch_array($detail2);
                    $pro=mysqli_fetch_array(mysqli_query($koneksi,"SELECT nama_daerah FROM tbl_daerah WHERE id_provinsi='$data3[provinsi]'"));
                    $kot=mysqli_fetch_array(mysqli_query($koneksi,"SELECT nama_daerah FROM tbl_daerah WHERE id_kota='$data3[kota]'"));
                    ?>
                    <table class="table" style="height: 330px">
                      <tbody>
                        <tr>
                          <td class="text-left">Nama Pembeli:</td>
                          <td class="text-left"><h4><?php echo $data2['nama'] ?></h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Provinsi:</td>
                          <td class="text-left"><h4><?php echo $pro['nama_daerah'] ?></h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Kota:</td>
                          <td class="text-left"><h4><?php echo $kot['nama_daerah'] ?></h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Alamat:</td>
                          <td class="text-left"><h4><?php echo $data3['alamat'] ?></h4></td>
                        </tr>
                        
                      </tbody>
                                                     
                    </table>

                  </div>
                 
              </div>
            </div>
        </div>
        <!-- detail -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong class="panel-title"><i class="fa fa-shopping-cart"></i> Detail Pembayaran</strong>
                </div>
              <div class="panel-body">
                  <div class="table-responsive">
                    <?php 
                   
                    ?>
                    <table class="table" style="height: 330px">
                      <tbody>
                        <tr>
                          <td class="text-left">Berat Total:</td>
                          <td class="text-left"><h4><?php echo $data3['berat_total'] ?> Kg</h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Ongkos Kirim:</td>
                          <td class="text-left"><h4>Rp. <?php echo number_format($data3['ongkir']) ?>,-</h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Kode Unik:</td>
                          <td class="text-left"><h4><?php echo substr($data3['grand_total'],-3) ?></h4></td>
                        </tr>
                        <tr>
                          <td class="text-left">Jumlah yang harus dibayar:</td>
                          <td class="text-left"><h4 style="color: red">Rp. <?php echo number_format($data3['grand_total']) ?>,-</h4>
                          <br>*Harap transfer dengan jumlah yang tepat agar proses transaksi berjalan dengan lancar.</td>
                        </tr>
                        <tr>
                          <td class="text-left">Status:</td>
                          <td class="text-left">
                            <h4 style="color: <?php echo $warna ?>"><strong><?php echo $data3['status_bayar'] ?></strong></h4>
                            <?php 
                            $konfirm=mysqli_query($koneksi, "SELECT * FROM dtl_transaksi WHERE id_det_transaksi='$_GET[transaksi]'");
                            $kon=mysqli_fetch_array($konfirm);
                            if (!empty($konfirm) AND $kon['status_bayar']=='Belum Dibayar') {
                            ?>
                            <span><a href="pembayaran.php?transaksi=<?php echo $_GET['transaksi'] ?>" class="btn btn-primary">KONFIRMASI PEMBAYARAN</a></span>
                            <?php }?>
                          </td>
                        </tr>
                      </tbody>
                                                     
                    </table>

                  </div>
                 
              </div>
            </div>
        </div>
        <!-- detail -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong class="panel-title"><i class="fa fa-shopping-cart"></i> Detail Pembayaran</strong>
                </div>
              <div class="panel-body">
                  <div class="table-responsive">
                    <h4>Silakan lakukan pembayaran ke salah satu rekening Bank berikut:</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="text-center" >
                            <img class="text-center" src="image/bri.png" title="MarketShop" alt="MarketShop" width="200px"/>
                          </td>
                          <td class="text-center">
                            <img class="text-center" src="image/bca.png" title="MarketShop" alt="MarketShop" width="200px"/>
                          </td>
                          <td class="text-center">
                            <img class="text-center" src="image/mandiri.png" title="MarketShop" alt="MarketShop" width="200px"/>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center" >
                            No. Rekening: <h4>4214xxxxxxxxxx</h4>
                            <br>
                            a/n <h4>REDFORCE COMPUTER</h4>
                          </td>
                          <td class="text-center">
                            No. Rekening: <h4>4214xxxxxxxxxx</h4>
                            <br>
                            a/n <h4>REDFORCE COMPUTER</h4>
                          </td>
                          <td class="text-center">
                            No. Rekening: <h4>4214xxxxxxxxxx</h4>
                            <br>
                            a/n <h4>REDFORCE COMPUTER</h4>
                          </td>
                        </tr>
                      </tbody>
                                                     
                    </table>

                  </div>
                 
              </div>
            </div>
        </div>
        <!-- detail -->
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
            <p>Marketshop Ecommerce Template © 2019 | Template By <a> Redfroce Computer </a></p>
          </div>
          
        </div>
       
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
  
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