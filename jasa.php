
<?php require_once("admin/config/koneksi.php");
    session_start();
    if(empty($_SESSION['email']))
    {
      header('location:login.php');
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Jasa</title>
    </head>
    <body>
      <div class="col-sm-8">
              <div class="row">
               
                <div class="col-sm-12">
                
                  <div class="panel panel-default">
                  
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                    </div>
                    
                      <div class="panel-body">
            
                        <div class="table-responsive">

                          <table >
                           
                            <thead>
                              <tr>
                                <td class="text-center">NO</td>
                                <td class="text-left">ID Jasa</td>
                                <td class="text-left">Nama Jasa </td>
                                <td class="text-right">Aksi</td>
                                <td class="text-right">Total</td>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_jasa WHERE id_jasa = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                              <tr>
                                <td class="text-center"><a href="produk.php"><img src="admin/gambar/<?php echo $data['gambar']; ?>" width="50px" height="50px"></a></td>
                                <td class="text-left"><a href="produk.php"><?php echo $data['nama_barang']; ?></a></td>
                            
                                <td class="text-left"><a href="produk.php"><?php echo number_format($val); ?></a></td>
                                <td class="text-right"><?php echo $data['harga']; ?></td>
                                <td class="text-right"><?php echo number_format($jumlah_harga); ?></td>
                              </tr>
                                <?php
                          
            }
              
            }?>
                            </tbody>
                            <tfoot>
                             
                              <tr>
                                <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                <td class="text-right"><?php echo number_format($total); ?></td>
                              </tr>
                            </tfoot>
                                                           
                          </table>

                        </div>
                  
                      </div>
                         
                  </div>
                
                </div> 
                  <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                    </div>
                      <div class="panel-body">
                        <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                        <br>
                        <label class="control-label" for="confirm_agree">
                          <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                          <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                        <div class="buttons">
                          <div class="pull-right">
                            <input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order" name="konfirm">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
    </body>
    </html>

