<?php
	$files = array();
	$dir = opendir('.'); // open the cwd..also do an err check.
	while(false != ($file = readdir($dir))) {
			if(($file != ".") and ($file != "..") and ($file != "index.php")) {
					$files[] = $file; // put in array.
			}   
	}

	natsort($files); // sort.

?>

<head>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

	

<body>
	<div class="container">
		<div class="col-md-8">
			<img src="assets/images/logo.png" style="float:right; max-width:300px; max-height:120px; margin-top:10px;" alt="">
			<h1>Our Progress So Far</h1>
			<hr>
			<table class="table table-hover table-bordered">
			
			<thead>
			  <tr>
				<th style="width:50px;">Num</th>
				<th>Page</th>
			  </tr>
			</thead>
			<tbody>
			  
				<?php
				
					$num = 1;
					foreach($files as $file) {
						if( strpos($file, 'php') !== false){
					?>
						<tr>
							<td class="text-center"><?php echo $num; ?></td>
							<td><?php echo $file;?>
							<a href="<?php echo $file ;?>" target="_blank">
								<button class="btn btn-success pull-right" style="border-radius:0px; min-width:100px; float: right;">View</button>
								</td>
						</a>
						</tr>
					<?php
						$num++; 
						}
						
						} ?>
				</tbody>
				</table>
		</div>
	</div>
</body>