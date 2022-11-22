<?php
$a=['f'=>10,'a'=>2,'r'=>5,'q'=>88,'h'=>55,'j'=>44,'n'=>65,'s'=>2,'v'=>0,'w'=>8];

//sort($a);
//rsort($a);
//asort($a); // sorts asso array in asending order according to values
//arsort($a); // sorts asso array in desending order according to values
//ksort($a); // sorts asso array in asending order according to keys
//krsort($a); // sorts asso array in asending order according to keys
//echo "<pre>";
//print_r($a);

//var_dump(in_array(88,$a));
//var_dump(key_exists('rr',$a));
//$a2=['aaa'=>888];
//$a3=array_merge($a,$a2);
//array_pop($a);
//array_push($a2,'vvv');
//sizeof($a);
//count($a);

//print_r($a3);
echo implode("+",$a);

echo "=".array_sum($a);
$str='a,b,c,d,e,f,h,i,j';
$s=explode(',',$str);
print_r($s);
?>