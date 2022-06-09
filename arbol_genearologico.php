<?php

$v_nombre = array  ("Carlos","Juan","Maria","Carlos 1","Sofia","Herman","Wilson","Diana","Mateo","Efrain");
$v_orden = array (0,0,1,3,4,1,2,2,7,6);
$v_indice = array(1,2,3,4,5,6,7,8,9,10);


function PintaNombres($i,$orden,&$Level,$vNombre,$vOrden,$vIndice)
{
  //echo "\tLllamada i:".$i." orden:".$orden." Nivel:".$Level."\n";
  for ($j=$i; $j<count($vNombre); $j++) {
    if ( $vOrden[$j] == $orden ){
      for ($t=0;$t<=$Level;$t++)
        echo "\t*";
      echo $vNombre[$j]."\n";
      $Level ++;
      PintaNombres($j+1,$vIndice[$j],$Level,$vNombre,$vOrden,$vIndice);
      $Level=0;
    }
  }
  return 0;
}
$level=0;
echo "Inicio---->\n";
for (  $i=0;   $i< (count($v_nombre));  $i++){
  if ($v_orden[$i] == 0 ){
    echo $v_nombre[$i]."\n";
    PintaNombres($i+1,$v_indice[$i],$level,$v_nombre,$v_orden,$v_indice);
    $level=0;
  }
}
echo "-----> Fin\n";
?>
