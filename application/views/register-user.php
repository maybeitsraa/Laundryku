<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Untuk sistem login -->

    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
			
			$("#btnTambah").click(function(){
				$("#modalAddUser").modal('show');
			});
			
			
			
			$("#formTambahUser").submit(function(e){
				e.preventDefault();
				var data_input = $(this).serialize();
				$.ajax({
					url:'<?=base_url()?>user/user_add',
					dataType:'json',
					method:'POST',
					data:data_input,
					success:function(res){
						var status = res.STATUS;
						if(status=="1")
						{
							window.location.assign('<?=base_url()?>');
						}
					}
				});
			});
		});

    </script>
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url()?>template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register Pengguna</h3>
                <form id="formTambahUser">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" style="color: black;" value="<?php $rand = rand(100000, 1000000); echo $rand; ?>" disabled name="id_user" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="mail" name="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Nama Panjang</label>
                    <input type="textarea" name="nama_panjang" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <p class="sign-up">Already Have Account?<a href="<?php echo base_url()?>user"> Login</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url()?>template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url()?>template/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/misc.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/settings.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>