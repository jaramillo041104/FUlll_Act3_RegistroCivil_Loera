<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Telefono']) >= 1) {
	    $name = trim($_POST['Nombres']);
		$lastname = trim($_POST['Apellidos']);
	    $correo = trim($_POST['Correo']);
		$telefono = trim($_POST['Telefono']);
	    $consulta = "INSERT INTO tb_empleado(Nombres, Apellidos, Correo, Telefono) VALUES ('$name','$lastname','$correo','$telefono')" ;
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>