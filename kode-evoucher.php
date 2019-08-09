<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Kode e-Voucher</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/voucher.css">
	<link rel="stylesheet" href="assets/css/jquery.countdown.css">
    <script>
        const BASE_URL = 'http://localhost/netwerk/axasurprize';
        const BASE_URL_API = 'http://11.11.11.110/axa';

        const urlParams = new URLSearchParams(window.location.search);
        const voucher = urlParams.get('v');
    </script>
</head>
<body>

	<main role="main" style="padding-bottom: 0;">
		<section style="padding-bottom: 0;">
			<?php include('logo-head.php'); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center cl-blue">Kode e-Voucher</h2>
					</div>
					<div class="col-12">
						<div class="content-wrap">
							<div class="head text-center">
								<h2><!-- kode voucher here --></h2>
								<p class="blue mb-0">E-Voucher <b>IDR 5.000</b> dan produk FPA</p>
								<p class="light-gray">(Gratis selama 3 bulan)</p>
							</div>
							<hr>
							<div class="bottom text-center">
								<div id="timer"></div>
								<p class="gray">Bagikan kepada keluarga / sahabat / teman untuk klaim e-Voucher Anda.</p>
								<?php include('social.php'); ?>							
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<a href="#" class="d-inline-block btn mb-3">Keluar</a>
					<a href="javascript:void(0)" class="d-inline-block btn red mb-3" onClick="return proceedReedem();">Redeemed</a>
				</div>
				<div class="row">
					<div class="col-12">
						<p class="text-center mb-0" style="opacity: .5;">Note: Tombol "Redeemed" hanya diperuntukkan ditekan merchant yang Anda pilih.</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include('footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.plugin.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.countdown-id.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
        const campaignId = localStorage.getItem('campaignId');
        const userId = localStorage.getItem('userId');

        $.ajax({
            url: `${BASE_URL_API}/campaign/voucher/${campaignId}/redeemed?id=${userId}&voucher=${voucher}`,
            cache: false,
            success: function(result){
                //doc here http://keith-wood.name/countdownRef.html
                let timerDuration = result.left; // seconds

                $(function() {
                    $('#timer').countdown({
                        // until: new Date('Wed Jun 19 2019 12:00:00'),
                        until: new Date(new Date().getTime() + (timerDuration * 1000)),
                        format: 'MS'
                    });
                });
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

        $('.content-wrap .head h2').text(voucher);

        // selamat.php
        function proceedReedem() {
            // const payload = { id: userId, status };
            var userId = localStorage.getItem('userId');
            // var payload = { id: userId };
            var payload = { voucher };

            $.ajax({
                url: `${BASE_URL_API}/campaign/user/${campaignId}/redeemed`,
                cache: false,
                type: 'PUT',
                dataType: 'json',
                data: JSON.stringify(payload),
                contentType: "application/json",
                success: function(result){
                    window.location.replace(`${BASE_URL}/selamat.php`);
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
            });
        }
	</script>
</body>
</html>