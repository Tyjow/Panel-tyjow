<?php 


	require 'form_select.php';
	include 'db.php';

		header( 'content-type: text/html; charset=utf-8; application/json' );
		error_reporting(E_ALL ^ E_NOTICE);
		// la on initialise l'instance de connexion a la bdd avec pdo
		$bdd = DbSingleton::getInstance()->getConnection();
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		var_dump($bdd);
		echo "<h1>"."connected"."</h1>";
		echo date("Y-m-d");

?>


	
<?php
			// requete select methode get, ici on recupere l'id avec get 
		 	//read-fournisseurs
			$req = $bdd->prepare('SELECT * FROM article WHERE id = :id ');
			
			$req->execute(array(
								'id' => $_GET['id']	));
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['articles'].'</h2>'.'<h3>'.$result['description'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['fournisseurs'].'</h4>'.'<h4>'.$result['date'].'</h4>'.'<h4>'.$result['stock'].'</h4>');
		 	}


?>

	
<?php



	//read-article-last
		// ici la requete pour afficher un article par id decroisant donc le dernier)

		$req = $bdd->query('SELECT * FROM article ORDER BY id DESC LIMIT 1 ');
		// on affiche l'article selectionner 
		while($result = $req ->fetch()){
		

		echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['articles'].'</h2>'.'<h3>'.$result['description'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['fournisseurs'].'</h4>'.'<h4>'.$result['date'].'</h4>'.'<h4>'.$result['stock'].'</h4>');
		}




?>