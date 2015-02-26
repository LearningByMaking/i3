<!DOCTYPE html>
<html>
<title>Learning By Making</title>
<body>



<?php
$dir = 'Desktops';
$files = glob($dir.'/*.{jpeg,gif,png}', GLOB_BRACE);
foreach($files as $value)
{
	echo "<a href='view.php?filename=".$value."'>".$value."</a></br>";
}

?>


</body>
</html> 