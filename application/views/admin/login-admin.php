<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        $("#formLogin").submit(function(e){
            e.preventDefault();
            var nilai = $(this).serialize();
            $.ajax({
                url:'<?=base_url()?>admin/ceklogin',
                method:'POST',
                data:nilai,
                dataType:'json',
                success:function(res){
                    var status = res.STATUS;
                    if(status=="1")
                    {
                        location.reload();
                    }
                    else
                    {
                        alert(res.MESSAGE);
                    }
                }
            });
            
        });
        
    });

    </script>

</head>

<body class="bg-secondary">
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color: whitesmoke;">
            <nav class="navbar" style="background-color: whitesmoke">
                <div class="container">
                </div>
                        </nav>
                <div class="row">
                    <div class="col">
                        <img src="assets/img/lundry.png" width="97%" alt="">
                    </div>
                    <div class="col">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header bg-dark text-white">
                          <i class="fas fa-sign-in"></i>  Login
                        </div>
                        <div class="card-body">
                        
                    <form id="formLogin">
                        <label for="">Masukan Username</label>
                        <br><br>
                        <input type="text" name="username_admin" id="username_admin" placeholder="Username" class="form-control">
                        <br>
                        <label for="">Masukan Password</label>
                        <br><br>
                        <input type="password" id="password_admin" name="password_admin" placeholder="Password" class="form-control">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-user-plus"></i>&nbsp;Login</button>
                        </center>
                        <div class="row">
  <div class="col-6 col-md-4">
    <a href="<?=base_url()?>register"><i class="fas fa-user-plus"></i> Register</a>
  </div>
  <div class="col-6 col-md-4">
<a href=""></a>
  </div>
  <div class="col-6 col-md-4">
    <a href="">Lupa Password</a>
  </div>
</div>
                    </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>