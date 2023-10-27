<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan ke FontAwesome (untuk ikon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Tautan ke CSS kustom -->
    <link rel="stylesheet" href="styles.css">
</head>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        $("#formLogin").submit(function(e){
            e.preventDefault();
            var nilai = $(this).serialize();
            $.ajax({
                url:'<?=base_url()?>user/ceklogin',
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
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card login-card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form id="formLogin">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="username_user" name="username_user" placeholder="Masukkan username Anda">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password"  class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Masukkan password Anda">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tautan ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
