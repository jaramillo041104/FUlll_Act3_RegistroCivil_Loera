<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="Nombres" placeholder="Nombre ">
    	<input type="text" name="Apellidos" placeholder="Apellido">
		<input type="email" name="Correo" placeholder="Email">
		<input type="text" name="Telefono" placeholder="Telefono">
    	<input type="submit" name="registrar">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>