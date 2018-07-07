<?php require_once("admin/config/koneksi.php");
error_reporting(0);
    session_start();
    if(empty($_SESSION['email']))
    {
      header('location:login.php');
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Checkout</title>
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
            
            
            <li class="custom-link"><a href="index.php">CONTINUE SHOPPING</a></li>
            
            
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
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Barang Yang Anda Beli</h1>
          <div class="row">
            <div class="col-sm-4">
              
              
      

            </div>
               <form method="POST" action="proses_transaksi.php">
                <div class="col-sm-12">
                
                  <div class="panel panel-default">
                  
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                    </div>
                    
                      <div class="panel-body">
                      
                        <div class="table-responsive">

                          <table class="table table-bordered">
                           
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
                            //MENAMPILKAN DETAIL KERANJANG BELANJA//
                                    
                        $total = 0;
                        //mysql_select_db($database_conn, $conn);
                        if (isset($_SESSION['items'])) {
                            foreach ($_SESSION['items'] as $key => $val) {
                                $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang = '$key'");
                                $data = mysqli_fetch_array($query);
                                if ($val>1) {
                                  $q=2;
                                }
                                $ongkir=json_encode('tarif');
                                if (empty($ongkir)) {
                                  $ongkir=0;
                                }
                                $jumlah_harga = $data['harga'] * $val + $ongkir;
                                $total += $jumlah_harga;
                                $no = 1;

                                $jumlah_berat=$data['berat']*$val;
                                $berat_total += ceil($jumlah_berat)*1000; //pembulatan ke atas dgn ctail, di konversi kg ke gram
                                
                                ?>
                              <tr>
                                <td class="text-center">
                                  <a href="produk.php">
                                    <img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px">
                                  </a>
                                </td>
                                <td class="text-center"><a href="produk.php"><?php echo $data['nama_barang']; ?></a></td>
                                <td class="text-center"><a href="produk.php"><?php echo number_format($val); ?></a></td>
                                <td class="text-center"><?php echo $jumlah_berat; ?> Kg</td>
                                <td class="text-right"><?php echo number_format($jumlah_harga); ?></td>
                              </tr>
                                <?php
                          
                                }
                                  
                                }?>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td class="text-right" colspan="5"><strong>Total:</strong><p id="tampil-total"><?php echo $total; ?></p> <!-- ini hanya DOM --></td>
                                <input type="hidden" name="transaksi" id="trans" value="<?php echo  $_GET['transaksi']  ?>">
                                <input type="hidden" name="berat" id="berat" value="<?php echo  $berat_total  ?>">
                                <input type="hidden" name="sub-total" id="sub-total" value="<?php echo  $total  ?>"> <!-- ini sumber total -->
                                <input type="hidden" name="ongkir" value="<?php echo $ongkir ?>">
                                <input type="hidden" name="total" id="total">

                              </tr>
                            </tfoot>
                                                           
                          </table>

                        </div>
                  
                      </div>
                         
                  </div>
                

                </div>     


                  <!-- biaya -->
                  <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-home"></i> Alamat Pengirim</h4>
                      </div>
                      <div class="panel-body">
                        <!-- ONGKIR -->
                        <div class="col-sm-6">
                        <div class="panel-heading">
                          <!-- <h4 class="panel-title"><i class="fa fa-user"></i> PILIH ONGKIR</h4> -->
                          </div>
                          <div class="panel-body">
                          <fieldset id="account">
                            
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">Provinsi</label>
                              <select class="form-control" name="provinsi" id="provinsi" onchange="fKota()" style="width: 100%;">
                                <option>Pilih Provinsi Tujuan</option>
                                <?php 
                                $provinsi=mysqli_query($koneksi,"SELECT id_provinsi, nama_daerah FROM tbl_daerah WHERE id_kota='0'");
                                while ($prov=mysqli_fetch_array($provinsi)) {?>
                                  <option value="<?php echo $prov['id_provinsi']; ?>"><?php echo $prov['nama_daerah']; ?></option>
                                <?php ; } ?>
                              </select>
                            </div>
                            <div class="form-group required">
                              <label for="input-payment-fax" class="control-label">Kabupaten/Kota</label>
                              <select class="form-control" name="kabupaten" id="kabupaten">
                                <option>Pilih Kota Tujuan</option>
                              </select>
                            </div>

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
                                        <label for="input-payment-username" class="control-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" placeholder="Alamat Lengkap" value="" name="alamat" ></textarea>
                                      </div>
                                      <div class="form-group required">
                                        <label for="input-payment-name" class="control-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="kodepos" placeholder="Kode Pos" value="" name="kodepos" >
                                      </div>
                                        
                                      </fieldset>
                                    </div> 
                                    <div class="panel-heading">

                                    <h4 class="panel-title"><i class="fa fa-user"></i> Jasa Ekspedisi</h4>
                                    </div>
                                    <div class="panel-body">
                                      <fieldset id="info-alamat">
                                        <div class="form-group required"  id="cek">
                                          <label for="input-payment-name" class="control-label">Kurir</label>
                                          <select class="form-control" name="kurir" id="kurir">
                                          <option value="">Pilih Kurir</option>
                                          <option value="jne">JNE</option>
                                          <option value="tiki">TIKI</option>
                                          <option value="pos">POS</option>
                                          </select>
                                        </div>
                                      </fieldset>
                                    </div>  
                              <!-- </form> -->
                              <script>
                              // kota otomatis
                              function fKota(){
                                document.getElementById('kabupaten').disabled=false;
                                <?php
                                // membaca semua kelas
                                $provinsi2 = mysqli_query($koneksi,  "SELECT id_provinsi FROM tbl_daerah WHERE id_kota=0");
                                while ($k = mysqli_fetch_array($provinsi2))
                                {
                                  $prov2 = $k['id_provinsi'];
                                  // cek isi kelas
                                  echo "if (document.getElementById('provinsi').value == '".$prov2."')";
                                  echo "{";
                                  // membuat option kota untuk masing-masing propinsi
                                  $kota = mysqli_query($koneksi,  "SELECT id_kota, nama_daerah FROM tbl_daerah WHERE id_provinsi = '$prov2' AND id_kota!=0 ORDER BY id_kota ASC");
                                  $isi = "document.getElementById('kabupaten').innerHTML = '";
                                  $isi .= "<option>Pilih Kota Tujuan</option>";
                                  while ($kot = mysqli_fetch_array($kota))
                                  {
                                    $isi .= "<option value=\"".$kot['id_kota']."\">".$kot['nama_daerah']."</option>";
                                  }
                                  $isi .= "'";
                                  echo $isi;
                                  echo "}\n";
                                }
                                ?>
                              }
                              //kota otomatis
                                   
                              </script>
                          </div>
                          <!-- alamat -->
                          
                          <!-- fungsi -->
                          <script src="https://php.didinstudio.com/rajaongkir/vendor/jquery/jquery.min.js"></script>
                          <script src="https://php.didinstudio.com/rajaongkir/vendor/bootstrap/js/bootstrap.min.js"></script>
                          <script src="https://php.didinstudio.com/rajaongkir/js/seribu.js"></script>
                          <script type="text/javascript">
                          $(document).ready(function(){
                            $("#loading").hide();

                            $("#cek").change(function(){
                              $("#loading").show();
                              $("#kurirname").hide();
                              $("#details").hide();
                              $("#ongkos").hide();
                              //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax 
                              var asal = $('#asal').val();
                              var kab = $('#kabupaten').val();
                              var kurir = $('#kurir').val();
                              var berat = $('#berat').val();
                              
                                  $.ajax({
                                      type : 'POST',
                                      url : 'cek_ongkir.php',
                                      data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
                                  success: function (data) {
                                    $("#kurirname").show();
                                    $("#details").show();
                                    $("#ongkos").show();
                                    
                                    var obj=$.parseJSON(data);
                                    var kurirname=obj['rajaongkir'].results[0].name;
                                    $("#kurirname").text(kurirname);
                                    
                                    var origin=obj['rajaongkir'].origin_details.city_name;
                                    var destination=obj['rajaongkir'].destination_details.city_name;
                                    var weight=obj['rajaongkir'].query.weight;
                                    weight=seribu(weight,",", ".",0);
                                    $("#details").html('<thead style="background-color:green;color:white;"><tr><th>Kota/Kabupaten Asal</th><th>Kota/Kabupaten Tujuan</th></tr></thead><tbody><tr><td>'+origin+'</td><td>'+destination+'</td></tr></tbody>');
                                    // <th>Berat (Gram)</th>
                                    // <td>'+weight+'</td>
                                    var service=[];
                                    var description=[];
                                    var ongkos=[];
                                    var sampai=[];
                                    var kurirkode=obj['rajaongkir'].results[0].code;
                                    
                                    var n=obj['rajaongkir'].results[0].costs;
                                    for(i=0;i<n.length;i++){
                                      service[i]=obj['rajaongkir'].results[0].costs[i].service;
                                      description[i]=obj['rajaongkir'].results[0].costs[i].description;
                                      ongkos[i]=obj['rajaongkir'].results[0].costs[i].cost[0].value;
                                      // ongkos[i]=seribu(ongkos[i],",", ".",0);
                                      
                                      sampai[i]=obj['rajaongkir'].results[0].costs[i].cost[0].etd;
                                      if(kurirkode!='pos'){
                                        sampai[i]=sampai[i]+' HARI';
                                      }
                                    }

                                    if(n.length==1){
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir0" onclick="fOngkir0(this)" value="'+ongkos[0]+'"></td></tr></tbody>');
                                    } else if(n.length==2){
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir0" onclick="fOngkir0(this)" value="'+ongkos[0]+'"></td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir1" onchange="fOngkir1(this)" value="'+ongkos[1]+'"></td></tr></tbody>');
                                    } else if(n.length==3){
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir0" onclick="fOngkir0(this)" value="'+ongkos[0]+'"></td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir1" onclick="fOngkir1(this)" value="'+ongkos[1]+'"></td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir2" onchange="fOngkir2(this)" value="'+ongkos[2]+'"></td></tr></tbody>');
                                    } else if(n.length==4){
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir0" onclick="fOngkir0(this)" value="'+ongkos[0]+'"></td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir1" onclick="fOngkir1(this)" value="'+ongkos[1]+'"></td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir2" onclick="fOngkir2(this)" value="'+ongkos[2]+'"></td></tr><tr><td style="text-align:left;">'+service[3]+'</td><td>'+description[3]+'</td><td>'+sampai[3]+'</td><td style="text-align:right;">'+ongkos[3]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir3" onchange="fOngkir3(this)" value="'+ongkos[3]+'"></td></tr></tbody>');
                                    } else if(n.length==5){
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir0" onclick="fOngkir0(this)" value="'+ongkos[0]+'"></td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir1" onclick="fOngkir1(this)" value="'+ongkos[1]+'"></td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir2" onclick="fOngkir2(this)" value="'+ongkos[2]+'"></td></tr><tr><td style="text-align:left;">'+service[3]+'</td><td>'+description[3]+'</td><td>'+sampai[3]+'</td><td style="text-align:right;">'+ongkos[3]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir3" onclick="fOngkir3(this)" value="'+ongkos[3]+'"></td></tr><tr><td style="text-align:left;">'+service[4]+'</td><td>'+description[4]+'</td><td>'+sampai[4]+'</td><td style="text-align:right;">'+ongkos[4]+'</td><td><input type="radio" name="ongkir" id="kirim-ongkir4" onchange="fOngkir4(this)" value="'+ongkos[4]+'"></td></tr></tbody>');
                                    } else {
                                      $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th><th style="text-align:right;">Opsi</th></tr></thead><tbody><tr><td style="text-align:left;color:red;">KOSONG</td><td style="color:red;">KOSONG</td><td style="color:red;">KOSONG</td><td style="text-align:right;color:red;">KOSONG</td><td style="text-align:right;color:red;"></td></tr></tbody>');
                                    }
                                    
                                    //$("#ongkir").text(data);
                                    $("#loading").hide();
                                }
                                    });
                            });
                          });
                          </script>
                          <script>
                          function fOngkir0($o){
                          var gt0=document.getElementById('sub-total').value;
                          var o0=document.getElementById('kirim-ongkir0').value;
                          document.getElementById('tampil-total').innerHTML=parseInt(o0)+parseInt(gt0); //DOM
                          document.getElementById('total').value=parseInt(o0)+parseInt(gt0); //total asli
                        }
                        function fOngkir1($o){
                          var gt1=document.getElementById('sub-total').value;
                          var o1=document.getElementById('kirim-ongkir1').value;
                          document.getElementById('tampil-total').innerHTML=parseInt(o1)+parseInt(gt1); //DOM
                          document.getElementById('total').value=parseInt(o1)+parseInt(gt1); //total asli
                        }
                        function fOngkir2($o){
                          var gt2=document.getElementById('sub-total').value;
                          var o2=document.getElementById('kirim-ongkir2').value;
                          document.getElementById('tampil-total').innerHTML=parseInt(o2)+parseInt(gt2); //DOM
                          document.getElementById('total').value=parseInt(o2)+parseInt(gt2); //total asli
                        }
                        function fOngkir3($o){
                          var gt3=document.getElementById('sub-total').value;
                          var o3=document.getElementById('kirim-ongkir3').value;
                          document.getElementById('tampil-total').innerHTML=parseInt(o3)+parseInt(gt3); //DOM
                          document.getElementById('total').value=parseInt(o3)+parseInt(gt3); //total asli
                        }
                        function fOngkir4($o){
                          var gt4=document.getElementById('sub-total').value;
                          var o4=document.getElementById('kirim-ongkir4').value;
                          document.getElementById('tampil-total').innerHTML=parseInt(o4)+parseInt(gt4); //DOM
                          document.getElementById('total').value=parseInt(o4)+parseInt(gt4); //total asli
                        }
                        </script>
                      </div>
                  </div>
                </div>
                <!-- akhir sebenarnya -->

                  <!-- akhir biaya -->
                <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                    </div>
                      <div class="panel-body">
                              <div id="loading"><img src="image/progress.gif"></div>
                              <p id="kurirname" style="font-weight:700;text-transform:uppercase;color:green;"></p>
                              <table id="details" class="table table-bordered table-responsive"></table>
                              <table id="ongkos" class="table table-bordered table-responsive"></table>
                              <div id="ongkir"></div>
                        <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                      
                        
                        <div class="buttons">
                          <div class="pull-right">
                          <button name="bayar" type="submit" class="btn btn-info">Pembayaran</button>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                </form>
              </div>
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
<script type="text/javascript" src="js/tarif.js"></script>
?>
<!-- JS Part End-->
</body>
</html>