<?php
session_start();
if(empty($_SESSION['status_peg'])){
    header("location:index.php");
}elseif ($_SESSION['status_peg']=="apoteker"){
    header("location:operator.php");
}else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Irwandi">

        <title>Admin</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/navbar-static-top.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="assets/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="assets/Responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <style type="text/css">
            .l{
                max-width: 360px;
            }
        </style>
    </head>

    <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"><img src="assets/img/2.png" width="84px"></a>
            </div>

        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin.php"><font face="Lucida Bright" size="+1" color="green"><b>Dokter</b></a></li></font>
            <li class="active"><a href="obat.php"><font face="Lucida Bright" size="+1" color="green"><b>Obat</b></font></a></li>
            <li><a href="pasien.php"><font face="Lucida Bright" size="+1" color="green"><b>Pasien</b></font></a></li>
            <li><a href="pegawai.php"><font face="Lucida Bright" size="+1" color="green"><b>Pegawai</b></font></a></li>
            <li style="padding-left:50px;"><a href="#"><i class="fa fa-user"></i><font face="Lucida Bright" size="+0" color="green"> <?php echo $_SESSION['nm_peg']; ?></font></span></a></li>
            <li><a href="proses/logout.php"><i class="fa fa-sign-out"></i><font face="Lucida Bright" size="+0" color="green"> Sign-Out</font></a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
    </nav>

<br>
    <div class="container">
        <button type="button" class="btn btn-success" onclick="ModalAdd()" style="margin-bottom: 10px;">
            <i class="fa fa-plus-square"></i> Tambah Data</button>
        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <td>KODE OBAT</td>
                <td>Nama Obat</td>
                <td>Jenis Obat</td>
                <td>Kategori Obat</td>
                <td>Harga Obat</td>
                <td>Jumlah Obat</td>
                <td>Action</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <?php include 'proses/obat/tbl_obat.php';
            while($d = mysql_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $d['kd_obat']; ?></td>
                    <td><?php echo $d['nm_obat']; ?></td>
                    <td><?php echo $d['jenis_obat']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['harga_obat']; ?></td>
                    <td><?php echo $d['jml_obat']; ?></td>
                    <td align="center">
                        <a href="#" class="btn btn-primary modal_edit" id="<?php echo $d['kd_obat']; ?>">
                            <i class="fa fa-edit"></i> Edit</a></td>
                      <td>  <a href="#" class="btn btn-danger modal_delete" id="<?php echo $d['kd_obat']; ?>">
                            <i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div> <!-- /container -->
    <!-- My Modal -->
    <div class="modal fade" id="Mymodal" role="dialog">
        <div class="modal-dialog l">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <div class="modal-body">
                    <form id="formModal" action="" method="post">
                            <div class="form-group">
                                <label>Id Obat</label>
                                <input type="text" class="form-control"  name="kd_obat" id="kd_obat" value="<?php include 'proses/obat/kd_obat.php';?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Obat</label>
                                <input type="text" class="form-control" id="nm_obat" name="nm_obat" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Obat</label>
                                <select name="jenis" id="jenis" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Kapsul">Kapsul</option>
                                    <option value="Kapslet">Kaplet</option>
                                    <option value="Salep">Salep</option>
                                    <option value="Sirup">Sirup</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Obat</label>
                                <select name="kategori" id="kategori" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Obat Bebas">Obat Bebas</option>
                                    <option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
                                    <option value="Obat Keras">Obat Keras</option>
                                    <option value="Obat Herbal Terstandar">Obat Herbal Terstandar</option>
                                </select>
                            <div class="form-group">
                                <label>Harga Obat</label>
                                <input type="number" class="form-control" id="harga" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Obat</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="btnS">Simpan</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-1.9.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>
        <!-- Style Datatable from Buttons -->
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/Buttons/js/buttons.flash.min.js"></script>
        <script src="assets/Buttons/js/jszip.min.js"></script>
        <script src="assets/Buttons/js/pdfmake.min.js"></script>
        <script src="assets/Buttons/js/vfs_fonts.min.js"></script>
        <script src="assets/Buttons/js/buttons.html5.min.js"></script>
        <script src="assets/Buttons/js/buttons.print.min.js"></script>
        <script src="assets/Buttons/js/buttons.colVis.min.js"></script>
        <!-- Style Datatable from Responsive -->
        <script src="assets/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/Responsive/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myTable').dataTable({
                    dom: 'Bfrtip',
                    buttons: [  { extend: 'excel', exportOptions: {columns: ':visible'} },
                        { extend: 'pdf', exportOptions: {columns: ':visible'} },
                        { extend: 'print', exportOptions: {columns: ':visible'} },
                        { extend: 'colvisGroup', text: 'Data obat', show: [ 1, 2, 3, 4, 5 ], hide: [ 0,6 ] },
                        { extend: 'colvisGroup', text: 'Show all', show: ':hidden' }
                    ],
                    /*columnDefs: [ {
                     targets: -1,
                     visible: false
                     }
                     ]*/
                });
            });
            //Add Data
            function ModalAdd() {
                $('#Mymodal').modal('show');
                $('#btnS').text("Simpan");
                $('#formModal').attr({action: "proses/obat/tambah.php"});
                $('#formModal')[0].reset();
                $('#kd_dkt')[0].reset();
                $('.modal-title').text(" Add Data Obat");
            }
            //Edit Data
            $(".modal_edit").click(function(){
                $('.modal-title').text(" Edit Data");
                $('#btnS').text("Update");
                var m = $(this).attr("id");
                $.ajax({
                    url: "proses/obat/edit.php",
                    type: "get",
                    data: {kd_obat: m,},
                    datatype: "json",
                    success: function(data){
                        var json = jQuery.parseJSON(data);
                        console.log(json);
                        $('#kd_obat').val(json[0]);
                        $('#nm_obat').val(json[1]);
                        $('#jenis').val(json[2]);
                        $('#kategori').val(json[3]);
                        $('#harga').val(json[4]);
                        $('#jumlah').val(json[5]);
                        $('#Mymodal').modal('show');
                        $('#formModal').attr({action: "proses/obat/edit_proses.php"});
                    }
                });
            })
            //Delete Data
            $(".modal_delete").click(function(){
                var m = $(this).attr("id");
                var r = confirm("Yakin Ingin Menghapus Data ?");
                if(r == true){
                    $.ajax({
                        url: "proses/obat/delete.php",
                        type: "get",
                        data: {kd_obat: m,},
                        datatype: "json",
                        success: function(data){
                            window.location.reload();
                        }
                    });
                }else{
                    window.location.assign("obat.php");
                }
            });
        </script>
    </body>
    </html>
    <?php
}?>