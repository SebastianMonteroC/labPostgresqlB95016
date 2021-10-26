<html>
<head>
	<title>Direcciones</title>
</head>
<body>
<h1>Direcciones</h1>
<p><?php echo $mensaje; ?><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar direccion.</a><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
</body>
</html>