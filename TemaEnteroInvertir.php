<?php

function reverse_integer($n)
{
    $result = 0;
    echo "Parametro n:".$n."\n";
    for($i= 0; $i<32; $i++)
        {
            //$result <<= 1;
            $result = $result << 1;
            //$result|= ($n & 1);
            $result = $result | ($n & 1);
            //$n >>= 1;
            $n = $n >> 1;
            echo "i:(".$i.")\tresult: ".$result."\t BIN:".decbin($result)."\n";
            echo "i:(".$i.")\tn     : ".$n."\t BIN:".decbin($n)."\n";
        }
        return $result;

}   
$val = 14;
//$val=14;
$places = 1;
$a = $val<< $places;
$places = 2;
$b = $val<< $places;
echo $a." ".$val.">>".$places." \n";
echo $b." ".$val.">>".$places." \n";
//14: 1110
//28: 11100
//56: 111000
//64000:   0000 0000 1111 1010 0000 0000
//6225920: 0101 1111 0000 0000 0000 0000

$places = 1;
$A = $val <<$places;
$B = $val <<=$places;
$C = $val = $val << $places;
echo $A." ".$val."<<".$places."\n";
echo $B." ".$val."<<".$places."\n";
echo $C." ".$val."<<".$places."\n";
$val = 64000;
echo "Resultado: ".reverse_integer($val)."\n"; //1879048192
?>
