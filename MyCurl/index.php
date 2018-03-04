<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Модуль обработки cURL запросов</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="css\styles.css"> -->
	</head>

	<body>
		<h1>Модуль обработки cURL запросов</h1>

		<!-- Форма для ввода рабочего URLа: -->
		<form action="mycurl-handler.php" method="get">
			<?php // TODO: переменную передавать в другую вкладку - открывать хендлер в другой вкладке ?>
		  <fieldset class="form-group">
		    <label for="url">Рабочий URL ($url)</label>
		    <input name="url" type="url" class="form-control" id="Url" placeholder="Введите Web-адрес">
		    <small class="text-muted">Этот адрес будет использоваться в запросе cURL в качестве загружаемого URL (переменной $url) в curl_init($url) или в curl_setopt($ch, CURLOPT_URL, $url)</small>
			</fieldset>


		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<div class="">Авторизация:</div>




		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
	</body>
</html>



<!-- LiveReload скрипт -->
<script src="http://localhost:35729/livereload.js" charset="utf-8"></script>
