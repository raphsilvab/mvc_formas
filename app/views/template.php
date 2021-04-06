<!DOCTYPE html>
<html>
	<head>
		<title>Sistema cadastro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>assets/css/estilo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
	<form action="<?php echo URL_BASE; ?>" method="POST">
		<div class="col-12">
				<input type="submit" value="HOME" >
		</div>
	</form>	
		<?php $this->load($view, $viewData); ?>
	</body>
</html>