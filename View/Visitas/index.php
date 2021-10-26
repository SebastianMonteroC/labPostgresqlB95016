<html>
<head>
	<title>Lista de direcciones</title>
</head>
<body>
<h1>Lista de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
<form name="visita" id="visita" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="grabe" />
  <p>Este formulario permite registrar nuevas direcciones.</p>
  <p>nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" />
  </p>
  <p>apellidos:
    <input name="apellidos" type="text" id="apellidos" size="51" maxlength="50" />
  </p>
  <p>Telefono casa:
    <input name="telefonodecasa" type="text" id="telefonodecasa" size="51" maxlength="50" />
  </p>
  <p>Direccion casa:
    <input name="direcciondecasa" type="text" id="direcciondecasa" size="51" maxlength="50" />
  </p>
  <p>Telefono trabajo:
    <input name="telefonodetrabajo" type="text" id="telefonodetrabajo" size="51" maxlength="50" />
  </p>
  <p>Direccion trabajo:
    <input name="direcciondetrabajo" type="text" id="direcciondetrabajo" size="51" maxlength="50" />
  </p>
  <p>Correo electronico:
    <input name="correoelectronico" type="text" id="correoelectronico" size="51" maxlength="50" />
  </p>
  <p>
    <input name="Enviar" type="submit" id="Enviar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
</body>
</html>