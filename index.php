<html>
<head>
<title>Inscripción</title>

</style>
<style type="text/css">
#apDiv1{
	z-index: 1;
  margin: 1rem;
  padding: 1rem;
  border: 2px solid #ccc;
  text-align: center;
  background-color:#ffffff;
  border-radius: 20px;
}
h1{
	text-align: center;
	padding: 12px;
	color: #444;
  font-size: 32px;
}
input[type='submit']{
  background-color: #48e;
  color: #fff;
  width: calc(80% - 70px);
  height: 40px;
  margin: 0 10%;
  margin-top: 25px;
  border: none;
} 
.inf {
	color:#808080;
  font-style: oblique;  
}
#apDiv2 {
	position: absolute;
	width: 140px;
	height: 125px;
	z-index: 1;
	left: 40px;
	top: 19px;
}
#apDiv3 {	position: absolute;
	width: 140px;
	height: 125px;
	z-index: 1;
	left: 40px;
	top: 19px;
}
#apDiv4 {
	position: absolute;
	width: 120px;
	height: 135px;
	z-index: 1;
	left: 130px;
	top: 16px;
}
#apDiv5 {
	position: absolute;
	width: 140px;
	height: 125px;
	z-index: 1;
	left: 1000px;
	top: 19px;
}
.elg{
  font-size: 20px;
}
.alu{
  font: small-caps 100%/200% serif;
}
</style>
</head>
<body>
<body bgcolor="#9BBCD0">
<div id="apDiv1">
  <form method="post" class="formulario">
    <h1>SISTEMA DE MATRÍCULA</h1>
    <p>
    <fieldset>
        <legend class="elg">Elige Modalidad:</legend>
        <input type="radio" name="R1" value="a">
        <label class="alu" for="Alum_Nue">Alumno Nuevo |</label>
        <input type="radio" name="R1" value="b">
        <label class="alu" for="Alum_Nue">Alumno Regular |</label>
        <input type="radio" name="R1" value="c">
        <label class="alu" for="Alum_Nue">Alumno Reingresante |</label>
        <input type="radio" name="R1" value="d">
        <label class="alu" for="Alum_Nue">Alumno Repitente</label>
      <div id="apDiv4"><img src="img/Escudo_de_la_Policía_Nacional_del_Peru.png"width="114" height="130"></div>
      <br>
    </p>
    </fieldset>
    <input type="submit" name="btnIngresar" value="INGRESAR">
    <?php
      if(isset($_POST['btnIngresar'])) {
        $m = $_POST['R1'];
          if($m == "a"){
            header("Location:Acceso_Matricula_Nuevo.php");
          }elseif($m == "b"){
            header("Location:Acceso_Matricula_Regular.php");
          }elseif($m == "c"){
            header("Location:Acceso_Matricula_Reingresante.php");
          }elseif($m == "d"){
            header("Location:Acceso_Matricula_Repitencia.php");
          }else{
            echo "";
          }
        }
    ?>
    <p class ="inf">
      Si tienes dudas en tu tipo de modalidad, llámanos a los siguientes números o envíanos un correo.<br><br>
      Nos comunicaremos contigo lo más pronto posible.<br><br>
      Telefonos: <br>
      E-mail: <br>
  </form>
</div>
<div id="apDiv5"><img src="img/OAT.png" alt=""width="120" height="125"></div>
</body>
</html>