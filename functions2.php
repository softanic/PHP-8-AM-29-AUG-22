<?php
function welcome()
{
	global $name;
	echo "welcome $name <br>";
	
}
$name='abc';
welcome();
welcome();

?>