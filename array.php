<?php
$x=array(10,20,40,50,60);

//var_dump($x);
echo "<pre>";
print_r($x);
//sizeof()=count()

for($i=0;$i<sizeof($x);$i++)
	echo $x[$i].'<br>';
?>