<?php 
include 'config/koneksi.php';
session_start();
if(empty($_SESSION['username']) AND empty ($_SESSION['password']))
{
    echo'
        <script language="javascript" type="text/javascript">
        alert("Untuk mengakses halaman ini,anda harus Login!!!!");
        </script>';
    header('location:index.php');  
    // include "main.php";
}
else
{
//kembalikan data  
// $normalisasi = mysqli_query($koneksi, "UPDATE tbl_barang
//     INNER JOIN tbl_transaksi 
//     ON tbl_barang.id_barang=tbl_transaksi.id_barang
//     LEFT JOIN dtl_transaksi 
//     ON tbl_transaksi.id_det_transaksi=dtl_transaksi.id_det_transaksi
//     SET stok=stok+kuantitas
//     WHERE CURRENT_TIMESTAMP > tgl_transaksi + INTERVAL 24 HOUR AND status_bayar='Belum Dibayar' AND tbl_transaksi.id_barang=tbl_barang.id_barang");
    
// //ubah status transaksi
// $kadaluarsa = mysqli_query($koneksi, "UPDATE dtl_transaksi 
//     INNER JOIN tbl_transaksi 
//     ON dtl_transaksi.id_det_transaksi=tbl_transaksi.id_det_transaksi 
//     SET status_bayar='Kadaluarsa' 
//     WHERE CURRENT_TIMESTAMP > tgl_transaksi + INTERVAL 24 HOUR AND status_bayar='Belum Dibayar'");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin| Dshboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="main.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Redforce Com
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>admin<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar04.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Admin redfroce
                                        <small>Januari 2018</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar04.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="main.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=dataadmin"">
                                <i class="fa fa-user"></i> <span>Admin</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                         <li>
                            <a href="main.php?halaman=datapelanggan"">
                                <i class="fa fa-user"></i> <span>Pelanggan</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=databarang"">
                                <i class="fa fa-file-o"></i> <span>Barang</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                         <li>
                            <a href="main.php?halaman=datamerek"">
                                <i class="fa fa-th"></i> <span>Merek</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=dataiklan"">
                                <i class="fa fa-th"></i> <span>Iklan/ Sponsor</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=datatransaksi"">
                                <i class="fa fa-th"></i> <span>Transaksi</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=detailtransaksi"">
                                <i class="fa fa-th"></i> <span>Detail Transaksi</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li>
                            <a href="main.php?halaman=laporan"">
                                <i class="fa fa-th"></i> <span>Laporan</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                         <li>
                            <a href="main.php?halaman=pengiriman"">
                                <i class="fa fa-th"></i> <span>Pengiriman</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        
                        <div class="col-xs-12" id="tampilcoy">
                            <!-- small box -->
                          <!-- ISIIIII KONTEN -->
                          <?php 
                if (isset($_GET ['halaman']))
                {
                    if ($_GET['halaman']=="datapelanggan")
                    {
                        include 'datapelanggan.php';
                    }
                    elseif ($_GET['halaman']=="dataadmin") 
                    {
                        include 'dataadmin.php';
                    }
                    elseif ($_GET['halaman']=="databarang") 
                    {
                        include 'databarang.php';
                    }
                   elseif ($_GET['halaman']=="detailtransaksi") 
                    {
                        include 'detailtransaksi.php';
                    }
                    elseif ($_GET['halaman']=="datamerek") 
                    {
                        include 'datamerek.php';
                    }
                    elseif ($_GET['halaman']=="dataiklan") 
                    {
                        include 'dataiklan.php';
                    }
                    elseif ($_GET['halaman']=="datatransaksi") 
                    {
                        include 'datatransaksi.php';
                    }
                    elseif ($_GET['halaman']=="updatedatatransaksi") 
                    {
                        include 'updatedatatransaksi.php';
                    }
                    elseif ($_GET['halaman']=="hapusdatatransaksi") 
                    {
                        include 'hapusdatatransaksi.php';
                    }
                    
                     elseif ($_GET['halaman']=="tambahpelanggan") 
                    {
                        include 'tambahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="tambahadmin") 
                    {
                        include 'tambahadmin.php';
                    }
                     elseif ($_GET['halaman']=="tambahbarang") 
                    {
                        include 'tambahbarang.php';
                    }
                     elseif ($_GET['halaman']=="tambahalamat") 
                    {
                        include 'tambahalamat.php';
                    }
                    
                    elseif ($_GET['halaman']=="tambahiklan") 
                    {
                        include 'tambahiklan.php';
                    }
                    elseif ($_GET['halaman']=="tambahmerek") 
                    {
                        include 'tambahmerek.php';
                    }
                     elseif ($_GET['halaman']=="tambahtransaksi") 
                    {
                        include 'tambahtransaksi.php';
                    }
                    
                    elseif ($_GET['halaman']=="editiklan") 
                    {
                        include 'editiklan.php';
                    }
                     elseif ($_GET['halaman']=="editbarang") 
                    {
                        include 'editbarang.php';
                    }
                     elseif ($_GET['halaman']=="editalamat") 
                    {
                        include 'editalamat.php';
                    }
                     elseif ($_GET['halaman']=="hapusalamat") 
                    {
                        include 'hapusalamat.php';
                    }
                      elseif ($_GET['halaman']=="editpelanggan") 
                    {
                        include 'editpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="editadmin") 
                    {
                        include 'editadmin.php';
                    }
                    elseif ($_GET['halaman']=="editmerek") 
                    {
                        include 'editmerek.php';
                    }
                     elseif ($_GET['halaman']=="hapusbarang") 
                    {
                        include 'hapusbarang.php';
                    }
                    elseif ($_GET['halaman']=="hapuspelanggan") 
                    {
                        include 'hapuspelanggan.php';
                    }
                    elseif ($_GET['halaman']=="hapusiklan") 
                    {
                        include 'hapusiklan.php';
                    }
                    elseif ($_GET['halaman']=="hapusadmin") 
                    {
                        include 'hapusadmin.php';
                    }
                    elseif ($_GET['halaman']=="hapusmerek") 
                    {
                        include 'hapusmerek.php';
                    }
                    elseif ($_GET['halaman']=="hapustransaksi") 
                    {
                        include 'hapustransaksi.php';
                    }
                     elseif ($_GET['halaman']=="edittransaksi") 
                    {
                        include 'edittransaksi.php';
                    }
                    
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="laporan") 
                    {
                        include 'laporan1.php';
                    }
                    elseif ($_GET['halaman']=="pengiriman") 
                    {
                        include 'pengiriman.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                 ?>
                        </div><!-- ./col -->
                        
                    </div><!-- /.row -->

            

                    <!-- Main row -->
                

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>
<?php } ?>