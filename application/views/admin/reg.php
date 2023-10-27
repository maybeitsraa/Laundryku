<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laundry - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>sb-admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="<?=base_url()?>assets/img/alep.png" alt="">
                </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Membuat Akun!</h1>
                            </div>
                            <form class="user" id="formTambahAdmin">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input required type="text" class="form-control form-control-user" name="nama_admin" id="nama_admin"
                                            placeholder="Nama Panjang">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input required type="text" class="form-control form-control-user" readonly value="<?php $rand = rand(100000, 1000000); echo $rand; ?>" name="id_admin" id="id_admin"
                                            placeholder="ID Kamu">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input required type="number" class="form-control form-control-user" name="telp_admin" id="telp_admin"
                                            placeholder="Masukan Nomor Telepon">
                                    </div>
                                    <div class="col-sm-6">
                                        <input required type="text" name="email_admin" class="form-control form-control-user" id="email_admin"
                                            placeholder="Masukan Email Kamu">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input required type="text" name="username_admin" class="form-control form-control-user"
                                            id="username_admin" placeholder="Masukan Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input required type="password" name="password_admin" class="form-control form-control-user"
                                            id="password_admin" placeholder="Masukan Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="alamat_admin" class="form-control form-control-user" id="alamat_admin"
                                        placeholder="Masukan Alamat Kamu">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="<?=base_url()?>admin" class="btn btn-google btn-user btn-block">
                                    <i class="fas fa-user-alt"></i> Login Admin
                                </a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript libraries -->
    <script src="<?=base_url()?>sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Your custom script goes here -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnTambah").click(function(){
                $("#modalAddUser").modal('show');
            });
            $("#formTambahAdmin").submit(function(e){
                e.preventDefault();
                var data_input = $(this).serialize();
                $.ajax({
                    url: '<?=base_url()?>admin/admin_tambah',
                    dataType: 'json',
                    method: 'POST',
                    data: data_input,
                    success: function(res){
                        var status = res.STATUS;
                        if(status == "1"){
                            window.location.assign('<?=base_url()?>');
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
