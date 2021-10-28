<?php
 $conectar = mysqli_connect('localhost','sena','', 'uñas');

 if(!$conectar){
     echo "No conectado";
 }

 $Nombre = $_POST['Nombre'];
 $Apellido = $_POST['Apellido'];
 $FechaNacimiento = $_POST['FechaNacimiento'];
 $Sexo = $_POST['Sexo'];
 $Pregunta1 = $_POST['Pregunta1'];
 $Pregunta2 = $_POST['Pregunta2'];
 $Pregunta3 = $_POST['Pregunta3'];

 $sql = "INSERT INTO belleza (Nombre, Apellido, FechaNacimiento, Sexo, Pregunta1, Pregunta2, Pregunta3) VALUES ('$Nombre', '$Apellido', '$FechaNacimiento', '$Sexo', '$Pregunta1', '$Pregunta2', '$Pregunta3')";


 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
 
?>