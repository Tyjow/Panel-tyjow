
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
    	
	if (is_null($_POST['name']) && is_null($_POST['reference']) || !preg_match('/^[a-zA-Z0-9_\s-]+$/', $_POST['name'])){
			$errors['name'] = "Le nom n'est pas valide (caractères autorisés: alphanumérique et -_) ou un problem est survenue ";
	} else {
        $req = $bdd->prepare('SELECT name FROM fournisseurs WHERE name = ?');
        $req->execute([$_POST['name']]);
        $reqexist = $req->rowCount();
        $art = $req->fetch();
        
        if($reqexist != 0){
             echo "le fournisseurs se trouve deja dans la base de données";
             throw new Exception("le fournisseurs se trouve deja dans la base de données", 1);
             var_dump($art);
        } else {
        	$name = $_POST['name'];
        }
    } 
		
		if(isset($_POST['localisation'])){
			$localisation = $_POST['localisation'];
		}
		else{
			$localisation = "aucune";
		}
		if(isset($_POST['reference'])){
			$reference = $_POST['reference'];
		} else {
			$reference = "aucune";
		}
					
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}else {
			$date = "aucune";
		}

		if($date == TRUE){

			echo "la date saisie n'est pas autoriser";

		}



			

		//create-article
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		$req = $bdd->prepare("INSERT INTO fournisseurs (name, localisation, reference, date ) VALUES ('$name', '$localisation', '$reference', '$date')");
		$result = $req->execute(array(
		 				"name"=>$name,
		 				"localisation"=>$localisation,
		 				"reference"=>$reference,
		 				"date"=>$date,));
		 				
		if($result){ echo "votre article a bien été ajouté";
		 $bdd = null;
		 
		}
		 else{
		 	error_log("SKIPPING INSERT DUE TO MISSING FIELDS");
		}

}

?>

	

