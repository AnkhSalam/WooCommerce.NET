<html>
<head>
<?php  
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="inscripcion";
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumno Nuevo</title>
<style type="text/css">

.form{
	position:relative;
	width:450px;
	height:600px;
	padding-left: 30px;
	padding-top: 15px;
	background-color:#ffffff;
	border-radius: 20px;
}
#apDiv1 {
	position: absolute;
	width: 111px;
	height: 206px;
	z-index: 1;
	left: 93px;
	top: 48px;
	background-color: rgba(0, 0, 0, 0);
}
#apDiv2 {
	position: absolute;
	width: 80px;
	height: 167px;
	z-index: 2;
	left: 277px;
	background-color: rgba(0, 0, 0, 0);
	top: 56px;
}
#apDiv3 {
	position: absolute;
	left: 479px;
	top: 55px;
	width: 426px;
	font-family: monospace;
	height: 238px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	width: 173px;
	height: 23px;
	z-index: 4;
	left: 479px;
	top: 26px;
	font-family: fantasy;
}
#apDiv5 {
	position: absolute;

	width: 255px;
	height: 23px;
	z-index: 4;
	left: 88px;
	top: 506px;
	font-family: fantasy;
}
#apDiv6 {
	position: absolute;
	left: 88px;
	top: 320px;
	width: 1000px;
	height: 160px;
	font-family: monospace;
	z-index: 3;
}
#apDiv7 {
	position: absolute;
	width: 529px;
	height: 82px;
	z-index: 5;
	left: 88px;
	top: 546px;
	font-family: monospace;
}
#apDiv8 {
	position: absolute;
	width: 600px;
	height: 76px;
	z-index: 6;
	left: 89px;
	top: 628px;
}
#apDiv9 {
	position: absolute;
	width: 255px;
	height: 23px;
	z-index: 4;
	left: 89px;
	top: 290px;
	font-family: fantasy;
}
.form{
	background-color: ##ffffff;
	z-index: 1;
  	margin: 3rem;
  	padding: 2rem;
  	border: 2px solid #ccc;
  	width: 800px;
  	height: 750px;
}
#apDiv10 {	
	position: absolute;
	width: 111px;
	height: 166px;
	z-index: 1;
	left: 90px;
	top: 80px;
}
input[type='submit']{
  background-color: #48e;
  color: #fff;
  width: 150px;
  height: 40px;
  margin: 0 10%;
  margin-top: 25px;
  border: none;
} 
</style>
</head>

<body>
<body bgcolor="#9BBCD0">
<form method="post" class="form">
<div id="apDiv1">
  <p>
  <img src="img/Escudo_de_la_Policía_Nacional_del_Peru.png" width="164" height="200">  
  <p><center>
  </p>
</div>
<div id="apDiv3">
  <p>Nombre: 
    <input type="text" name="txtNombre">
  </p>
  <p>Apellidos: <input type="text" name="txtApellidos"> </p>
  <p>Fecha de Nac. d/m/a: <input type="text" name="txtFecha"></p>
  <p>Sexo: 
    <select name="selSexo">
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
    </select>
  </p>
 D.N.I: 
<input type="text" name="txtDNI"></div>
<div id="apDiv4">DATOS GENERALES</div>
<div id="apDiv5">
  <p>DATOS ACADÉMICOS</p>
</div>
<div id="apDiv9">
  <p>DATOS DE CONTACTO</p>
</div>
<div id="apDiv6"><p>
  Direccion(Calle - Avenida - Jiron , Etc): 
	<select name="selDireccion">
    <option value="Calle">Calle</option>
    <option value="Avenida">Avenida</option>
    <option value="Jiron">Jirón</option>
    <option value="Pasaje">Pasaje</option>
    </select>
  </p>
  <p>Lugar-Urbanizacion: 
    <input type="text" name="txtLugar" id="txtLugar">	
  Distrito: 
  <input type="text" name="txtDistrito" id="txtDistrito">
  </p>
  <p>Telefono Casa: 
  <input type="text" name="txtTelefonoC"></p>
  <p>Telefono Personal: 
    <input type="text" name="txtTelefonoP"></p>
  <p>Email: 
    <input type="text" name="txtEmail" style="width:600px">
  </p>
  <p>&nbsp;</p>
</div>
<div id="apDiv7">
	<p>Especialidad: 
    <select name="cbEspecialidad">
    <option value="Computación e Informática">Computación e Informática</option>
    <option value="Contabilidad">Contabilidad</option>
    <option value="Mecánica">Mecánica Automotriz</option>
    <option value="Electrónica">Electrónica Industrial</option>
    </select> 
    Ciclo: 
    <select name="cbCiclo">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
  </p>
  <p>Codigo Operación Bancaria: 
    <input type="text" name="txtCOB">
  </p>
</div>
<div id="apDiv8">
    <p>
      <input type="submit" name="btnGuardar"value="Guardar">
      <?php
      if(isset($_POST['btnGuardar'])){
      	if(empty($_POST['txtDNI'])){
      		
      	}else{
			$fechaNac = $_POST['txtFecha'];	
			$codMatri = $_POST['txtDNI'];
			$nombreAlu = $_POST['txtNombre'];
			$apellidoAlu = $_POST['txtApellidos'];
			$contraAlu = $_POST['txtDNI'];
			$sexoAlu = $_POST['selSexo'];
			$dniAlu = $_POST['txtDNI'];
			$dirAlu1 = $_POST['selDireccion'];
			$dirAlu2 = $_POST['txtLugar'];
			$dirAlu3 = $_POST['txtDistrito'];
			$dirAlu = $dirAlu1." ".$dirAlu2." ".$dirAlu3;
			$telefPer = $_POST['txtTelefonoP'];
			$telefCasa = $_POST['txtTelefonoC'];
			$emailAlu = $_POST['txtEmail'];
			$especialidad = $_POST['cbEspecialidad'];
			$ciclo = $_POST['cbCiclo'];
			$tipo = "NV";
			$codigoOpBan = $_POST['txtCOB'];
			mysqli_query($enlace,"INSERT INTO alumno(codMatri_alumno,
											dni_alumno,
											contrasenia_alumno,
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
											obser_alumno)
									VALUES('$codMatri',
											'$dniAlu',
											'$contraAlu',
											'$nombreAlu',
											'$apellidoAlu',
											'$sexoAlu',
											'$fechaNac',
											'$dirAlu',
											'$telefPer',
											'$telefCasa',
											'$emailAlu',
											'$especialidad',
											'$ciclo',
											'$tipo',
											'$codigoOpBan',
											'')");
		}
	}
?>
      <a href="Boleta_Matricula_NG.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=1000'); return false;"><input type="submit" name="btnGenBoleta" value="Generar Boleta"></a>
    </p>
</div>
<div id="apDiv2">
  <p> <img src="img/OAT.png" width="200" height="190">
</div>
</form>
</body>
</html>