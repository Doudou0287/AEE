<?php 

	$con = new PDO('mysql:host=localhost;dbname=aee','root','');

	$pdoStat = $con->prepare('INSERT INTO announce VALUE (NULL, :nom, :prenom, :sujet, :msg, :date_msg, :links)');
	
	$pdoStat->bindValue(':nom', $_POST['NOM'], PDO::PARAM_STR);
	$pdoStat->bindValue(':prenom', $_POST['PRENOM'], PDO::PARAM_STR);
	
	$pdoStat->bindValue(':sujet', $_POST['SUJET'], PDO::PARAM_STR);
	$pdoStat->bindValue(':msg', $_POST['MESSAGE'], PDO::PARAM_STR);
	$pdoStat->bindValue(':date_msg', date("Y-m-d H:i:s"), PDO::PARAM_STR);
	$pdoStat->bindValue(':links', $_POST['Links'], PDO::PARAM_STR);

	$insert = $pdoStat->execute();

	if ($insert) {
		$message = 'Votre announce a été déposé';
	}
	
	else{
		$message = 'Echec ...';
	}
	
?>

<center>
<h1 style="color: rebeccapurple"><?php echo $message; ?> </h1>
</center>

<?php 
	header("refresh:2; url=http://localhost/programmation-web-2---s4---2020-master/assets/php/commerce.php");
?>

