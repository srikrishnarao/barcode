<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		img{
			padding-left: 20px;
		}
	</style>
</head>
<body>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-primary" style="text-align: center;">Barcode Neowing Test</h1>
		</div>
	</div>
	
	
	<div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
		C39 <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('A001', 'C39')}}" alt="barcode" />　
		<br/><br/>
		C39+ <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('A001', 'C39+')}}" alt="barcode" />
		<br/><br/>
		C39E <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('A001', 'C39E')}}" alt="barcode" />
		<br/><br/>
		C39E+ <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('A001', 'C39E+')}}" alt="barcode" />
		<br/><br/>
		C93 <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('A001', 'C93')}}" alt="barcode" />
		<br/><br/>

	</div>
	
	
	
</body>
</html>
