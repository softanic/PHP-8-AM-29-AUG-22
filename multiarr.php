<?php
$b=['html'=>10,'php'=>20,'js'=>22];
$a=['html'=>22,'java'=>33];
$h=['html'=>33];
$r=['css'=>44,'php'=>34,'js'=>50,'asp'=>30];
$v=['html'=>55,'php'=>25];

$names=['bhagyashri'=>['html'=>10,'php'=>20,'js'=>22],
		'ammar'=>$a,
		'harshal'=>$h,
		'raman'=>$r,
		'vaishnavi'=>$v];
		
foreach ($names as $name =>$marks)
{
	echo "<table border=1>";
	echo "<tr><th colspan=2><h2>Softanic Solutions</h2></th></tr>";
	echo "<tr><th colspan=2><h4>Marksheet</h4></th></tr>";
	echo "<tr><th>Name:</th><th>$name</th></tr>";
	echo "<tr><th>Subject</th><th>Marks</th></tr>";
	$total=0;
	foreach($marks as $subject =>$m)
	{
		$total=$total+$m;
		echo "<tr><td>$subject</td><td>".$m."</td></tr>";
	}
	echo "<tr><th>Total</th><td> $total </td></tr>";
	
	echo "</table><br>";
}
?>