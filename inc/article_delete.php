<?php 


	require 'form_delete.php';
	include 'db.php';

		header( 'content-type: text/html; charset=utf-8; application/json' );
		error_reporting(E_ALL ^ E_NOTICE);
		// la on initialise l'instance de connexion a la bdd avec pdo
		$bdd = DbSingleton::getInstance()->getConnection();
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		var_dump($bdd);
		echo "<h1>"."connected"."</h1>";
		echo date("Y-m-d");




	
	

//article-delete
		
		 	$req = $bdd->prepare("DELETE FROM article WHERE id = :id");
		 	$req->execute(array(
		 						'id' => $_GET['id']	));

		 	if($req){

		 		echo "l'article a bien eté supprimé" ;

		 	} else {

		 		echo "un problem est survenue !";
		 	}
		 	
		 	print_r($bdd) ;
		 	$bdd = null ;
		 	
	
			



?>