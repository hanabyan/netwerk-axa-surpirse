<!-- TODO: alert  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/img/favicon.ico">
	<title>AXA Be Surprise - Redeem Voucher</title>
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
							<!-- <form action="customer-consent.php" method="post"> -->
								<div id="field-name" class="form-group d-none">
									<label class="cl-black">Nama</label>
									<input type="text" class="input-name cl-black bd-gray rounded form-control" required />
								</div>
								<div id="field-phone" class="form-group d-none">
									<label class="cl-black">No. Ponsel</label>
									<input type="number" class="cl-black bd-gray rounded form-control to-number" placeholder="Contoh: 08131234567" min="0" required />
								</div>
								<div id="field-email" class="form-group d-none">
									<label class="cl-black">Alamat Email</label>
									<input type="email" class="cl-black bd-gray rounded form-control" required />
								</div>
								<div id="field-city" class="form-group d-none">
									<label class="cl-black">Kota</label>
									<select class="cl-black bd-gray rounded form-control" required>
										<option value="mlg" selected>Malang</option>
										<option value="jkt">DKI Jakarta</option>
										<option value="bdg">Bandung</option>
										<option value="sby">Surabaya</option>
										<option value="jog">Jogjakarta</option>
										<option value="bks">Bekasi</option>
									</select>
								</div>
								<div id="field-dob" class="form-group d-none">
									<label class="cl-black">Tanggal Lahir</label>
									<div class="d-flex">
										<select class="cl-black bd-gray rounded form-control date input-date" required>
											<option value="01" selected>1</option>
											<option value="02">2</option>
											<option value="03">3</option>
											<option value="04">4</option>
											<option value="05">5</option>
											<option value="06">6</option>
											<option value="07">7</option>
											<option value="08">8</option>
											<option value="09">9</option>
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
										<select class="cl-black bd-gray rounded form-control date input-month" required>
											<option value="01">Januari</option>
											<option value="02">Februari</option>
											<option value="03">Maret</option>
											<option value="04">April</option>
											<option value="05">Mei</option>
											<option value="06">Juni</option>
											<option value="07">Juli</option>
											<option value="08">Agustus</option>
											<option value="09">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
										<select class="cl-black bd-gray rounded form-control date input-year" required>
											<?php for($i = 1945; $i<= 2009; $i++ ): ?>
											<option value="<?php echo $i; ?>" <?php echo ($i == 1990 ? 'selected' : '') ?>><?php echo $i; ?></option>
                                            <?php endfor; ?>
										</select>
									</div>
								</div>
								<div id="field-gender" class="form-group d-none">
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
								<div id="field-hascc" class="form-group d-none">
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
									<button id="submit-user" class="btn red thin">Redeem Sekarang</button>
								</div>
							<!-- </form> -->
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
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
        const availableFields = [];
        const campaignId = localStorage.getItem('campaignId');

        const $loader = $.LoadingOverlay;

        $loader('show');

        $.ajax({
            url: `${BASE_URL_API}/campaign/form/${campaignId}`,
            cache: false,
            success: function(result){
                const data = result.data;

                if (data.length > 0) {
                    data.forEach(item => {
                        availableFields.push(item.value);
                        $(`#field-${item.value}`).removeClass('d-none');
                    });
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
                setTimeout(() => {
                    $loader('hide');
                }, 500);
            }
        })

        let name, phone, email, city, dob, date, month, year, gender, hascc;

        // name
        $('#field-name input').on('change', function() {
            name = this.value;
        });

        // phone
        $('#field-phone input').on('change', function() {
            phone = this.value;
        });

        // email
        $('#field-email input').on('change', function() {
            email = this.value;
        });

        // city
        $('#field-city select').on('change', function() {
            city = this.value;
        });

        // TODO: dob
        $('#field-dob select.input-date').on('change', function() {
            date = this.value;
        });
        $('#field-dob select.input-month').on('change', function() {
            month = this.value;
        });
        $('#field-dob select.input-year').on('change', function() {
            year = this.value;
        });

        // gender
        $('#field-gender input').on('change', function() {
            gender = this.value;
        });

        // hascc
        $('#field-hascc input').on('change', function() {
            hascc = this.value;
        });

        $("#submit-user").on('click', function(){
            if (!city && availableFields.indexOf('city') > -1) {
                city = $('#field-city select').val();
            }

            // check for default dob if available
            if ( availableFields.indexOf('dob') > -1) {
                if (!date) {
                    date = $('#field-dob select.input-date').val();
                }
    
                if (!month) {
                    month = $('#field-dob select.input-month').val();
                }
    
                if (!year) {
                    year = $('#field-dob select.input-year').val();
                }
    
                dob = `${year}-${month}-${date}`;
            }
 
            if (!gender && availableFields.indexOf('gender') > -1) {
                gender = $('#field-gender input').val();
            }

            if (!hascc && availableFields.indexOf('hascc') > -1) {
                hascc = $('#field-hascc input').val();
            }

            const payload = {
                name, phone, email, city, dob, gender, hascc,
            };

            $.ajax({
                url: `${BASE_URL_API}/campaign/user/${campaignId}`,
                cache: false,
                type: 'POST',
                dataType: 'json',
                data: JSON.stringify(payload),
                contentType: "application/json",
                success: function(result){
                    localStorage.setItem('userId', result.data.id);

                    window.location.href = `${BASE_URL}/customer-consent.php`;
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
    </script>
</body>
</html>