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
    $cod_cur = $_POST['cod_cur'];
    $sql4= mysqli_query ($enlace, "SELECT 
                                    cod_cur,
                                    nom_cur 
                                  FROM curso 
                                  WHERE cod_car like '".$cod_cur."' ");
                        
    echo"<option value='0'></option>";
    while($res33 = $sql4->fetch_assoc()) 
    {           
    $html = "<option value='a'>".$res33['cod_cur']." - ".$res33['nom_cur']."</option>";
    echo $html;
    }
?>