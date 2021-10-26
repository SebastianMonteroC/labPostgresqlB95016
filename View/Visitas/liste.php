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
		<th>Telefono casa</th>
		<th>Direccion casa</th>
		<th>Telefono trabajo</th>
		<th>Direccion trabajo</th>
		<th>Correo electronico</th>
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