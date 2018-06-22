<?php
$var1 = $_POST ['var1'];
$var2 = $_POST ['var2'];
echo "Création du projet $var1 le $var2\n";
shell_exec('bash script.sh '.$var1.' '.$var2);
?>
