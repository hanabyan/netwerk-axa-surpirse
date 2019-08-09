<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Customer Consent</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
    <script>
        const BASE_URL = 'http://localhost/netwerk/axasurprize';
        const BASE_URL_API = 'http://11.11.11.110/axa';
    </script>
</head>
<body>

	<main role="main">
		<section class="head bg-lamp">
			<?php include('logo-head.php'); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center cl-blue">Konfirmasi Persetujuan Anda</h2>
						<div class="profile-detail text-center">
							<div class="img-wrapper">
								<img src="assets/img/icon/person-gray.png" alt="" class="img-fluid">
							</div>
							<p class="name"><!-- name here --></p>
							<p class="email"><!-- email here --></p>
							<p class="mobile"><!-- mobile here --></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-blue">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center cl-white">Anda Menyetujui Untuk :</h2>
						<ul class="checkmark">
							<li>
								<i class="fas fa-check-square"></i>
								<h3>PT. AXA Financial Indonesia</h3>
								<p>Menghubungi Anda via telepon untuk proses registrasi pemanfaatan produk FPA dan penawaran produk perlindungan lainnya</p>
							</li>
							<li>
								<i class="fas fa-check-square"></i>
								<h3>Beonco</h3>
								<p>Mengirim info promo dison hingga 70% untuk pendaftaran menjadi onlinepreneur di beonco.com</p>
							</li>
						</ul>
						<p class="text-center mb-0">Mengapa memerlukan persetujuan Anda?</p>
						<a href="#" class="text-center mb-3">Cari informasinya disini</a>
						<div class="row justify-content-center">
							<a id="cancel-concent" href="javascript:void(0)" class="d-inline-block btn">Batal</a>
							<a id="agree-concent" href="javascript:void(0)" class="d-inline-block btn red">Setuju</a>
						</div>
					</div>
				</div>
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
        const campaignId = localStorage.getItem('campaignId');
        const userId = localStorage.getItem('userId');

        $.ajax({
            url: `${BASE_URL_API}/campaign/user/${campaignId}?id=${userId}`,
            cache: false,
            success: function(result) {
                $('.profile-detail .name').text(result.data.name);
                $('.profile-detail .email').text(result.data.email);
                $('.profile-detail .mobile').text(result.data.phone);
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

        $("#cancel-concent").on('click', function(){
            submitConsent(0);
        });

        $("#agree-concent").on('click', function(){
            submitConsent(1);
        })


        function submitConsent(status) {
            const payload = { id: userId, status };

            $.ajax({
                url: `${BASE_URL_API}/campaign/user/${campaignId}/consent`,
                cache: false,
                type: 'PUT',
                dataType: 'json',
                data: JSON.stringify(payload),
                contentType: "application/json",
                success: function(result){
                    localStorage.setItem('userId', result.data.id);

                    if (status == 1) {
                        // console.log(result);
                        window.location.href = `${BASE_URL}/e-voucher.php?v=${result.data.voucher_code}`;
                    } else {
                        window.location.replace(`${BASE_URL}/home.php`);
                    }
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
                complete: function(){

                }
            });
        }
    </script>
</body>
</html>