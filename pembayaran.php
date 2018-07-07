<?php require_once("admin/config/koneksi.php");
     session_start();
    
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
          
       </table> 

        <!--Middle Part Start-->
        <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-home"></i> Konfirmasi Pembayaran</h4>
                      </div>
                      <div class="panel-body"> 
                        <!-- ONGKIR -->
                        <form method="POST" action="proses_konfirmasi.php">
                        <div class="col-sm-6">
                        <div class="panel-heading">
                          <!-- <h4 class="panel-title"><i class="fa fa-user"></i> PILIH ONGKIR</h4> -->
                          </div>
                          <div class="panel-body">
                          <fieldset id="account">
                            
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">Bank Asal</label>
                              <select class="form-control" name="bank-asal">
                              		<option>--Pilih Bank--</option>
	                                <option>BANK INDONESIA</option>
									<option>PT. BANK RAKYAT INDONESIA (Persero) Tbk</option>
									<option>PT. BANK EKSPOR INDONESIA (PERSERO)</option>
									<option>PT. BANK MANDIRI (PERSERO) Tbk.</option>
									<option>PT. BANK NEGARA INDONESIA 1946 (Persero) Tbk.</option>
									<option>BNI SYARIAH</option>
									<option>PT. BANK DANAMON INDONESIA INDONESIA Tbk</option>
									<option>PT. BANK PERMATA Tbk.</option>
									<option>PT. BANK CENTRAL ASIA Tbk.</option>
									<option>PT. BANK INTERNATIONAL INDONESIA Tbk.</option>
									<option>PT. BANK PAN INDONESIA Tbk. / <option>PT. PANIN BANK Tbk.</option>
									<option>PT. BANK NIAGA Tbk.</option>
									<option>PT. BANK UOB BUANA, Tbk</option>
									<option>PT. LIPPO BANK</option>
									<option>PT. BANK NILAI INTI SARI PENJIMPAN Tbk.</option>
									<option>AMERICAN EXPRESS BANK LTD.</option>
									<option>CITIBANK NA</option>
									<option>JPMORGAN CHASE BANK, NA</option>
									<option>BANK OF AMERICA , NA</option>
									<option>PT. BANK MULTICOR / PT. BANK WINDU KENTJANA INTERNASIONAL</option>
									<option>PT. BANK ARTHA GRAHA INTERNASIONAL, Tbk</option>
									<option>THE BANGKOK BANK PCL</option>
									<option>THE HONGKONG and SHANGHAI BANKING CORP</option>
									<option>THE BANK OF TOKYO MITSUBISHI UFJ LTD.</option>
									<option>PT. BANK SUMITOMO MITSUI INDONESIA</option>
									<option>PT. BANK DBS INDONESIA</option>
									<option>PT. BANK RESONA PERDANIA</option>
									<option>PT. BANK MIZUHO INDONESIA</option>
									<option>STANDARD CHARTERED BANK</option>
									<option>ALGEMENE BANK NEDERLAND AMRO BANK N.V. / ABN AMRO BANK NV.</option>
									<option>PT. BANK CAPITAL INDONESIA</option>
									<option>PT. BANK BNP PARIBAS INDONESIA</option>
									<option>PT. BANK UOB INDONESIA</option>
									<option>KOREA EXCHANGE BANK DANAMON / PT. BANK KEB INDONESIA</option>
									<option>PT. BANK RABOBANK INTERNATIONAL INDONESIA</option>
									<option>PT. ANZ PANIN BANK</option>
									<option>DEUTSCHE BANK AG</option>
									<option>PT. BANK WOORI INDONESIA</option>
									<option>BANK OF CHINA LIMITED</option>
									<option>PT. BANK BUMI ARTA</option>
									<option>PT. BANK EKONOMI RAHARJA</option>
									<option>PT. BANK ANTAR DAERAH</option>
									<option>PT. HAGABANK INDONESIA / PT. BANK HAGA</option>
									<option>PT. BANK IFI</option>
									<option>PT. BANK CENTURY Tbk.</option>
									<option>BANK MAYAPADA INTERNATIONAL / PT. BANK MAYAPADA Tbk.</option>
									<option>PT. BANK PEMBANGUNAN DAERAH JAWA BARAT / PT. BANK PEMBANGUNAN DAERAH JABAR DAN BANTEN</option>
									<option>PT. BANK PEMBANGUNAN DAERAH DKI JAKARTA / BANK DKI</option>
									<option>PT. BANK PEMBANGUNAN DAERAH DIY / YOGYAKARTA</option>
									<option>PT. BANK PEMBANGUNAN DAERAH JAWA TENGAH</option>
									<option>PT. BANK PEMBANGUNAN DAERAH JATIM</option>
									<option>PT. BANK PEMBANGUNAN DAERAH JAMBI</option>
									<option>PT. BPD ISTIMEWA ACEH</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SUMUT</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SUMATERA BARAT / PT. BANK NAGARI</option>
									<option>PT. BANK PEMBANGUNAN DAERAH RIAU</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SUMATERA</option>
									<option>PT. BANK PEMBANGUNAN DAERAH LAMPUNG</option>
									<option>PT. BANK PEMBANGUNAN DAERAH KALIMANTAN SELATAN</option>
									<option>PT. BANK PEMBANGUNAN DAERAH KALIMANTAN BARAT</option>
									<option>PT. BANK PEMBANGUNAN DAERAH KALIMANTAN TIMUR</option>
									<option>PT. BANK PEMBANGUNAN DAERAH KALTENG</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SULAWESI SELATAN</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SULAWESI UTARA</option>
									<option>PT. BANK PEMBANGUNAN DAERAH NTB / NUSA TENGGARA BARAT</option>
									<option>PT. BANK PEMBANGUNAN DAERAH BALI</option>
									<option>BANK PEMBANGUNAN DAERAH NUSA TENGGARA TIMUR</option>
									<option>PT. BANK PEMBANGUNAN DAERAH MALUKU</option>
									<option>PT. BANK PEMBANGUNAN DAERAH PAPUA</option>
									<option>PT. BPD BENGKULU</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SULAWESI TENGAH</option>
									<option>PT. BANK PEMBANGUNAN DAERAH SULAWESI TENGGARA</option>
									<option>PT. BANK NUSANTARA PARAHYANGAN</option>
									<option>PT. BANK SWADESI Tbk.</option>
									<option>BANK MUAMALAT INDONESIA / PT. BANK MUAMALAT INDONESIA</option>
									<option>PT. BANK MESTIKA DHARMA</option>
									<option>PT. BANK METRO EKSPRESS</option>
									<option>PT. BANK SINARMAS</option>
									<option>PT. BANK MASPION INDONESIA</option>
									<option>PT. BANK HAGAKITA</option>
									<option>PT. BANK GANESHA</option>
									<option>PT.HALIM INDONESIA BANK / PT. BANK HALIM INDONESIA / PT. BANK ICBC INDONESIA</option>
									<option>PT. BANK HARMONI INTERNASIONAL</option>
									<option>PT. BANK KESAWAN</option>
									<option>PT. BANK TABUNGAN NEGARA (Persero) / PT. BANK TABUNGAN NEGARA (PERSERO) SYARIAH</option>
									<option>PT. BANK HS 1906 / PT. Bank Himpunan Saudara</option>
									<option>B.T. PENSIUNAN NASIONAL / <option>PT. BANK BTPN / PT. BANK TABUNGAN PENSIUNAN NASIONAL</option>
									<option>PT. BANK SWAGUNA</option>
									<option>PT. BANK JASA ARTA</option>
									<option>PT. BANK MEGA Tbk.</option>
									<option>PT. BANK UMUM KOPERASI INDONESIA (BUKOPIN) / PT. BANK BUKOPIN Tbk.</option>
									<option>PT. BANK SYARIAH MANDIRI Tbk.</option>
									<option>PT. BANK BISNIS INTERNATIONAL</option>
									<option>PT. BANK SRI PARTHA</option>
									<option>PT. BANK JASA JAKARTA</option>
									<option>PT. BANK BINTANG MANUNGGAL / PT. BANK HANA</option>
									<option>PT. BANK BUMI PUTERA Tbk.</option>
									<option>PT. BANK YUDHA BHAKTI</option>
									<option>PT. BANK MITRANIAGA</option>
									<option>PT. AGRONIAGA BANK</option>
									<option>PT. BANK INDOMONEX</option>
									<option>PT. BANK ROYAL INDONESIA</option>
									<option>ALFINDO SEJAHTERA BANK / PT. BANK ALFINDO</option>
									<option>PT. BANK SYARIAH MEGA INDONESIA</option>
									<option>PT. BANK INA PERDANA</option>
									<option>PT. BANK HARFA</option>
									<option>PT. PRIMA MASTER BANK</option>
									<option>PT. BANK PERSYARIKATAN INDONESIA</option>
									<option>PT. BANK DIPO INTERNATIONAL</option>
									<option>PT. BANK AKITA</option>
									<option>PT. BANK LIMAN INTERNATIONAL</option>
									<option>PT. ANGLOMAS INTERNATIONAL BANK</option>
									<option>PT. BANK KESEJAHTERAAN EKONOMI</option>
									<option>PT. BANK UIB</option>
									<option>PT. BANK ARTOS INDONESIA</option>
									<option>PT. BANK PURBA DANARTA</option>
									<option>PT. BANK MULTIARTA SENTOSA</option>
									<option>PT. BANK MAYORA INDONESIA</option>
									<option>PT. BANK INDEX SELINDO</option>
									<option>PT. BANK EKSEKUTIF INTERNASIONAL</option>
									<option>PT. CENTRATAMA NASIONAL BANK</option>
									<option>PT. BANK FAMA INTERNATIONAL</option>
									<option>PT. BANK SINAR HARAPAN BALI</option>
									<option>PT. BANK VICTORIA INTERNATIONAL</option>
									<option>PT. BANK HARDA INTERNASIONAL</option>
									<option>PT. BANK FINCONESIA</option>
									<option>PT. BANK MAYBANK INDOCORP</option>
									<option>PT. BANK OCBC INDONESIA</option>
									<option>PT. BANK CHINATRUST INDONESIA</option>
									<option>PT. BANK COMMONWEALT</option>
                              </select>
                            </div>
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">No. Rekening</label>
                              <input type="number" name="rekening" class="form-control" required>
                            </div>
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">Atas Nama</label>
                              <input type="text" name="pengirim" class="form-control" required>
                            </div>
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">Jumlah Nominal</label>
                              <input type="number" name="jumlah" class="form-control" required>
                            </div>
                            <div class="form-group tanggal">
                              <label for="input-payment-fax" class="control-label">Tanggal Pembayaran</label>
                              <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <input type="hidden" name="trans" value="<?php echo $_GET['transaksi']; ?>">
                          </fieldset>
                        </div>  
                      </div>
                      
                        <!-- AKHIR ONGKIR -->
                        <!-- ALAMAT -->
                        
                          <div class="col-sm-6">
                               <!-- <form action="#" method="POST" > -->
                                <div class="panel-heading">

                                <!-- <h4 class="panel-title"><i class="fa fa-user"></i> </h4> -->
                                </div>
                                <div class="panel-body">
                                    <fieldset id="info-alamat">
                                      <div class="form-group required">
			                              <label for="input-payment-fax" class="control-label">Bank Tujuan</label>
			                              <select type="text" name="bank-tujuan" class="form-control">
			                              <option>--Pilih Bank--</option>
			                              		<option>PT. BANK RAKYAT INDONESIA (Persero) Tbk</option>
												<option>PT. BANK MANDIRI (PERSERO) Tbk.</option>
												<option>PT. BANK CENTRAL ASIA Tbk.</option>
			                              </select>
			                            </div>
			                            <div class="form-group required">
			                              <label for="input-payment-fax" class="control-label">Bukti Transfer</label>
			                              <input type="file" name="bukti" class="form-control" accept="image/*">
			                            </div>
                                      </fieldset>
                                      <input type="submit" name="konfirm" class="form-control btn-primary" value="Konfirmasi">
                                      
                                    </div>  
                                </form>
                          </div>
                          <!-- alamat -->
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

<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css" />
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
<script>
	$(function(){
    $(".tanggal").datepicker();
  });
</script>
<!-- JS Part End-->
</body>
</html>