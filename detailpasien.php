<?php
session_start();
if(empty($_SESSION['status_peg'])){
    header("location:index.php");
}elseif($_SESSION['status_peg']=="administrator"){
    header("location:admin.php");
}else{
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

    <title>Apoteker </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/navbar-static-top.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/navbar-fixed-side.css" rel="stylesheet">
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <style>
        .st{
            background-color: #ffffff;
        }
    </style>
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="#"><img src="assets/img/2.png" width="84px"></a>
        </div>
        <!-- Top Menu Items -->
    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="detailpasien.php"><font face="Lucida Bright" size="+1" color="green"><b>Tambah Pasien</b></a></li></font>
            <li><a href="operator.php"><font face="Lucida Bright" size="+1" color="green"><b>Pendaftaran Pasien</b></a></li></font>
            <li><a href="resep.php"><font face="Lucida Bright" size="+1" color="green"><b>Resep Dan Obat</b></font></a></li>
            <li style="padding-left:50px;"><a href="#"><i class="fa fa-user"></i><font face="Lucida Bright" size="+0" color="green"> <?php echo $_SESSION['nm_peg']; ?></font></span></a></li>
            <li><a href="proses/logout.php"><i class="fa fa-sign-out"></i><font face="Lucida Bright" size="+0" color="green"> Sign-Out</font>
            </a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid" style="min-height: 600px;">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <h3>Tambah Pasien</h3>
                            </li>
                            <div class="col-md-12">
                                <button class="btn btn-success" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i>
                                    Tambah Pasien</button>
                            </div>
                        </ol>
                </div>
            </div>
            <!-- /.row -->
<br>
            <div class="row">
                <!-- Pasien -->
                <div class="col-sm-2 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><font face="Lucida Bright" size="+1"><i class="fa fa-info-circle"></i> Detail Pasien</font></h3>
                        </div>
                        <div class="panel-body">

                            <div class="col-md-4">
                                <label for="">Pilih Nama</label> </div>
                                <div class="col-md-8"><select name="nm_psn" id="nm_psn" class="form-control">
                                    <option value=""></option>
                                    <?php include "proses/operator/cb_psn.php"; ?>
                                </select>
                            </div>
                            <div class="col-md-4"><br>
                            <label for="">ID</label></div>
                                <div class="col-md-8"><br><input type="text" class="form-control" name="id_psn" id="id_psn" style="padding-right: 5px;" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="margin-top: 5px;">Nama Pasien</label></div>
                               <div class="col-md-8"> <input type="text" class="form-control" name="ket_nm" id="ket_nm" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="margin-top: 5px;">Alamat Pasien</label></div>
                              <div class="col-md-8"><textarea name="ket_almt" id="ket_almt" rows="4" class="form-control" readonly></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="margin-top: 5px;">Jenis Kelamin</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" name="ket_gender" id="ket_gender" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="margin-top: 5px;">Umur Pasien</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" name="ket_umur" id="ket_umur" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" style="margin-top: 5px;">No Telepon</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="ket_telp" id="ket_telp" readonly>
                            </div>

                        </div>
                    </div>
                </div>
               
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
</div> <!-- /#wrapper -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Pasien</h4>
            </div>
            <div class="modal-body">
                <form action="proses/operator/tambah.php" method="post">
                    <input type="hidden" class="form-control" name="id_psn1" id="id_psn1" value="<?php include "proses/operator/id_psn.php";?>">

                    <label for="" style="margin-top: 5px;">Nama Pasien</label>
                    <input type="text" class="form-control" name="ket_nm1" id="ket_nm1" required>

                    <label for="" style="margin-top: 5px;">Alamat Pasien</label>
                    <textarea name="ket_almt1" id="ket_almt" rows="4" class="form-control" required></textarea>

                    <label for="" style="margin-top: 5px;">Jenis Kelamin Pasien</label>
                    <select name="ket_gender1" id="ket_gender1" class="form-control" required>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label for="" style="margin-top: 5px;">Umur Pasien</label>
                    <input type="number" class="form-control" name="ket_umur1" id="ket_umur" required>

                    <label for="" style="margin-top: 5px;">Telepon Pasien</label>
                    <input type="number" class="form-control" name="ket_telp1" id="ket_telp" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
            </form>
        </div>

    </div>
</div>
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    //search dari nama
    $('#nm_psn').change(function () {
        var a = $(this).val();
        $.getJSON("proses/operator/info.php",{nm_psn:a},function (json) {
            $('#id_psn').val(json[0]);
            $('#ket_nm').val(json[1]);
            $('#ket_nm2').val(json[1]);
            $('#ket_almt').val(json[2]);
            $('#ket_gender').val(json[3]);
            $('#ket_umur').val(json[4]);
            $('#ket_telp').val(json[5]);
        });
    });

    //info dokter dan tarif
    $('#ket_dkt').change(function () {
        var a = $(this).val();
        $.getJSON("proses/operator/info_dkt.php",{ket_dkt:a},function (json) {
            $('#ket_sp').val(json[0]);
            $('#ket_biaya').val(json[1]);
        });
    });
</script>
</html>
<?php
}?>