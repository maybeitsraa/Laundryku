<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Laundry</title>
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/SVG_Logo.svg/2048px-SVG_Logo.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Laundry Ku
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="navbar-brand nav-link active" aria-current="page" href="#"><i class="fas fa-list-check"></i> Check Laundry</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand nav-link" href="#"><i class="fas fa-phone"></i> Kontak</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand nav-link" href="#"><i class="fas fa-user"></i> Login</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/baju1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/baju2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/baju3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <hr>
</div>
<div class="container">
    
    <form action="">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Silahkan Masukan Kode Transaksi Anda" aria-label="Recipient's username" aria-describedby="button-addon2">
        &nbsp;
        &nbsp;
        &nbsp;
        <button class="btn btn-secondary" type="button" id="button-addon2">CEK</button>
        </div>
        <br>
    </form>
    <hr>
</div>
<br>
<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Konsumen</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Paket</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <?php
					$no = 1;
					foreach($tabel_transaksi as $res)
					{
						
						$aktif = $res->status;
						$merah = ($aktif=="0") ? "class='table-warning'" : "";
				?>
					<tr <?=$merah?>>
						<td><?=$no?></td>
						<td><?=$res->nama_konsumen?></td>
						<td><?=$res->tanggal_masuk?></td>
						<td><?=$res->berat?></td>
						<td><?=$res->id_konsumen?></td>
					</tr>
				<?php
						$no++;
					}
				?>
  </tbody>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
