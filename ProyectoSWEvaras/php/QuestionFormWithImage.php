<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
  <script src="../js/ShowImageInForm.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
	<form id='fquestion' name='fquestion' action='AddQuestionWithImage.php'>
    <div class= "FORMULARIO PREGUNTA">
	<div class="correo autor">
	Introduce tu correo*:	
	<input type="text" id="correo" name="correo"><br><br>
    </div>
	<div class="enunciado pregunta">
	Enunciado Pregunta*:	
	<input type="text" id="Pregunta" name ="Enunciado Pregunta"><br><br>
	</div>
	<div class="Respuesta Correcta 1">
	Respuesta Correcta*:	
	<input type="text" id="Respuesta Correcta" name="Respuesta Correcta"><br><br>
	</div>
	<div class="Respuesta Incorrecta 1">
	Respuesta incorrecta 1*:	
	<input type="text" id="Incorrecta1" name="Respuesta Incorrecta1"><br><br>
	</div>
	<div class="Respuesta Incorrecta 2">
	Respuesta incorrecta 2*:	
	<input type="text" id="Incorrecta2" name="Respuesta incorrecta2"><br><br>
	</div>
	<div class="Respuesta Incorrecta 3">
	Respuesta incorrecta 3*:	
	<input type="text" id="Incorrecta3" name="Respuesta incorrecta3"><br><br>
	</div>
	<div class="Complejidad">
	Introduce la complejidad(1-Baja,2-Media,3-Alta)*:	
	<input type="text" id="complejidad" name = "complejidad"><br><br>
	</div>
	<div class="Tema Pregunta">
	Tema Pregunta*:	
	<input type="text" id="Tema" name="Tema Pregunta"><br><br>
	</div>
	<div class="Enviar">
	<input type="submit" id="enviar" value="Mandar Preguntas"><br><br>
	</div>
	<div id="selector">
	PUEDES SUBIR UNA FOTO:
    <input type="file" id="FOTO" accept="image/*" name="Imagen"><br><br>
    </div>
	Los atributos con * son obligatorios y la pregunta no se enviara si los parametros no son validos.
	</form>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>