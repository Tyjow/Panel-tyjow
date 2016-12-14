<?php
	
	
	include 'db.php';
	//include 'form.php';

	header( 'content-type: text/html; charset=utf-8; application/json' );
	error_reporting(E_ALL ^ E_NOTICE);

               $bdd = DbSingleton::getInstance()->getConnection();
               $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                var_dump($bdd);
				echo "<h1>"."you connected"."</h1>";	 
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
/*update-article*/

//requete d'update article simple 

		
if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseurs']) || isset($_POST['date']) || isset($_POST['stock'])  )
{

$id = $_POST['id'];
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];
$date = $_POST['date'];
$stock = $_POST['stock'];

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs =:fournisseurs, date = :date, stock = :stock  WHERE id = :id');

    $requeteupdate->execute(array( 
		 				"id"=> $id,
		 				"articles"=>$articles,
		 				"description"=>$description,
		 				"reference"=>$reference,
		 				"fournisseurs"=>$fournisseurs,
		 				"date"=>$date,
		 				"stock"=>$stock));
}    

?>

	


				
				