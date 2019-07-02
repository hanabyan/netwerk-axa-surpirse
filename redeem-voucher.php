<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Redeem Voucher</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

	<main role="main" class="bg-white">
		<section class="head" style="padding-bottom: 0;">
			<?php include('logo-head.php'); ?>
			<div class="container-fluid">
				<div class="row">
				</div>
			</div>
		</section>
		<section class="bg-white">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="section-title text-center">Redeem Voucher</h2>
						<p class="text-center cl-black">Lengkapi data diri Anda untuk mendapatkan voucher diskon.</p>
						<div class="form-wrapper">
							<form action="">
								<div class="form-group">
									<label class="cl-black">Nama</label>
									<input type="text" class="cl-black bd-gray rounded form-control" required />
								</div>
								<div class="form-group">
									<label class="cl-black">No. Ponsel</label>
									<input type="number" class="cl-black bd-gray rounded form-control to-number" placeholder="Contoh: 08131234567" min="0" required />
								</div>
								<div class="form-group">
									<label class="cl-black">Alamat Email</label>
									<input type="email" class="cl-black bd-gray rounded form-control" required />
								</div>
								<div class="form-group">
									<label class="cl-black">Kota</label>
									<select class="cl-black bd-gray rounded form-control" required>
										<option value="mlg">Malang</option>
										<option value="jkt">DKI Jakarta</option>
										<option value="bdg">Bandung</option>
										<option value="sby">Surabaya</option>
										<option value="jog">Jogjakarta</option>
										<option value="bks">Bekasi</option>
									</select>
								</div>
								<div class="form-group">
									<label class="cl-black">Tanggal Lahir</label>
									<div class="d-flex">
										<select class="cl-black bd-gray rounded form-control date" required>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select class="cl-black bd-gray rounded form-control date" required>
											<option value="jan">Januari</option>
											<option value="feb">Februari</option>
											<option value="mar">Maret</option>
											<option value="apr">April</option>
											<option value="mei">Mei</option>
											<option value="jun">Juni</option>
											<option value="jul">Juli</option>
											<option value="agu">Agustus</option>
											<option value="sep">September</option>
											<option value="okt">Oktober</option>
											<option value="nov">November</option>
											<option value="des">Desember</option>
										</select>
										<select class="cl-black bd-gray rounded form-control date" required>
											<option value="1990">1990</option>
											<option value="1991">1991</option>
											<option value="1992">1992</option>
											<option value="1993">1993</option>
											<option value="1994">1994</option>
											<option value="1995">1995</option>
											<option value="1996">1996</option>
											<option value="1997">1997</option>
											<option value="1998">1998</option>
											<option value="1999">1999</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="cl-black">Jenis Kelamin</label>
									<div class="d-flex justify-content-between">
										<div class="radio-wrapper half bd-gray rounded">
											<input type="radio" name="gender" value="male" checked>
											<span>Laki laki</span>
											<span class="checkmark"></span>
										</div>
										<div class="radio-wrapper half bd-gray rounded">
											<input type="radio" name="gender" value="female">
											<span>Perempuan</span>
											<span class="checkmark"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="cl-black">Memiliki Kartu Kredit?</label>
									<div class="d-flex justify-content-between">
										<div class="radio-wrapper half bd-gray rounded">
											<input type="radio" name="cc" value="y">
											<span>Ya</span>
											<span class="checkmark"></span>
										</div>
										<div class="radio-wrapper half bd-gray rounded">
											<input type="radio" name="cc" value="n" checked>
											<span>Tidak</span>
											<span class="checkmark"></span>
										</div>
									</div>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn red thin">Redeem Sekarang</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<link rel="stylesheet" href="assets/css/footer.css">
	<footer class="footer text-center bg-white">
		<a href="#">Disclaimer @ Ownership</a>
		<p class="gray">Copyright 2018 AXA Indonesia</p>
		<p class="gray">AXA Indonesia merupakan perusahaan yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan.</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>