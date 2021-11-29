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
<title>Alumno Reingresante</title>
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
.form{
  background-color: ##ffffff;
  z-index: 1;
    margin: 3rem;
    padding: 2rem;
    border: 2px solid #ccc;
    width: 800px;
    height:1250px;
}
#apDiv1 {
	position: absolute;
	width: 198px;
	height: 238px;
	z-index: 1;
	left: 97px;
	top: 50px;
}
#apDiv2 {
	position: absolute;
	width: 80px;
	height: 167px;
	z-index: 2;
	left: 10;
	top: 50;
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
	width: 282px;
	height: 23px;
	z-index: 4;
	left: 93px;
	top: 501px;
  font-family: fantasy;
}
#apDiv6 {
	position: absolute;
	left: 90px;
	top: 323px;
	width: 694px;
	height: 163px;
  font-family: monospace;
	z-index: 3;
}
#apDiv7 {
	position: absolute;
	width: 565px;
	height: 410px;
	z-index: 5;
  font-family: monospace;
	left: 89px;
	top: 541px;
}
#apDiv8 {
	position: absolute;
	width: 600px;
  height: 76px;
	z-index: 6;
	left: 90px;
	top: 1061px;
}
#apDiv9 {
	position: absolute;
	width: 255px;
	height: 23px;
	z-index: 4;
	left: 90px;
	top: 295px;
  font-family: fantasy;
}
#apDiv10 {
	position: absolute;
	left: 90px;
	top: 962px;
	width: 443px;
	height: 82px;
  font-family: monospace;
	z-index: 7;
}
#apDiv11 {
	position: absolute;
	width: 282px;
	height: 23px;
  font-family: fantasy;
	z-index: 4;
	left: 90px;
	top: 930px;
}
#apDiv15 {  
  position: absolute;
  width: 111px;
  height: 166px;
  z-index: 1;
  left: 330PX;
  top: 125px;
}input[type='submit']{
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
<div id="apDiv6">
  <p>Direccion(Calle - Avenida - Jiron , Etc): 
  <select name="selDireccion">
    <option value="Calle">Calle</option>
    <option value="Avenida">Avenida</option>
    <option value="Jiron">Jirón</option>
    <option value="Pasaje">Pasaje</option>
    </select>
  </p>
  <p>Lugar-Urbanizacion: 
    <input type="text" name="txtLugar"> 
  Distrito: 
  <input type="text" name="txtDistrito">
  </p>
  <p>Telefono Casa: 
  <input type="text" name="txtTelefonoC">
  </p>
  <p>Telefono Personal: 
    <input type="text" name="txtTelefonoP">
  
  <p>Email: 
    <input type="text" name="txtEmail" style="width:600px">
  </p>
  <p>&nbsp;</p>
</div>
<div id="apDiv7">
  <p>N° Autorizacion Secretaria Academica: <input type="text" name="txtNumAutoSecretAcad"></p>
  <table border="2" class="tabla1">
    <tr>
      <td width="100">Periodo</td>
      <td>Ciclo</td>
      <td>I.E.S.T</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="txtPerd0">
      </td>
      <td>
        <select name="selCiclo0">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      </select></td>
      <td>
        <input type="text" name="txtIEST0" style="width: 400px"></td>
    </tr>

    <tr>
      <td><input type="text" name="txtPerd1"></td>
      <td><select name="selCiclo1">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
      <td><input type="text" name="txtIEST1" style="width: 400px"></td>
    </tr>

    <tr>
      <td><input type="text" name="txtPerd2"></td>
      <td><select name="selCiclo2">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
      <td><input type="text" name="txtIEST2" style="width: 400px"></td>
    </tr>

    <tr>
      <td><input type="text" name="txtPerd3"></td>
      <td><select name="selCiclo3">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
      <td><input type="text" name="txtIEST3" style="width: 400px"></td>
    </tr>
    <tr>
      <td><input type="text" name="txtPerd4"></td>
      <td><select name="selCiclo4">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
      <td><input type="text" name="txtIEST4" style="width: 400px"></td>
    </tr>

  </table>
  <br>
  <table border="2" class="tabla1">
    <tr>
      <td>Curso de Repitencia </td>
      <td>Ciclo</td>
    </tr>
    <tr>
      <td><input type="text" name="txtCursoRepi0" style="width: 500px"></td>
      <td><select name="selCicloR0">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
    </tr>
    <tr>
      <td><input type="text" name="txtCursoRepi1" style="width: 500px"></td>
      <td><select name="selCicloR1">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
    </tr>
    <tr>
      <td><input type="text" name="txtCursoRepi2" style="width: 500px"></td>
      <td><select name="selCicloR2">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
    </tr>
    <tr>
      <td><input type="text" name="txtCursoRepi3" style="width: 500px"></td>
      <td><select name="selCicloR3">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
    </tr>
    <tr>
      <td><input type="text" name="txtCursoRepi4" style="width: 500px"></td>
      <td><select name="selCicloR4">
      <option value="" selected></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
        </select></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<div id="apDiv8">
      <input type="submit" name="btnGuardar" value="Guardar">
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
      $especialidad = $_POST['selEspecialidad'];
      $ciclo = $_POST['selCiclo11'];
      $tipo = "RI";
      $codigoOpBan = $_POST['txtCodOpBan'];

      $numero = $_POST['txtNumAutoSecretAcad'];
      $periodo0 = $_POST['txtPerd0'];
      $periodo1 = $_POST['txtPerd1'];
      $periodo2 = $_POST['txtPerd2'];
      $periodo3 = $_POST['txtPerd3'];
      $periodo4 = $_POST['txtPerd4'];
      $cicloNm0 = $_POST['selCiclo0'];
      $cicloNm1 = $_POST['selCiclo1'];
      $cicloNm2 = $_POST['selCiclo2'];
      $cicloNm3 = $_POST['selCiclo3'];
      $cicloNm4 = $_POST['selCiclo4'];
      $inst0 = $_POST['txtIEST0'];
      $inst1 = $_POST['txtIEST1'];
      $inst2 = $_POST['txtIEST2'];
      $inst3 = $_POST['txtIEST3'];
      $inst4 = $_POST['txtIEST4'];
      $currep0 = $_POST['txtCursoRepi0'];
      $currep1 = $_POST['txtCursoRepi1'];
      $currep2 = $_POST['txtCursoRepi2'];
      $currep3 = $_POST['txtCursoRepi3'];
      $currep4= $_POST['txtCursoRepi4'];
      $cicloR0 = $_POST['selCicloR0'];
      $cicloR1 = $_POST['selCicloR1'];
      $cicloR2 = $_POST['selCicloR2'];
      $cicloR3 = $_POST['selCicloR3'];
      $cicloR4 = $_POST['selCicloR4'];
      $concat = "Número de Secretaria Académica: ".$numero." | - Información: ".$periodo0." ".$cicloNm0." ".$inst0." | ".$periodo1." ".$cicloNm1." ".$inst1." | ".$periodo2." ".$cicloNm2." ".$inst2." | ".$periodo3." ".$cicloNm3." ".$inst3." | ".$periodo4." ".$cicloNm4." ".$inst4." | "."Cursos de Repitencia: ".$currep0." ".$cicloR0." | ".$currep1." ".$cicloR1." | ".$currep2." ".$cicloR2." | ".$currep3." ".$cicloR3." | ".$currep4." ".$cicloR4;

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
                      '$concat')");
    }
  }
?>
      <a href="Boleta_Matricula_R.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=1000'); return false;"><input type="submit" name="btnGenBoleta" value="Generar Boleta"></a>
</div>
<div id="apDiv10">
  <p>Especialidad 
    <select name="selEspecialidad">
      <option value=""></option>
      <option value="Computación e Informática">Computación e Informática</option>
      <option value="Contabilidad">Contabilidad</option>
      <option value="Mecánica Automotriz">Mecánica Automotriz</option>
      <option value="Electrónica Industrial">Electrónica Industrial</option>      
    </select> 
  Ciclo 
  <select name="selCiclo11">
      <option value=""></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
  </select>
  </p>
  <p>Código de Operación Bancaria:
    <input type="text" name="txtCodOpBan">
  </p>
  <p>&nbsp;</p>
</div>
<div id="apDiv11">
  <p>MATRICULA</p>
</div>
</form>
<div id="apDiv15"><img src="img/OAT.png" width="200" height="190"></div>

</body>
</html>