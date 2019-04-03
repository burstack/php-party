<?php
$pagetitle = 'Party - Anmälan';
include_once('incl/header.php');

?>

<h1>Ja! Inget party utan mig!</h1>
<p></p>
<br/>

<?php

if (isset($_POST['submit'])) {

	$errors = array();

		if (empty($_POST['fname'])) {
			$errors[] = "Du glömde ditt förnamn."; 
		} else {
			$fname = trim($_POST['fname']);
		}

		if (empty($_POST['lname'])) {
			$errors[] = "Du glömde ditt efternamn."; 
		} else {
		$lname = $_POST['lname'];
		}

		if (empty($_POST['nname'])) {
			$errors[] = "Du glömde ditt smeknamn."; 
		} else {
		$nname = $_POST['nname'];
		}

	//Denna tillåts det null för i databasen och behöver inte kollas.
	$mobile = $_POST['mobile'];

		if (empty($_POST['email'])) {
			$errors[] = "Du glömde din e-post."; 
		} else {
			$email = $_POST['email'];
		}

		if (empty($_POST['civil'])) {
			$errors[] = "Du glömde ditt civilstånd."; 
		} else {
			$civil = $_POST['civil'];
		}

	if (empty($errors)) { //Kolla om $errors är tom. Om så, ok att köra databaskoppling och SQL

	require_once('dbc.php');

	$stmt = $dbc->prepare("INSERT INTO guests (fname, lname, nname, mobile, email, civil) VALUES (:fname, :lname, :nname, :mobile, :email, :civil)");
			$stmt->execute(array(
				':fname' => $fname,
				':lname' => $lname,
				':nname' => $nname,
				':mobile' => $mobile,
				':email' => $email,
				':civil' => $civil
	));
	?>

		<p>Tack för anmälan!</p>
	
	<?php
	} else {

		// Loopar igenom arrayen $errors:
		foreach ($errors as $message) {
		echo '<p>' . $message . '</p>';
		}
		echo "<br/>";

	}

} //END if isset submit

?>
	
		<br/>

	<form method="post" action="anmalan.php">
			<p>Förnamn<input type="text" name="fname" id="fname" value="" /></p>
			<p>Efternamn<input type="text" name="lname" id="lname" value="" /></p>
			<p>Smeknamn<input type="text" name="nname" id="nname" value="" /></p>
			<p>Mobil<input type="text" name="mobile" id="mobile" value="" /></p>
			<p>Epost<input type="text" name="email" id="email" value="" /></p>
		<br/>
		<p>Civilstånd
			<input type="radio" name="civil" value="S"/> Singel
			<input type="radio" name="civil" value="U"/> Upptagen
			<input type="radio" name="civil" value="T"/> Säger inte!
		</p>		
			<input type="submit" name="submit" value="Yes! Sätt mig på listan." />
	</form>	



<?php
include_once('incl/footer.html');
?>