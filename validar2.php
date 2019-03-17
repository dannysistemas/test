<?php
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$tipos = $_POST['Tipos'];
$Nro = $_POST['Nro'];
$genero = $_POST['genero'];
$telefono = $_POST['Telefono'];
$celular = $_POST['Celular'];
$departamentos= $_POST['Departamentos'];
$municipios= $_POST['Municipios'];
$correo = $_POST['Correo'];
$contraseña= $_POST['Contraseña'];
$confirmar = $_POST['Confirmar'];
$foto= $_POST['Foto'];

echo "El Nombre es: ".$nombre;
echo"<br>";
echo "El Apellido es: ".$apellido;
echo"<br>";
echo " Tipo de Documento es: ".$tipos;
echo"<br>";
echo " Numero de Documento es: ".$Nro;
echo"<br>";
echo "El Sexo es: ".$genero;
echo"<br>";
echo "Telefono es: ".$telefono;
echo"<br>";
echo "Celular es: ".$celular;
echo"<br>";
echo "Departamento es: ".$departamentos;
echo"<br>";
echo "Municipio es: ".$municipios;
echo"<br>";
echo "Correo Electronico es: ".$correo;
echo"<br>";
echo "La contraseña es: ".$contraseña;
echo"<br>";
echo "La Foto es: ".$foto;
echo"<br>";

?>