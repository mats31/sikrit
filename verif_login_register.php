<?php
if( isset( $_POST['login'] ) ){
	
	try
	{
		$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	}
	 
	catch(Exception $e)
	{
		echo 'Une erreur est survenue !';
		die();
	}
	
	$resultats = $connexion->query("SELECT pseudo FROM user WHERE pseudo = '".$_POST['username']."' AND mdp = '".$_POST['password']."' ");
	
	while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
	{
		$_SESSION['user'] = $ligne['pseudo'];
	}
	
}

else if( isset( $_POST['register'] ) ){
	
	try
	{
		$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	}
	 
	catch(Exception $e)
	{
		echo 'Une erreur est survenue !';
		die();
	}
	
	$connexion->exec("INSERT INTO user ( pseudo, mdp, prenom, nom, email, adresse ) VALUES('".$_POST['pseudo']."', '".$_POST['mdp']."','".$_POST['prenom']."', '".$_POST['nom']."', '".$_POST['email']."', '".$_POST['adresse']."' ) ");
	
}
?>