<?php
        $servidor="localhost";
		$usuario="root";
		$clave="";
		$baseDeDatos="inscripcion";
		$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
		if(!$enlace){
			echo "Algo está mal con la conexión a la base de Datos.";
		}else{
			echo "";
		}
    $sql=mysqli_query($enlace,"SELECT num_alumno, codMatri_alumno, 
                             dni_alumno,
                             nombres_alumno,
                             apellidos_alumno,
                             sexo,
                             fechNac_alumno,
                             direccion_alumno,
                             telefPer_alumno,
                             telefCasa_alumno,
                             email_alumno,
                             especialidad_alumno,
                             ciclo_alumno,
                             tipo_alumno,
                             codOperBan_alumno,
                             obser_alumno
                      from alumno");
    $reg= mysqli_num_rows($sql);
    if($reg == 0){
        echo "No se han encontrado registros";
    }
?>
<html>
    <head>
        <title>Reporte General de Alumnos</title>
    </head>
    <body>
    <table border='2'>
      <tr>
       <td>N°</td>
        <td><center>Código Matrícula</td>
        <td><center>DNI</td>
       	<td><center>Nombres</td>
        <td><center>Apellidos</td>
        <td><center>Sexo</td>
        <td><center>Fecha Nacimiento</td>
        <td><center>Direccion</td>
        <td><center>Telefono Personal</td>
        <td><center>Telefono Casa</td>
        <td><center>E-Mail</td>
        <td><center>Especialidad</td>
        <td><center>Ciclo</td>
       	<td><center>Tipo</td>
        <td><center>Código Op. Bancaria</td>
        <td><center>Observaciones</td>
      </tr>
<?php   
	while($res = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
      echo "<tr>";
      echo "<td><center>$res[num_alumno]</td>";
      echo "<td><center>$res[codMatri_alumno]</td>";
      echo "<td><center>$res[dni_alumno]</td>";
      echo "<td><center>$res[nombres_alumno]</td>";
      echo "<td><center>$res[apellidos_alumno]</td>";
      echo "<td><center>$res[sexo]</td>";
      echo "<td><center>$res[fechNac_alumno]</td>";
      echo "<td><center>$res[direccion_alumno]</td>";
      echo "<td><center>$res[telefPer_alumno]</td>";
      echo "<td><center>$res[telefCasa_alumno]</td>";
      echo "<td><center>$res[email_alumno]</td>";
      echo "<td><center>$res[especialidad_alumno]</td>"; 	
      echo "<td><center>$res[ciclo_alumno]</td>";
      echo "<td><center>$res[tipo_alumno]</td>";
      echo "<td><center>$res[codOperBan_alumno]</td>";
      echo "<td><center>$res[obser_alumno]</td>	";
      echo "</tr>";
    }
    ?>
    </body>
</html>