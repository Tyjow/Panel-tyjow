<?php
	
	
	include 'db.php';
	include 'form_update.php';

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
			$req = $bdd->prepare('SELECT * FROM fournisseurs WHERE id = :id ');
			
			$req->execute(array(
								'id' => $_GET['id']	));
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['name'].'</h2>'.'<h3>'.$result['localisation'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['date'].'</h4>');
		 	}


?>

<?php
/*update-article*/

//requete d'update article simple 

		
if (isset($_POST['name']) || isset($_POST['localisation']) || isset($_POST['reference']) ||  isset($_POST['date']))
{

$id = $_POST['id'];
$name = $_POST['name'];
$localisation = $_POST['localisation'];
$reference = $_POST['reference'];
$date = $_POST['date'];


     $requeteupdate = $bdd->prepare('UPDATE fournisseurs SET name =:name , localisation= :localisation, reference = :reference, date =:date  WHERE id = :id');
    						$requeteupdate->execute(array( 'name'=> $name,
                        	                               'localisation'=> $localisation,
                                                           'reference' => $reference,
                                                           'date' => $date,
                                                           'id' => $id));

}    

?>

	

	