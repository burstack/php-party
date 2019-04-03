

<?php

$dbc = new PDO('mysql:host=localhost;dbname=party', 'root', 'root');
//$dbc->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);
//$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$dbc -> exec("SET CHARACTER SET utf8");

 ?>

