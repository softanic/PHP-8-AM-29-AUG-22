<?php
$b=11;
$a=22;
$h=33;
$r=44;
$v=55;

$names=['bhagyashri'=>$b,
		'ammar'=>$a,
		'harshal'=>$h,
		'raman'=>$r,
		'vaishnavi'=>$v];
//echo $names['ammar'];

/*for($i=0;$i=4<;$i++)
{
	echo "Hello ".$names[$i].", you got ".$marks[$i].' marks.<br>';
}*/

foreach($names as $key =>$marks)
{
	echo "$key = $marks<br>";
}


?>