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
    $carrera = $_POST['cbEspecialidad'];
    $ciclo = $_POST['cbCiclo'];
    $sql8 = mysqli_query($enlace,"SELECT 
                                    cod_cur,
                                    nom_cur,
                                    horas_cur 
                                FROM curso 
                                WHERE cod_car = '$carrera' 
                                        and cod_ciclo = '$ciclo'");
    while($res8 = mysqli_fetch_array($sql8,MYSQLI_ASSOC)){
        echo"<div id='apDiv40'>";
		echo"<table>";
      echo"<tr>";
        echo"<td>Código Curso</td>";
        echo"<td>Curso</td>";
        echo"<td>Horas</td>";
      echo"</tr>";
      echo"<tr>";
        echo"<td><center>$res8[cod_cur]</td>";
        echo"<td><center>$res8[nom_cur]</td>";
        echo"<td><center>$res8[horas_cur]</td>";				
		  echo"</tr>";
          echo "</div>";
    }
?>