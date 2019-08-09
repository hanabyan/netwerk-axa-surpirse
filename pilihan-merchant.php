<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Pilihan Merchant</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/merchant.css">
    <script>
        const BASE_URL = 'http://localhost/netwerk/axasurprize';
        const BASE_URL_API = 'http://11.11.11.110/axa';

        const urlParams = new URLSearchParams(window.location.search);
        const voucher = urlParams.get('v');
    </script>
</head>
<body>

	<main role="main">
		<section class="bg-flower bg-blue">
			<?php include('logo-head.php'); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center cl-blue">Pilihan Merchant Anda</h2>
						<div class="content-wrap">
							<div class="merchant-detail" style="padding-top: 0;">
								<p id="merchant-name" class="position mb-0"></p>
								<p id="merchant-address" class="address mb-0"></p>
								<p id="merchant-city" class="address mb-0"></p>
								<a href="<?php echo "http://localhost/netwerk/axasurprize/pilih-merchant.php?v=".$_GET['v'] ; ?>" class="btn blue mt-3 ml-0 thin">Ubah Merchant</a>
							</div>
							<hr class="mt-4 mb-5" />
							<div class="text-center">
								<p class="cl-black">Apakah anda siap melakukan pembayaran di kasir merchant pilihan Anda? Silahkan tap <b class="cl-red">"Klaim Sekarang"</b> jika Anda siap klaim E-Voucher Anda.</p>
								<p class="cl-black">Anda mempunyai waktu 5 menit untuk menyelesaikan klaim voucher Anda.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="#" class="mb-3">* Syarat & Ketentuan</a>
				<a href="<?php echo "kode-evoucher.php?v=" . $_GET['v']; ?> " class="btn red">Klaim Sekarang</a>
			</div>
		</section>
	</main>
	<?php include('footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
        var merchantName = localStorage.getItem('merchantName');
        var merchantAddress = localStorage.getItem('merchantAddress');
        var merchantCity = localStorage.getItem('merchantCity');

        $('.merchant-detail #merchant-name').text(merchantName);
        $('.merchant-detail #merchant-address').text(merchantAddress);
        $('.merchant-detail #merchant-city').text(merchantCity);
    </script>
</body>
</html>