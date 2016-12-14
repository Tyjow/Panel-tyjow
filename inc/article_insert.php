
<?php
	
		//phpinfo();
		
		require 'form_insert.php';
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


	if(!empty($_POST)){
    	
	if (is_null($_POST['articles']) && is_null($_POST['reference']) || !preg_match('/^[a-zA-Z0-9_\s-]+$/', $_POST['articles'])){
			$errors['articles'] = "L'article n'est pas valide (caractères autorisés: alphanumérique et -_) ou un problem est survenue ";
	} else {
        $req = $bdd->prepare('SELECT articles FROM article WHERE articles = ?');
        $req->execute([$_POST['articles']]);
        $reqexist = $req->rowCount();
        $art = $req->fetch();
        
        if($reqexist != 0){
             echo "l'article se trouve deja dans la base de données";
             throw new Exception("l'article se trouve deja dans la base de données", 1);
             var_dump($art);
        } else {
        	$articles = $_POST['articles'];
        }
    } 
		
		if(isset($_POST['description'])){
			$description = $_POST['description'];
		}
		else{
			$description = "aucune";
		}
		if(isset($_POST['reference'])){
			$reference = $_POST['reference'];
		} else {
			$reference = "aucune";
		}
		if(isset($_POST['fournisseurs'])){
			$fournisseurs = $_POST['fournisseurs'];
		} else {
			$fournisseurs = "aucun";
		}
			$fournisseurs = $_POST['fournisseurs'];
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}else {
			$date = "aucune";
		}

			$stock = 1 ;

		//create-article
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		$req = $bdd->prepare("INSERT INTO article (articles, description, reference, fournisseurs, date, stock) VALUES ('$articles', '$description', '$reference', '$fournisseurs', '$date', '$stock' )");
		$result = $req->execute(array(
		 				"articles"=>$articles,
		 				"description"=>$description,
		 				"reference"=>$reference,
		 				"fournisseurs"=>$fournisseurs,
		 				"date"=>$date,
		 				"stock"=>$stock));
		if($result){ echo "votre article a bien été ajouté";
		 $bdd = null;
		 
		}
		 else{
		 	error_log("SKIPPING INSERT DUE TO MISSING FIELDS");
		}

}

?>

	

