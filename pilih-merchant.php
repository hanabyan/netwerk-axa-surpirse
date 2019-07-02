<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Pilih Merchant</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
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
								<p data-store-id="1">Ottoman's Coffe Brewers</p>
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
								<p data-store-id="18">Kopi Luwak Cikole</p>
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
		<form id="merchant-form" action="" class="d-none">
			<input type="text">
		</form>
	</main>
	<?php include('footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		$(function() {
			//disable button
			if($('.list p.active').length < 1) {
				$('#submitForm').addClass('disabled');
			}

			//listen click event on list
			$('.content-wrap .list p').click(function() {
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
				$('#merchant-form').submit();
			});
		});
	</script>
</body>
</html>