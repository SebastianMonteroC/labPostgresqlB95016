<html>
<head>
	<title>Lista de direcciones</title>
</head>
<body>
<h1>Lista de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar nueva direccion.</a></p>

<table>
	<tr>
		<th>nombre</th>
		<th>apellidos</th>
		<th>Telefóno de su casa</th>
		<th>Dirección de su casa</th>
		<th>Teléfono de su trabajo</th>
		<th>Direccion de su trabajo</th>
		<th>Correo electrónico</th>
	</tr>

<?php
foreach ($direcciones as $direccion)
{
?>
	<tr>
		<td><?php echo $direccion->nombre; ?></td>
		<td><?php echo $direccion->apellidos; ?></td>
		<td><?php echo $direccion->telefonodecasa; ?></td>
		<td><?php echo $direccion->direcciondecasa; ?></td>
		<td><?php echo $direccion->telefonodetrabajo; ?></td>
		<td><?php echo $direccion->direcciondetrabajo; ?></td>
		<td><?php echo $direccion->correoelectronico; ?></td>
	</tr>

<?php
}
?>

</table>

<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar nueva direccion.</a></p>
</body>
</html>