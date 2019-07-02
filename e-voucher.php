<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - e-Voucher</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/voucher.css">
    <script>
        const BASE_URL = 'http://localhost/netwerk/axasurprize';
        const BASE_URL_API = 'http://192.168.1.72/axa';

        const urlParams = new URLSearchParams(window.location.search);
        const voucher = urlParams.get('v');
    </script>
</head>
<body>

	<main role="main">
		<section class="voucher-wrapper">
			<?php include('logo-head.php'); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center cl-blue">Selamat!</h2>
						<div class="profile-detail text-center">
							<p class="name">Agung Laksana</p>
							<p class="email">agung.laksana@gmail.com</p>
							<p class="phone-number">0812 1801 1399</p>
						</div>
						<div class="announce text-center">
							<p>Anda Telah Memenangkan</p>
							<p>Voucher IDR 5.000</p>
							<p><b>& Produk FPA</b> (Gratis 3 bulan)</p>
							<!-- <a href="pilih-merchant.php" class="btn red mb-3">Pilih Merchant</a> -->
							<a id="choose-merchant" href="javascript:void(0)" class="btn red mb-3">Pilih Merchant</a>
							<a href="#">* Syarat & Ketentuan</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include('social.php'); ?>
	<?php include('footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
        const campaignId = localStorage.getItem('campaignId');
        const userId = localStorage.getItem('userId');

        $.ajax({
            url: `${BASE_URL_API}/campaign/voucher/${campaignId}?id=${userId}&voucher=${voucher}`,
            cache: false,
            success: function(result){
                const { name, email, phone } = result.data;

                $("p.name").text(name);
                $("p.email").text(email);
                $("p.phone-number").text(phone);
            },
            error: function(err){
                if (err.status == 404){
                    window.location.replace(`${BASE_URL}/404-not-found.php`);

                    return;
                }

                $.alert({
                    title: 'Error!',
                    content: err.responseJSON.message,
                });
            },
        })


        $('#choose-merchant').on('click', function() {
            window.location.href = `${BASE_URL}/pilih-merchant.php?v=${voucher}`;
        });
    </script>
</body>
</html>