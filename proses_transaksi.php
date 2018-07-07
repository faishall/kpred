<?php
include 'admin/config/koneksi.php';
session_start();
if (isset($_POST['bayar'])) {
	$id_detail=$_POST['transaksi'];
	$total=$_POST['total'];
	$id_customer=$_SESSION['id'];
	// $tgl_transaksi=date("Y-m-d");
    $nama=$_SESSION['nama'];
    $provinsi=$_POST['provinsi'];
    $kota=$_POST['kabupaten'];
    $alamat=$_POST['alamat'].', '.$_POST['kodepos'];
    $berat_total=$_POST['berat']/1000; //gram ke kilo gram
    $ongkir=$_POST['ongkir'];
    $unik=(rand(3,999)); //ambil 3 digit angka acak 0-999 
    $grantotal=$_POST['total']+$unik; 
    //total dipotong 3 angka dari belakang, diganti 000, ditambah kode unik.
    //contoh angka 123000   , kodeunik 999. 123000 > 123999.
    if ($grantotal=='') {
        echo "<script>alert('Harap pilih paket ekspedisi terlebih dahulu.')</script>";
        echo "<script>window.location=('checkout.php?transaksi=$id_detail')</script>";
    }
    else{
        $detail=mysqli_query($koneksi,"INSERT INTO dtl_transaksi (id_det_transaksi,nama,provinsi,kota,alamat,berat_total,ongkir,grand_total,status_bayar)
        VALUES
        ('$id_detail','$nama','$provinsi','$kota','$alamat','$berat_total','$ongkir','$grantotal','Belum Dibayar')");
        
        $total = 0;
        if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;

            $jumlah_berat = $data['berat'] * $val;

            $total += $jumlah_harga;
            $no = 1;

            $transaksi=mysqli_query($koneksi,"INSERT INTO tbl_transaksi (id_customer,id_barang,kuantitas,berat,total,id_det_transaksi,tgl_transaksi) VALUES ('$id_customer','$key','$val','$jumlah_berat','$jumlah_harga','$id_detail',NOW())");
            unset($_SESSION['items'][$key]);
            }
            echo "<script>alert('Transaksi baru berhasil dibuat.')</script>";
            echo "<script>window.location=('detail_transaksi.php?transaksi=$id_detail')</script>";
        }
    }

	
}
?>