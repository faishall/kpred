<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 8px 13px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<h1>Laporan Transaksi</h1>
<div class="dropdown">
  <button class="dropbtn">Transaksi Bunlan</button>
  <div class="dropdown-content">
    <a href="main.php?halaman=laporan&bln=1">January</a>
    <a href="main.php?halaman=laporan&bln=2">Februari</a>
    <a href="main.php?halaman=laporan&bln=3">Maret</a>
    <a href="main.php?halaman=laporan&bln=4">April</a>
    <a href="main.php?halaman=laporan&bln=5">Mei</a>
    <a href="main.php?halaman=laporan&bln=6">Juni</a>
    <a href="main.php?halaman=laporan&bln=7">Juli</a>
    <a href="main.php?halaman=laporan&bln=8">Agustus</a>
    <a href="main.php?halaman=laporan&bln=9">September</a>
    <a href="main.php?halaman=laporan&bln=10">Oktober</a>
    <a href="main.php?halaman=laporan&bln=11">November</a>
    <a href="main.php?halaman=laporan&bln=12">Desember</a>
  </div>
</div><br><br>
<?php include 'laporan.php'; ?>