<?php
$y = $_POST['x'];
$x = $_POST['y'];
echo "posicion en x:[".$y."] posicion en y:[".$x."]";
$x=$x-1;
$y=$y-1;
if($x==0){
    $x=7;
}else if($x==1){
    $x=6;
}else if($x==2){
    $x=5;
}else if($x==3){
    $x=4;
}else if($x==4){
    $x=3;
}else if($x==5){
    $x=2;
}else if($x==6){
    $x=1;
}else if($x==7){
    $x=0;
};
$ajedrez=[
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0]
];
$ajedrez[$x][$y]=2;
$i=$x-1;
$j=$y-1;
//diagonal izquierda asc
$can_dia=0;
while($i>=0 or $j>=0){
    $ajedrez[$i][$j]=1;
    $i=$i-1;
    $j=$j-1;
    $can_dia=$can_dia+1;
};
//diagonal izquierda des
$i=$x+1;
$j=$y-1;
$can_did=0;
while($i<=7 or $j>=0){
    $ajedrez[$i][$j]=1;
    $i=$i+1;
    $j=$j-1;
    $can_did=$can_did+1;
};
//diagonal derecha asc
$i=$x-1;
$j=$y+1;
$can_dda=0;
while($i>=0 or $j<=7){
    $ajedrez[$i][$j]=1;
    $i=$i-1;
    $j=$j+1;
    $can_dda=$can_dda+1;
};
//diagonal derecha des
$i=$x+1;
$j=$y+1;
$can_ddd=0;
while($i<=7 or $j<=7){
    $ajedrez[$i][$j]=1;
    $i=$i+1;
    $j=$j+1;
    $can_ddd=$can_ddd+1;
};
//izquierda
$i=$x;
$j=$y-1;
$can_i=0;
while($j>=0){
    $ajedrez[$i][$j]=1;
    $j=$j-1;
    $can_i=$can_i+1;
};
//derecha
$i=$x;
$j=$y+1;
$can_d=0;
while($j<=7){
    $ajedrez[$i][$j]=1;
    $j=$j+1;
    $can_d=$can_d+1;
};
//arriba
$i=$x-1;
$j=$y;
$can_u=0;
while($i>=0){
    $ajedrez[$i][$j]=1;
    $i=$i-1;
    $can_u=$can_u+1;
};
//abajo
$i=$x+1;
$j=$y;
$can_a=0;
while($i<=7){
    $ajedrez[$i][$j]=1;
    $i=$i+1;
    $can_a=$can_a+1;
};
/*echo "ajedre<".$ajedrez[2][6];
for($i=0;$i<=7;$i++){
    //echo "".$i. ",";
    echo"<br>";
    for($j=0;$j<=7;$j++){
        echo "".$ajedrez[$i][$j]. ",";
    }
}*/
$blanca=true;
echo "<table border='1'>";
echo "<tbody>";
for($i=0;$i<=7;$i++){
    //echo "".$i. ",";
    if($i%2==0){
        $blanca=true;
    } else{
        $blanca=false; 
    }
    echo "<tr>";
    for($j=0;$j<=7;$j++){
        if($blanca==true){
            if($ajedrez[$i][$j]==1){
                echo"<td><img src='casilla_bm.png' width='50' height='50'></td>";
            }else if($ajedrez[$i][$j]==2){
                echo"<td><img src='casilla_br.png' width='50' height='50'></td>";
            }
            else{
                echo"<td><img src='casilla_b.png' width='50' height='50'></td>";
            }
            $blanca=false;
        } else if($blanca==false){
            if($ajedrez[$i][$j]==1){
                echo"<td><img src='casilla_nm.png' width='50' height='50'></td>";
            }else if($ajedrez[$i][$j]==2){
                echo"<td><img src='casilla_nr.png' width='50' height='50'></td>";
            }
            else{
                echo"<td><img src='casilla_n.png' width='50' height='50'></td>";
            }
            $blanca=true;
        }
    }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "<table>";
echo "<tbody>";
echo"<tr><th>Posiciones a la derecha</th><td>$can_d</td></td>";
echo"<tr><th>Posiciones a la izquierda</th><td>$can_i</td></td>";
echo"<tr><th>Posiciones arriba</th><td>$can_u</td></td>";
echo"<tr><th>Posiciones abajo</th><td>$can_a</td></td>";
echo"<tr><th>Posiciones diagonal derecha hacia arriba</th><td>$can_dda</td></td>";
echo"<tr><th>Posiciones diagonal izquierda hacia abajo</th><td>$can_did</td></td>";
echo"<tr><th>Posiciones diagonal izquierda hacia arriba</th><td>$can_dia</td></td>";
echo"<tr><th>Posiciones diagonal derecha hacia abajo</th><td>$can_ddd</td></td>";
echo "</tbody>";
echo "</table>";
?>