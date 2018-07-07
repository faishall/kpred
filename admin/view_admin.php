
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Admins</h3>
                                </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <a href="home.php?p=input_admin" class="btn btn-success btn-block" role="button"><span class="fa fa-plus"></span>Add New Admin</a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="fa fa-search"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Who are you looking for?"/>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>                                    
                                </div>
                            </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="200">Name</th>
                                                    <th width="10">Username</th>
                                                    <th width="100">Photo</th>
                                                    <th width="102">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>  

                                            <?php include "config/koneksi.php";
											$tampil=mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin");
											while($r=mysqli_fetch_array($tampil))
											{
											echo'
											<tr>
												<td>'.$r['nama'].'</td>
												<td>'.$r['username'].'</td>
												<td><img src="img/foto_adm/'.$r['foto_admin'].'"  width=100px></td>

                                                <td>
                                                    <a href="home.php?p=edit_admin&id='.$r['id_admin'].'?" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                                    <a href="pages/del_admin.php?id='.$r['id_admin'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data Admin '.$r['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                </td>
												</tr>';
												}
                                       		
											?>

                                            </tbody>
                                        
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->

</body>
</html>
