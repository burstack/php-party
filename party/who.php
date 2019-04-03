 <?php
$pagetitle = 'Party - Vem kommer?';
include_once('incl/header.php');
?>

<h1>Gästerna...</h1><br/>

<?php

require_once('dbc.php');

//Hämta alla med prepared statement.
$stmt = $dbc->prepare('SELECT fname, lname, nname, civil FROM guests');
$stmt->execute();



while ($row = $stmt->fetch()) { 
	echo "<p>". $row['fname'] . " \"". $row['nname'] . "\" " . $row['lname'] . ", ";

	 switch($row['civil']) {
	 	case 'S':
			echo 'Singel</p>';
		break;
		case 'U':
			echo 'Upptagen</p>';
		break;
		case 'T':
		 	echo 'Säger inget!</p>';
		break;
	 }
}

?>





<?php
include_once('incl/footer.html');
?>