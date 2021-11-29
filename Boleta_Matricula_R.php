<html>
<head>
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
?>
<script language="javascript" src="js/jquery-3.5.1.min.js"></script>

<script language ="javascript">
  $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx1").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx2").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx3").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx4").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx5").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx6").html(data);
						});            
					});
				})
			});
      $(document).ready(function(){
				$("#cbEsp").change(function () {
					$("#cbEsp option:selected").each(function () {
						cod_cur = $(this).val();
						$.post("includes/getLc.php", { cod_cur: cod_cur }, function(data){
							$("#cbx7").html(data);
						});            
					});
				})
			});
</script>
<title>Boleta Matrícula</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 143px;
	height: 141px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	width: 329px;
	height: 76px;
	z-index: 2;
	left: 158px;
	top: 50px;
}
#apDiv3 {
	position: absolute;
	width: 350px;
	height: 150px;
	z-index: 3;
	left: 498px;
	top: 71px;
}
#apDiv4 {
	position: absolute;
	width: 807px;
	height: 95px;
	z-index: 4;
	left: 50px;
	top: 250px;
}
#apDiv5 {
	position: absolute;
	left: 120px;
	top: 145px;
	width: 571px;
	height: 322px;
	z-index: 5;
	font-size-adjust: inherit;
}
#apDiv6 {
	position: absolute;
	left: 16px;
	top: 680px;
	width: 122px;
	height: 25px;
	z-index: 6;
}
#apDiv7 {
	position: absolute;
	width: 806px;
	height: 213px;
	z-index: 7;
	left: 17px;
	top: 710px;
}
#apDiv8 {
	position: absolute;
	left: 16px;
	top: 932px;
	width: 802px;
	height: 38px;
	z-index: 8;
}
#apDiv9 {
	position: absolute;
	left: 11px;
	top: 929px;
	width: 125px;
	height: 38px;
	z-index: 8;
}
#apDiv11 {
	position: absolute;
	left: 120px;
	top: 924px;
	width: 125px;
	height: 38px;
	z-index: 8;
}
#apDiv40 {
	position: absolute;
	left: 80px;
	top: 420px;
	width: 125px;
	height: 150px;
	z-index: 8;
}
</style>
</head>
<body>
<div id="apDiv1"><img src="img/OAT.png" width="142" height="140"></div>
<div id="apDiv2"><center>
Instituto de Educación Superior Tecnológica Pública<br>
Policía Nacional del Perú<br>
Gral. GC. Oscar Arteta Terzi</center></div>
<div id="apDiv3">
<p>
<form method="post">
<input type="text" name="txtValidar" placeholder="Código de Matrícula"><p>
Carrera: 
      <select name="cbEspecialidad" style="width:250px">
        <option value="0"></option>
        <option value="COMP0">Computación e Informática</option>
        <option value="CONT0">Contabilidad</option>
        <option value="MECA0">Mecánica Automotriz</option>
        <option value="ELEC0">Electrónica Industrial</option>
        </select> <p>
  Ciclo: 
      <select name="cbCiclo"style="width:50px">
        <option value='' selected></option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>      
    </select> 
    <p>
<input type="submit" name="btnValidar" value="Validar">
</div>
<?php

  if(isset($_POST['btnValidar'])){
    $val = $_POST['txtValidar'];
    $sql=mysqli_query($enlace,"SELECT codMatri_alumno, 
                             dni_alumno,
                             nombres_alumno,
                             apellidos_alumno,
                             especialidad_alumno 
                      from alumno 
                      where codMatri_alumno LIKE '".$val."' LIMIT 1");
	while($res = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		echo"<div id='apDiv4'>";
      echo"<table width='650' border='2'>";
      echo"<tr>";
        echo"<td width='59'><center>Código Matrícula</td>";
        echo"<td width='59'><center>DNI</td>";
        echo"<td width='200'><center>Nombres</td>";
        echo"<td width='200'><center>Apellidos</td>";
        echo"<td width='300'><center>Especialidad</td>";
      echo"</tr>";
      echo"<tr height='50'>";
        echo"<td><center>$res[codMatri_alumno]</td>";
        echo"<td><center>$res[dni_alumno]</td>";
        echo"<td><center>$res[nombres_alumno]</td>";
        echo"<td><center>$res[apellidos_alumno]</td>";
        echo"<td><center>$res[especialidad_alumno]</td>";				
		  echo"</tr>";
      echo"</table><p><center>";
      echo" Tipo: <select name='tp' style='width:80px'>";
      echo" <option value='' selected></option>";
      echo" <option value='1'>Regular</option>";
      echo" <option value='2'>Reingresante</option>";
      echo" <option value='3'>Nuevo</option>";
      echo" <option value='4'>Repitente</option>";
      echo" </select> ";
      echo" Turno: <select name='tt' style='width:70px'>";
      echo" <option value='' selected></option>";
      echo" <option value='1'>Mañana</option>";
      echo" <option value='2'>Tarde</option>";
      echo" <option value='3'>Noche</option>";
      echo" </select> ";
      echo" Periodo: <input type='text' style='width:90px' placeholder='(e.j)2018-II'></center>";
    echo"<h8><br> MATRÍCULA: </h8></div>";
  	}?>
    
    <?php
    $carrera = $_POST['cbEspecialidad'];
    $ciclo = $_POST['cbCiclo'];
    $sql8 = mysqli_query($enlace,"SELECT cod_cur,
                                         nom_cur,
                                         horas_cur 
                                      FROM curso 
                                      WHERE cod_car like '".$carrera."' 
                                              and cod_ciclo like '".$ciclo."'");
          ?>
          <div id="apDiv40">
              <table width='567' border='1'>
                <tr>
                <td><center>Codigo</td>
                <td width='50'><center>Cursos</td>
                <td width='50'><center>Horas</td>
                </tr>
          <?php
          while($res8 = mysqli_fetch_array($sql8, MYSQLI_ASSOC)){
            echo"<tr>";
              echo"<td><center>$res8[cod_cur]</td>";
              echo"<td><center>$res8[nom_cur]</td>";
              echo"<td><center>$res8[horas_cur]</td>";				
            echo"</tr>";
                echo "</div>";
          }
  }
?>
</form>
</p>
<div id="apDiv11">
  <table width="567" height="265" border="1"><form method="POST"><tr><td colspan ="2">
      Curso Repitencia 
        <select id = "cbEsp" name="cbEsp" style="width:250px">
        <option value="0"></option>
        <option value="COMP0">Computación e Informática</option>
        <option value="CONT0">Contabilidad</option>
        <option value="MECA0">Mecánica</option>
        <option value="ELEC0">Electrónica</option>
        </select>
    
    <tr>
      <td>
      <select id="cbx" name="cbx">
    </select></td>
    </tr>
    <tr>
      <td><select id="cbx1" name="cbx"></td>
      
    </tr>
    <tr>
      <td><select id="cbx2" name="cbx"></td>
      
    </tr>
    <tr>
      <td><select id="cbx3" name="cbx"></td>
      
    </tr>
    <tr>
      <td><select id="cbx4" name="cbx"></td>
      
    </tr>
    <tr>
      <td><select id="cbx5" name="cbx"></td>
      
    </tr>
  </table><p><center>
  
  <input type="submit" value="Imprimir Boleta" name="btnImprimir" onClick="window.print();">
  </form>
</div>
</body>
</html>
