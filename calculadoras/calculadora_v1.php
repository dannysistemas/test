<?php
const  num1 = 4;
const  num2 = 5;
$opera = $_POST['Tipo_op'];
echo "El Primer Numero es: ".num1;
echo"<br>";
echo "El Segundo Numero es: ".num2;
echo"<br>";
if ($opera == 1) 
  echo " Tipo de operacion es: Suma";    
    else if($opera == 2)
    echo " Tipo de operacion es: Resta"; 
        else if($opera == 3)
        echo " Tipo de operacion es: Multiplicacion";
          else
          echo " Tipo de operacion es: Divicion"; 

echo"<br>";

if ($opera == 1) 
    $resultado=num1+num2;    
    else if($opera == 2)
        $resultado=num1-num2;
        else if($opera == 3)
          $resultado=num1*num2;
          else
            $resultado=num1/num2;

 echo "Resultado es ".$resultado;

?>