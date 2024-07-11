<?php
touch("55.php");
$file = fopen("55.php","w");
 fwrite($file,"<h1>hhhh</h1> ");
fclose($file);
?> 