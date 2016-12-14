<?php
	
	require 'form.php';
	include 'db.php';
	

	header( 'content-type: text/html; charset=utf-8; application/json' );
	error_reporting(E_ALL ^ E_NOTICE);
	// la on initialise l'instance de connexion a la bdd avec pdo 
	$bdd = DbSingleton::getInstance()->getConnection();
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	var_dump($bdd);
	echo "<h1>"."you connected"."</h1>";	 
	echo date("Y-m-d");

	$req = $bdd->query('SELECT * FROM article WHERE id = 1');
		 	
	while($result = $req ->fetch()){

		echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['articles'].'</h2>'.'<h3>'.$result['description'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['fournisseurs'].'</h4>'.'<h4>'.$result['date'].'</h4>'.'<h4>'.$result['stock'].'</h4>');
	}
	if (isset($_POST['articles']) && isset($_POST['reference'])){
		//|| isset($_POST['fournisseurs']) || isset($_POST['date'])){

		$articles = $_POST['articles'];
		if(isset($_POST['description'])){
			$description = $_POST['description'];
		}
		else{
			$description = "";
		}
		$reference = $_POST['reference'];
		$fournisseurs = $_POST['fournisseurs'];
		$date = $_POST['date'];
		//create-article
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		$req = $bdd->prepare("INSERT INTO article (articles, description, reference, fournisseurs, date) VALUES ('$articles', '$description', '$reference', '$fournisseurs', '$date' )");
		$result = $req->execute(array(
		 				"articles"=>$articles,
		 				"description"=>$description,
		 				"reference"=>$reference,
		 				"fournisseurs"=>$fournisseurs,
		 				"date"=>$date));
		if($result) echo "votre article a bien été ajouté";
		$bdd = null;
 }
 else{
 	error_log("SKIPPING INSERT DUE TO MISSING FIELDS");
 }


  //requete d'update-article

if (isset($_POST['articles']) && isset($_POST['reference'])){
		$articles = $_POST['articles'];
		if(isset($_POST['description'])){
			$description = $_POST['description'];
		}
		else{
			$description = "";
		}
		$reference = $_POST['reference'];
		$fournisseurs = $_POST['fournisseurs'];
		$date = $_POST['date'];
		

		//create-article
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		$req = $bdd->prepare("UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs =:fournisseurs, date = :date, stock = :stock  WHERE id = :id");
		$result = $req->execute(array(
						"id" => $id,
		 				"articles"=>$articles,
		 				"description"=>$description,
		 				"reference"=>$reference,
		 				"fournisseurs"=>$fournisseurs,
		 				"date"=>$date,
		 				"stock"=>$stock));
		if($result) echo "votre article a bien été ajouté";
		$bdd = null;
 }
 else{
 	error_log("SKIPPING INSERT DUE TO MISSING FIELDS");
 }
?>

