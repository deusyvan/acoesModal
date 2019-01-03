<html>
	<head>
		<meta charset="utf-8">
		<title>AÇÕES MODAL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		
	</head>
	
	<body>
		<h1>Ações em Modal</h1>
		<a href="<?php echo BASE_URL; ?>home">Home</a>
		<a href="<?php echo BASE_URL; ?>usuarios">Usuários</a>
		<hr/>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/javascript.js" ></script>	
	</body>
</html>