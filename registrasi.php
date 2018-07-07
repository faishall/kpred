<?php require_once("admin/config/koneksi.php");
$hasil = mysqli_query($koneksi, "SELECT id_customer FROM tbl_customer ORDER BY id_customer DESC LIMIT 1");
$data = @mysqli_fetch_array($hasil);
$lastkode = $data['id_customer'];
$noUrut = (int) substr($lastkode, 3, 4);
$noUrut++;
$char = "PLG";
$id = $char . str_pad(strval($noUrut),4,"0",STR_PAD_LEFT);

if(!empty($_SESSION['email']))
{
  header("location:index.php");
}
  
  ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Registrasi</title>
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
<?php 

if (isset($_POST['daftar'])) 
{
  $pass=$_POST['password'];

  $pass1=md5($pass);

  $koneksi->query("INSERT INTO tbl_customer(id_customer, nama,nohp ,email, password) VALUES ('$id','$_POST[nama]','$_POST[notel]','$_POST[email]','$pass1')");

                  
                  echo "<div class='alert alert-info'>Registrasi sukses! silahkan login untuk melakukan transaksi.</div>";
                  echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                 
              }
                 ?>
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
      <div class="row" >
        <!--Middle Part Start-->
        <div id="content" class="col-sm-4" >
          <h3 class="title">Daftar/Registrasi Akun</h3>
          <!-- ISINE -->
          <form action="#" method="POST" >
          <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-user"></i> Detail Personal</h4>
                </div>
                  <div class="panel-body">
                        <fieldset id="account">
                       <div class="form-group required">
                            <label for="input-payment-email" class="control-label">Nama Lengkap</label>
                            <input type="nama" class="form-control" id="input-payment-nama" placeholder="Nama Lengkap" value="" name="nama">
                          </div>
                          <div class="form-group required">
                            <label for="input-payment-fax" class="control-label">No Telepon</label>
                            <input type="number" class="form-control" id="input-payment-fax" placeholder="notel" value="" name="notel">
                          </div>
                           <div class="form-group required">
                            <label for="input-payment-username" class="control-label">Email</label>
                            <input type="email" class="form-control" id="input-payment-username" placeholder="email" value="" name="email">
                          </div>
                          <div class="form-group required">
                            <label for="input-payment-name" class="control-label">Password</label>
                            <input type="password" class="form-control" id="input-payment-name" placeholder="password" value="" name="password">
                          </div>
                        
                        </fieldset>
                      </div>   
                          <div class="pull-right">
                            <input type="submit" class="btn btn-primary" id="button-confirm" value="Registrasi" name="daftar">
                          </div>
                      </form>
                      
          <!-- AKHIRE -->
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
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript">
  
</script>
<!-- JS Part End-->
</body>
</html>