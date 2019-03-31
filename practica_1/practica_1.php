<?php
const  num1 = 1;
const  num2 = 2;
const  num3 = 3;
const  num4 = 4;
const  num5 = 5;
const  num6 = 6;
const  num7 = 7;
const  num8 = 8;
const  num9 = 9;
const  num10 = 10;
$min = 1;
$max =100;
$minn = -100;
$maxn =-1;
$resultado =0;
$aleatoreo =0;
$pares =0;
$impares =0;
/* $opera = $_POST['Tipo_op'];
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
 */
 echo "Punto 1 [".num1.",".num2.",".num3.",".num4.",".num5.",".num6.",".num7.",".num8.",".num9.",".num10."]";
 echo "<br>Punto 2 [";
for($i=1;$i<=10;$i++){
    echo "".$i. ",";
}
echo "]<br>";
echo "Punto 3 [";
for($i=1;$i<=100;$i++){
    echo "".$i. ",";
    if($i%30==0){
       echo"<br>";
    }
}
echo "]<br>";
echo "Punto 4 [";
for($i=1;$i<=200;$i++){
    //echo "".$i. ",";
    if($i%2==0){
        echo "".$i. ",";
        if($i%30==0){
            echo"<br>";
         }
    }
}
echo "]";

echo "<br>Punto 5 [";
for($i=1;$i<=10;$i++){
    echo "".rand ( $min , $max ).",";
}
echo "]";

for($i=1;$i<=100;$i++){
    $resultado+=$i;
}
echo "<br>Punto 6 : Resultado suma = ".$resultado;
echo "<br>Punto 7 [";
for($i=1;$i<=100;$i++){
    //echo "".$i. ",";
    if($i%3==0){
        echo "".$i. ",";
        
    }
}
echo "]";
echo "<br>Punto 8 [";
for($i=1;$i<=10;$i++){
    $aleatoreo= rand ( $min , $max );
    echo "".$aleatoreo. ",";
    if($aleatoreo%2==0){
        $pares+=1;      
    }
    else{
        $impares+=1;
    }
}
echo "]";
echo " Total pares= ".$pares." Total impares= ".$impares;
$pares=0;
$impares=0;
$paresn=0;
$imparesn=0;
echo "<br>Punto 9 [";
for($i=1;$i<=10;$i++){
    $aleatoreo= rand ( $min , $max );
    echo "".$aleatoreo. ",";
    if($aleatoreo%2==0){
        $pares+=1;      
    }
    else{
        $impares+=1;
    }
}
echo "]";
echo " Total pares= ".$pares." Total impares= ".$impares;
echo " [";
for($i=1;$i<=10;$i++){
    $aleatoreo= rand ( $minn , $maxn );
    echo "".$aleatoreo. ",";
    if($aleatoreo%2==0){
        $paresn+=1;      
    }
    else{
        $imparesn+=1;
    }
}
echo "]";
echo " Total pares= ".$paresn." Total impares= ".$imparesn;

?>