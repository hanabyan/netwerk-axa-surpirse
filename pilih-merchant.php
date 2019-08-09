<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Pilih Merchant</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
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
						<h2 class="text-center cl-blue">Pilih Merchant</h2>
						<div class="content-wrap">
							<div class="list">
								<!-- <p data-store-id="1">Ottoman's Coffe Brewers</p>
								<p data-store-id="2">Cafe & Resto KLC</p>
								<p data-store-id="3">Congo Gallery & Cafe</p>
								<p data-store-id="4">Caffe Bene Dago</p>
								<p data-store-id="5">Trends Cafe & Resto</p>
								<p data-store-id="6">Eiger Coffee</p>
								<p data-store-id="7">Cocorico Cafe and Resto</p>
								<p data-store-id="8">Coffee Angkringan Dago</p>
								<p data-store-id="9">Kopi Luwak Cikole</p>
								<p data-store-id="10">Ottoman's Coffe Brewers</p>
								<p data-store-id="11">Cafe & Resto KLC</p>
								<p data-store-id="12">Congo Gallery & Cafe</p>
								<p data-store-id="13">Caffe Bene Dago</p>
								<p data-store-id="14">Trends Cafe & Resto</p>
								<p data-store-id="15">Eiger Coffee</p>
								<p data-store-id="16">Cocorico Cafe and Resto</p>
								<p data-store-id="17">Coffee Angkringan Dago</p>
								<p data-store-id="18">Kopi Luwak Cikole</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="#" class="mb-3">* Syarat & Ketentuan</a>
				<button id="submitForm" class="btn red">Pilih Merchant</button>
			</div>
		</section>
		<form id="merchant-form" action="pilihan-merchant.php" method="post" class="d-none">
			<input type="text">
		</form>
	</main>
	<?php include('footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		$(function() {
			//disable button
			if($('.list p.active').length < 1) {
				$('#submitForm').addClass('disabled');
			}

			//listen click event on list
			$('.content-wrap .list').on('click', 'p', function() {
				if(!$(this).hasClass('active')) {
					$('.content-wrap .list p').removeClass('active');	
					$(this).addClass('active');
					$('#submitForm').removeClass('disabled');
					$('#merchant-form input').val($(this).attr('data-store-id'));
				} else {
					$(this).removeClass('active');
					$('#submitForm').addClass('disabled');
					$('#merchant-form input').val("");
				}
			});

			//submit form
			$('#submitForm').click(function() {
                const merchantId = $('#merchant-form input').val();
                // $('#merchant-form').submit();
                
                const payload = {merchant: merchantId, voucher};

                const selectedMerchant = merchantList.find(item => item.id == merchantId);

                localStorage.setItem('merchantName', selectedMerchant.name);
                localStorage.setItem('merchantAddress', selectedMerchant.address);
                localStorage.setItem('merchantCity', selectedMerchant.city);

                $.ajax({
                    url: `${BASE_URL_API}/campaign/user/${campaignId}/merchant`,
                    cache: false,
                    type: 'PUT',
                    dataType: 'json',
                    data: JSON.stringify(payload),
                    contentType: "application/json",
                    success: function(result){
                        window.location.href = `${BASE_URL}/pilihan-merchant.php?v=${voucher}`;
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
			});
        });
        
        const campaignId = localStorage.getItem('campaignId');

        var merchantList;
        var merchantSelected;

        $.ajax({
            url: `${BASE_URL_API}/campaign/merchant/${campaignId}?voucher=${voucher}`,
            cache: false,
            success: function(result){
                let merchantOptions = '';

                result.data.forEach(item => {
                    merchantOptions = `${merchantOptions}<p data-store-id="${item.id}" id="store-${item.id}">${item.name} (${item.city})</p>`
                })

                $('.list').html(merchantOptions);

                merchantList = result.data;
                merchantSelected = result.selected;

                if (merchantSelected) {
                    $('.content-wrap .list p').removeClass('active');	
                    $('#store-' + merchantSelected).addClass('active');	
                    $('#submitForm').removeClass('disabled');
                    $('#merchant-form input').val(merchantSelected);
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
        })
	</script>
</body>
</html>