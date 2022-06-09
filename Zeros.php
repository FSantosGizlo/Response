<?php
function arreglar($array)
{
	$z =1;
	$c=count($array);
	$t=$c-$z;
	//echo "Elementos: ".$c."\n" ;
    for($i=0;$i<$t;$i++)
    {
    	//echo "Elemento (".$i.")=".$array[$i]."\tZ=".$z."\tc=".$c."\tT=".$t."\n";
    	if ($array[$i]==0){
    		for($j=$i;$j<($c-$z);$j++){
    			$array[$j] = $array[$j+1];
    		}
    		$array[$t]=0;
    		$z=$z+1;
    		$t=$c-$z;
			//for($a=0;$a<count($array);$a++)
			//	echo "A(".$a.")=".$array[$a].",";
			$i=$i-1;	
    	}
    }
    return $array;
}
 
$arrayA=array(5,9,4,0,0,0,0,0,7,1,6);
 
echo "Valores iniciales:\n";
for($i=0;$i<count($arrayA);$i++)
	echo "\t".$i."|";	
echo "\n";
for($i=0;$i<count($arrayA);$i++)
   echo "\t".$arrayA[$i];
echo "\n";
$arrayB=arreglar($arrayA);
for($i=0;$i<count($arrayB);$i++)
    echo "\t".$arrayB[$i];
echo "\n";
?>