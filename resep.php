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

        <title>Apoteker</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/navbar-static-top.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/css/navbar-fixed-side.css" rel="stylesheet">
        <link href="assets/css/sb-admin.css" rel="stylesheet">
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
            <li><a href="detailpasien.php"><font face="Lucida Bright" size="+1" color="green"><b>Tambah Pasien</b></a></li></font>
            <li><a href="operator.php"><font face="Lucida Bright" size="+1" color="green"><b>Pendaftaran Pasien</b></a></li></font>
            <li class="active"><a href="resep.php"><font face="Lucida Bright" size="+1" color="green"><b>Resep Dan Obat</b></font></a></li>
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
                        <ol class="breadcrumb">
                            <li class="active">
                                <h3>Resep Dan Obat</h3>
                            </li>
                        </ol>
                </div>
                <!-- /.row -->

                    <!-- Resep -->
                    <div class="col-sm-2 col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-hourglass"></i> Transaksi Pembayaran</h3>
                            </div>
                            <div class="panel-body">
                                <form action="proses/operator/tambah_resep.php" method="post">
                                    <div class="col-md-4">
                                        <label for="" style="margin-top: 5px;">Nomor Pendaftaran</label></div>
                                        <div class="col-md-8"><select name="no_pendf" id="no_pendf" class="form-control" required>
                                            <option value=""></option>
                                            <?php include"proses/operator/cb_pendf.php";?>
                                        </select>
                                    </div>
                                <div class="col-md-4"><br>
                                    <label for="" style="margin-top: 5px;">Nama Pasien</label></div>
                                    <div class="col-md-8"><br><input readonly type="text" class="form-control" name="ket_nm2" id="ket_nm2" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Nama Pegawai</label></div>
                                    <div class="col-md-8"><input type="text" class="form-control" name="ket_peg" id="ket_peg" readonly value="<?php echo $_SESSION['nm_peg'];?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Tanggal</label></div>
                                    <div class="col-md-8"><input readonly type="text" class="form-control" name="tgl" id="tgl" value="<?php echo date('Y-m-d');?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Nama Dokter</label></div>
                                    <div class="col-md-8"><input type="text" name="ket_dkt" id="ket_dkt" class="form-control" readonly required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Spesialis dan Keahlian</label></div>
                                    <div class="col-md-8"><input type="text" class="form-control" name="ket_sp" id="ket_sp" readonly>
                                </div>                                                                                                   
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">No Resep</label></div>
                                    <div class="col-md-8"><input type="text" class="form-control" name="id_rsp" id="id_rsp" value="<?php include"proses/operator/id_resep.php";?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Tarif Biaya</label></div>
                                    <div class="col-md-8"><input type="text" class="form-control" name="ket_biaya" id="ket_biaya" readonly>
                                </div>



                        </div>
                       <div class="panel panel-body"  style="border-top: 1px solid #bab2af;">
                            <div>
                                <div class="col-md-4">
                                        <label for="" style="margin-top: 5px;">Pilih Obat</label></div>
                                        <div class="col-md-8"><select name="ket_obt" id="ket_obt" class="form-control" required>
                                            <option value=""></option>
                                            <?php include"proses/operator/cb_obat.php ";?>
                                        </select>
                                </div>                                
                                    <div class="col-md-4"><br>
                                        <label for="" style="margin-top: 5px;">Harga Obat</label></div>
                                        <div class="col-md-8"><br><input type="text" class="form-control" name="hg_obt" id="hg_obt" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" style="margin-top: 5px;">Jumlah Obat</label></div>
                                        <div class="col-md-8"><input type="number" class="form-control" name="jml_obt" id="jml_obt">
                                    </div>  
                                    <div class="col-md-4">
                                        <label for="" style="margin-top: 5px;">Total</label></div>
                                        <div class="col-md-8"><input type="text" class="form-control" name="tot_obt" id="tot_obt" readonly>
                                    </div>                                                                      
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Total Biaya Resep Dan Obat</label></div>
                                    <div class="col-md-8"><input readonly type="text" class="form-control" name="tot_biaya" id="tot_biaya">
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <button id="total"type="button" class="btn btn-primary froma" style="margin-top: 5px;"><i class="fa fa-spinner"></i> Hitung</button>
                                </div>                                
                            </div>
                        </div>
                        
                       <div class="panel panel-body"  style="border-top: 1px solid #bab2af;">
                            <div>
                                <div class="col-md-4">
                                    <label for="" style="margin-top: 5px;">Jumlah Uang</label></div>
                                    <div class="col-md-8"><input type="number" class="form-control" name="tot_bayar" id="tot_bayar">
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-3"><br>
                                    <button id="total"type="button" class="btn btn-success froma" style="margin-top: 5px;"><i class="fa fa-money"></i> Bayar</button>
                                </div>
                                <div class="col-md-4"><br><br>
                                    <label for="" style="margin-top: 5px;">Kembali</label></div>
                                    <div class="col-md-8"><br><br><input readonly type="text" class="form-control" name="tot_kembali" id="tot_kembali">
                                </div>

                            </div></div></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    </div> <!-- /#wrapper -->
    <!-- Modal -->


                

    </body>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        //search dari id
        $('#id_psn').change(function () {
            var a = $(this).val();
            $.getJSON("proses/operator/info_id.php",{id_psn:a},function (json) {
                $('#ket_nm').val(json[1]);
                $('#ket_almt').val(json[2]);
                $('#ket_gender').val(json[3]);
                $('#ket_umur').val(json[4]);
                $('#ket_telp').val(json[5]);
            });
        });
        //info dokter dan tarif
        $('#no_pendf').change(function () {
            var a = $(this).val();
            $.getJSON("proses/operator/info_pendf.php",{no_pendf:a},function (json) {
                $('#ket_nm2').val(json[0]);
                $('#ket_dkt').val(json[1]);
                $('#ket_sp').val(json[2]);
                $('#ket_biaya').val(json[3]);
            });
        });
        //info obat
        $('#ket_obt').change(function () {
            var a = $(this).val();
            $.getJSON("proses/operator/info_obat.php",{ket_obt:a},function (json) {
                $('#hg_obt').val(json[0]);
            });
        });
        //obat harga
        $('#jml_obt').change(function () {
            var hg = $('#hg_obt').val();
            var ini = $(this).val();
            var got = hg * ini;
            if(hg == ""){
                $('#tot_obt').val("");
            }else{
                $('#tot_obt').val(got);
            }
        });
        //masuk jumlah
        /*$('.froma').click(function(){
            var a = $('#sum').val();
            var a1 = parseInt(a);
            var i = $('#ket_biaya').val();
            var i1 = parseInt(i);
            var nih = a1+i1;
            if(i == ""){

                $('#tot_biaya').val("");
            }else{

                $('#tot_biaya').val(nih);
            }
        });*/
        //bayar total
        $('#tot_bayar').change(function () {
            var a = $(this).val();
            var a1 = parseInt(a);
            var km = $('#tot_biaya').val();
            var km1 = parseInt(km);
            var has = a1 - km1;
            if(km == ""){
                $('#tot_kembali').val("");
            }else{
                $('#tot_kembali').val(has);
            }
        });

        $('#total').click(function() {
            var resep = $('#ket_biaya').val();
            var obat = $('#tot_obt').val();

            var resep_int = parseInt(resep);
            var obat_int = parseInt(obat);

            var total = resep_int + obat_int;
            $('#tot_biaya').val(total);

        });
    </script>
    </html>
    <?php
}?>