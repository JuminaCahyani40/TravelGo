<!DOCTYPE html>
<html>
<head>
	<title>Travel Go</title>
	<link rel="shortcut icon" href="/img/logo.png" type="image/png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<a class="navbar-brand" href="#">
			<img src="/img/logo.png" width ="40" height="40" class="d-inline-block align-top" alt=""> TravelGo
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-auto" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item active">
			  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Daftar Pariwisata</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">ndajsfjf</a>
			</li>
		
		  <form class="form-inline" action="">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
		</form>
			<!--<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  User
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Profile</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Logout</a>
			  </div>
			  </li>
			</ul>
		</div>-->
	  </nav>

	  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img class="d-block w-100 h-50" src="/img/sungai wain.jpg" alt="danau cermin">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100 h-50" src="/img/sungai-wain.jpeg" alt="Second slide">
		  </div>
		</div>
	  </div>
	  <br>
	  <br>
	  <h1 style="text-align: center">Hutan Lindung Sungai Wain</h1>
	  <br>
	  <br>

	  <div class="row justify-content-md-center">
		  <div class="col-md-6">
			  <p class="text-justify">
				Hutan Lindung Sungai Wain merupakan salah satu wisata di Kota Balikpapan yang sangat mengedepankan pelestarian lingkungan dengan konsep ecotourism. Bukan hanya menawarkan wisata alam saja, tetapi di wisata hutan lindung ini juga menyediakan beragam fasilitas berisi informasi dan pengetahuan bagi wisatawan yang datang berkunjung untuk bekal pendidikan lingkungan hidup. Ketika berkunjung ke destinasi wisata ini, para pengunjung dapat menikmati trekking pendek dengan melintasi jalur sepanjang 400 meter di atas titian kayu atau jembatan panjang yang berada di dekat waduk air Sungai Wain. Terdapat pula jalur perjalanan untuk para wisatawan sepanjang 3 kilometer yang digunakan untuk melihat lihat beragam jenis tumbuhan langka, seperti kantung semar. 
			  </p>
			  <img src="/img/sungai-wain.jpeg">
			  <p class="text-justify">Lokasi: Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan.</p><br>
			  <h2>Akomodasi</h2><br>
			  <p class="text-justify">Pengunjung bisa menyewa penginapan yang nyaman dan dengan harga yang terjangkau untuk memudahkan perjalanan menuju hutan lindung sungai wain seperti RedDoorz near Terminal Batu Ampar yang berjarak sekitar 8 KM dari lokasi.</p><br>
			  <h2>Transportasi</h2><br>
			  <p class="text-justify">jika ingin menggunakan transportasi umum, maka Anda bisa menaiki mikrolet nomor 3 dari arah pusat kota atau Pasar Klandasan. Kemudian turun di Terminal Batu Ampar, lalu naik mikrolet nomor 8 dengan perjalanan selama kurang lebih satu jam.</p><br>
			  <h2>Yuk, Ke Hutan Lindung Sungai Wain!</h2><br>
			  <h4>Jalur Udara</h4><br>
			  <p class="text-justify">Bagi  pengujung yang memilih transportasi udara untuk menuju ke Balikpapan, pilihlah tujuan Bandara Internasional Sultan Aji Muhammad Sulaiman Sepinggan. Penerbangan internasional dan nasional tersedia sepanjang waktu. Kemudian anda bisa menggunakan taksi yang tersedia dibandara menuju lokasi.</p><br>
			  <h4>Jalur Darat</h4><br>
			  <p class="text-justify">pengunjung dapat melewati tol Balsam yang merupakan sebuah jalan tol di Indonesia sepanjang 99,02 kilometer yang menghubungkan Kota Balikpapan dengan Kota Samarinda, Kalimantan Timur.</p><br>
			  <h4>Jalur Laut</h4><br>
			  <p class="text-justify">Pengunjung dapat mengakses Balikpapan dengan kapal feri menuju Pelabuhan semayang. T. Pelni, perusahaan pelayaran nasional, memiliki layanan ke/dari kota lain di Indonesia, seperti Nabire, Tarakan, Nunukan, Parepare, Surabaya, Jayapura, Makassar, Maumere, Kupang, Surabaya, dan Jakarta.</p>
		  </div>
	  </div><hr>
	  <div class="container contact-form">
		<form action="/daftar_wisata/store" method="post">
			{{ csrf_field() }}
			<h3 style="text-align: center">Berikan saran dan kritik Anda!</h3><br>
			<div class="row justify-content-md-center">
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="txtName" class="form-control" placeholder="Masukkan Nama" value="">
					</div>
					<div class="form-group">
						<input type="text" name="txtEmail" class="form-control" placeholder="Masukkan Email" value="">
					</div>
					<div class="form-group">
						<input type="text" name="txtPhone" class="form-control" placeholder="Masukkan Nomor Telepon" value="">
					</div>
					<div class="form-group">
						<textarea name="txtMsg" class="form-control" id="" placeholder="Masukkan kritik dan saran" style="width: 100%; height: 150px"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="btnSubmit" class="btnContact" value="Kirim Pesan">
					</div>
					

				</div>
			</div>
		</form>
	  </div>
	  <footer>
        <div class="text-center p-3">
          &copy; 2021 Copyright TravelGo Team
        </div>
      </footer> 


  
 
	 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</div>
</html>