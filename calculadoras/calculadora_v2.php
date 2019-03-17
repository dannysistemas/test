<?php
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
$opera = $_POST['Tipo_op'];

echo "El Primer Numero es: ".$num1;
echo"<br>";
echo "El Segundo Numero es: ".$num2;
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
    $resuntado=$num1+$num2;    
    else if($opera == 2)
        $resuntado=$num1-$num2;
        else if($opera == 3)
          $resuntado=$num1*$num2;
          else
            $resuntado=$num1/$num2;

 echo "Resultado es ".$resuntado;

?>