<?php
function table($no,$color)
{
	//$no=2;
	
	echo "<table border=1 bgcolor='$color'>";

	for($i=1;$i<=10;$i++)
	{
	echo "<tr><td> ".$i * $no." </td></tr>";
	}
	echo "</table>";

}
table(2,'red');
table(300,'blue');
table(300,'green');
table(300,'red');
table(300,'pink');
?>
