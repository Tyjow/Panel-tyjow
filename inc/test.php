<?php
		
		include 'db.php';
		
?>


		 	
<!-- update articles-->



<?php
/*update-article*/
		
	//ici on verifie si un des champs n'est pas vide

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']))
{

	//on definit les variables 

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];

	//grace a l'id on applique l'upload avec une requette preparé 

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs  WHERE id = :id');
    $requeteupdate->execute(array('articles'=> $articles,
                                                           'description'=> $description,
                                                           'reference' => $reference,
                                                           'fournisseurs' => $fournisseurs,
                                                           'id' => $id));
}    */



?>

<!--<section>
	//le formulaire d'upload des articles 

<label>upload des articles</label>
				<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom de l'article</label>
						<input type="text" name="articles" placeholder="Mon titre"/>
					<label>date</label>
						<div class="form-group row">
					<label for="example-date-input" class="col-xs-2 col-form-label">description</label>
						<input class="form-control" name="description" type="text" value="description" id="example-date-input">
						</div>
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					<label>fournisseur</label>
						<input type="text" name="fournisseurs" placeholder="fournisseur"/>
						<input clas="btn btn-alert" type="submit"></input>
				</form>
</section>-->


<?php
/*update-fournisseurs*/

		//la verification des champs
		/*if (isset($_POST['name']) || isset($_POST['localisation']) || isset($_POST['reference']) || isset($_POST['date']) )
{

//on definit les variables

$id = $_POST['id'];
$name = $_POST['name'];
$localisation = $_POST['localisation'];
$reference = $_POST['reference'];
$date = $_POST['date'];



//ici la meme chose que pour l'article upload avec requete preparé

    $requeteupdate = $bdd->prepare('UPDATE fournisseurs SET name =:name , localisation= :localisation, reference = :reference, date =:date  WHERE id = :id');
    						$requeteupdate->execute(array( 'name'=> $name,
                        	                               'localisation'=> $localisation,
                                                           'reference' => $reference,
                                                           'date' => $date,
                                                           'id' => $id));
}    */



?>





<body>


<section>

<!--<label>upload des fournisseurs</label>
	
				
				<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom du fournisseur </label>
						<input type="text" name="name" placeholder="Nom du fournisseurs"/>
											
					<label for="example-date-input" class="col-xs-2 col-form-label">localisation</label>
						<input class="form-control" name="localisation" type="text" value="localisation" id="example-date-input">
						
						<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					
					<label>date</label>
						 
						 <input type="text" name="date" id="datepicker">
						<input clas="btn btn-alert" type="submit"></input>
				</form>
</section>



<!-USER-->
<?php 
	  $bdd = DbSingleton::getInstance()->getConnection();
               $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                var_dump($bdd);
				echo "<h1>"."you connected"."</h1>";	 



?>


<?php
/*update-fournisseurs*/


		

		if (isset($_POST['name']) || isset($_POST['localisation']) || isset($_POST['reference']) || isset($_POST['date']) )
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

<!--{dateFormat: "yyyy-mm-dd"}-->


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create/Read/Update/Delete</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});

  } );
  </script>
</head>
<body>


<section>
<label>upload des fournisseurs</label>
	
				
				<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom du fournisseur </label>
						<input type="text" name="name" placeholder="Nom du fournisseurs"/>
											
					<label for="example-date-input" class="col-xs-2 col-form-label">localisation</label>
						<input class="form-control" name="localisation" type="text" value="localisation" id="example-date-input">
						
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					
					<label>date</label>
						 
						 <input type="text" name="date" id="datepicker">
						<input class="btn btn-alert" type="submit"></input>
				</form>
</section>





 



		 	
<!--fournisseurs-->
			<form method="GET" action=" " >
				<label>id</label>
					<input type="number" name="id" placeholder="l'id du produit"/>
				<input type="submit" >envoyer</input>	
			</form>

<?php

		 	//read-fournisseurs
			$req = $bdd->prepare('SELECT * FROM fournisseurs WHERE id = :id ');
			$req->execute(array(
								'id' => $_GET['id']	));
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['name'].'</h2>'.'<h3>'.$result['localisation'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['date'].'</p>');
		 	}


?>

<?php

		 	//read-user
			/*$req = $bdd->query('SELECT * FROM users WHERE id= 1 ');
		 	
		 		while($result = $req ->fetch()){

		 			echo('<label>'.$result['username'].'</label>'.'<h3>'.$result['password'].'</h3>'.'<p>'.$result['admin'].'</p>'.'<h4>'.$result['date'].'</p>');
		 	}*/		 	

?>

<?php
/*insert-fournisseurs*/

		//la verification des champs
		/*if (isset($_POST['name']) || isset($_POST['localisation']) || isset($_POST['reference']) || isset($_POST['date']) )
{

//on definit les variables

$id = $_POST['id'];
$name = $_POST['name'];
$localisation = $_POST['localisation'];
$reference = $_POST['reference'];
$date = $_POST['date'];



//ici la meme chose que pour l'article upload avec requete preparé

    $requeteupdate = $bdd->prepare('INSERT users SET username =:username , password = :password, admin = :admin  WHERE id = :id');
    						$requeteupdate->execute(array( 'username'=> $username,
                        	                               'password'=> $password,
                                                           'admin' => $admin,
                                                           'id' => $id));
}    



?>
<section>
	
<label>upload des users</label>
				<form method="POST" action=" " >
					
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom de l'user</label>
						<input type="text" name="username" placeholder="username"/>
					
					<label>password</label>	
						<input class="form-control" name="description" type="text" value="password" id="example-date-input">
										
					<label>admin</label>
						<input type="text" name="admin" placeholder="reference"/>
					
						<input class="btn btn-alert" type="submit"></input>
				</form>
</section>



<!--<form method="GET" action=" " >
	<label>id</label>
	<input type="number" name="id" placeholder="l'id du produit"/>
					<input type="submit" >envoyer</input>	
						</form>-->
</body>
</html>



<!--function php and testing -->

<?php
		
		/*include 'inc/db.php';
		
?>
<?php
/*update-article*/
		

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']))
{

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs  WHERE id = :id');
    $requeteupdate->execute(array('articles'=> $articles,
                                                           'description'=> $description,
                                                           'reference' => $reference,
                                                           'fournisseurs' => $fournisseurs,
                                                           'id' => $id));
}    */



?>

<!--<section>
	
<label>upload des articles</label>
				<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom de l'article</label>
						<input type="text" name="articles" placeholder="Mon titre"/>
					<label>date</label>
						<div class="form-group row">
					<label for="example-date-input" class="col-xs-2 col-form-label">description</label>
						<input class="form-control" name="description" type="text" value="description" id="example-date-input">
						</div>
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					<label>fournisseur</label>
						<input type="text" name="fournisseurs" placeholder="fournisseur"/>
						<input clas="btn btn-alert" type="submit"></input>
				</form>
</section>-->




<!--<section>
	
<label>upload des users</label>
				<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom de l'article</label>
						<input type="text" name="articles" placeholder="Mon titre"/>
					<label>date</label>
						<div class="form-group row">
					<label for="example-date-input" class="col-xs-2 col-form-label">description</label>
						<input class="form-control" name="description" type="text" value="description" id="example-date-input">
						</div>
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					<label>fournisseur</label>
						<input type="text" name="fournisseurs" placeholder="fournisseur"/>
						<input clas="btn btn-alert" type="submit"></input>
				</form>
</section>-->



 
</body>
</html>



		 	
<?php
		 /*	echo ('<h1>'.'articles'.'</h1>') ;	

		 	//read-article
		 	$req = $bdd->query('SELECT * FROM article WHERE id= 1 ');
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['articles'].'</h2>'.'<h3>'.$result['description'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['fournisseurs'].'</h4>'.'<h4>'.$result['date'].'</h4>'.'<h4>'.$result['stock'].'</h4>');
		 	}*/

		 	echo ('<h1>'.'fournisseurs'.'</h1>') ;

		 	//read-fournisseurs
			$req = $bdd->query('SELECT * FROM fournisseurs WHERE id= 1 ');
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['name'].'</h2>'.'<h3>'.$result['localisation'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['date'].'</p>');
		 	}

		 	/*echo ('<h1>'.'users'.'</h1>') ;

		 	//read-user
			$req = $bdd->query('SELECT * FROM users WHERE id= 1 ');
		 	
		 		while($result = $req ->fetch()){

		 			echo('<label>'.$result['username'].'</label>'.'<h3>'.$result['password'].'</h3>'.'<p>'.$result['admin'].'</p>'.'<h4>'.$result['date'].'</p>');
		 	}*/		 	




?>















------------------------------------------------------------------



<?php
	
	/*include 'inc/form.php';	
	include 'inc/db.php';

               $bdd = DbSingleton::getInstance()->getConnection();
                //var_dump($bdd);
				echo "<h1>"."you connected"."</h1>";	 
		


//Switch Case pour récupérer la l'action demandée par le controleur  Angular

switch($_GET['action'])  {
   case 'add_article' :
           add_article();
           break;

   case 'get_article' :
           get_article();
           break;

   /*case 'edit_article' :
           edit_article();
           break; 		// TODO voir l'utilitée de cette fonction

   case 'delete_article' :
           delete_article();
           break;

   case 'update_article' :
           update_article();
           break;
}












//CRUD ARTICLE
	
	//create-article

			//function get_article() {
            try
            {  
		
                $req = $bdd->query('SELECT * FROM article');
                $data=array();
                
                //Convertit en JSON  
                while($result = $req->fetch()){
                    $data[] =array(
                         "id"=> $result['id'],
                         "articles"=>$result['articles'],
                         "description"=>$result['description'],
                         "reference"=>$result['reference'],
                         "fournisseurs"=>$result['fournisseurs'],
                         "date"=>$result['date'],
                         "stock"=>$result['stock']);
                }
                
                
            }  
            catch(PDOException $e)
            {
                die('Erreur : ' . $e->getMessage());
            }        
        print_r(json_encode($data));
        return json_encode($data);        //}

	//get-article
	
	

?>

	<!--update-article-->
<?php	
	//requete preparé avec json 

	//ici on verifie si un des champs n'est pas vide

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']))
{

	//on definit les variables 

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];

	//grace a l'id on applique l'upload avec une requette preparé 

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs  WHERE id = :id');

    $data = array(	'articles'=> $articles,
        		    'description'=> $description,
      		        'reference' => $reference,
    	            'fournisseurs' => $fournisseurs,
                    'id' => $id);

    $requeteupdate->execute(array($data));
}    


		 	print_r(json_encode($data));
		 	return json_encode($data);*/

		 	


?>

<?php
//la requete preparé sans json 
		
		 		//ici on verifie si un des champs n'est pas vide

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']))
{

	//on definit les variables 

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];
$date = $_POST['date'];

	//grace a l'id on applique l'upload avec une requette preparé 

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs, date = :date, stock = :stock  WHERE id = :id');
    $requeteupdate->execute(array('articles'=> $articles,
                                                           'description'=> $description,
                                                           'reference' => $reference,
                                                           'fournisseurs' => $fournisseurs,
                                                           'date' => $date,
                                                           'stock' => $stock,
                                                           'id' => $id););

    	return $requeteupdate ;

	
}    	



?>


	
		//get-article
		
			// requete select methode get, ici on recupere l'id avec get 
		 	//read-fournisseurs
			/*$req = $bdd->prepare('SELECT * FROM article WHERE id = :id ');

			$req->execute(array(
								'id' => $_GET['id']	));
		 	
		 		while($result = $req ->fetch()){

		 			echo('<h1>'.$result['id'].'</h1>'.'<h2>'.$result['articles'].'</h2>'.'<h3>'.$result['description'].'</h3>'.'<p>'.$result['reference'].'</p>'.'<h4>'.$result['fournisseurs'].'</h4>'.'<h4>'.$result['date'].'</h4>'.'<h4>'.$result['stock'].'</h4>');
		 	}*/


		

		// select with json convertion

		//function get_article() {
		  /* try
		    {   
		        
		        $req = $bdd->query('SELECT * FROM article');
		        $data=array();

		        //Convertit en JSON  
		        while($result = $req->fetch()){
		        	$data[] =array(
		 				"id"=> $result['id'],
		 				"articles"=>$result['articles'],
		 				"description"=>$result['description'],
		 				"reference"=>$result['reference'],
		 				"fournisseurs"=>$result['fournisseurs'],
		 				"date"=>$result['date'],
		 				"stock"=>$result['stock']);
		        }
		        //ferme la connexion ?
		        $bdd=null;
		    }  
		    catch(PDOException $e) 
		    {
		        die('Erreur : ' . $e->getMessage()); 
		    }

		print_r(json_encode($data));
		return json_encode($data);*/

		//}

?>


<?php
/*update-article*/

//requete d'update article simple sans json 

		
/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseurs']) || isset($_POST['date']) || isset($_POST['stock'])  )
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
}    */

?>

	<!--update-article-->
<?php	
	//requete update preparé avec json 

	//ici on verifie si un des champs n'est pas vide

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']) || /*isset($_POST['date']) || isset($_POST['stock']) )


		$data = array();
{

	//on definit les variables 

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];
$date = $_POST['date'];
$stock = $_POST['stock'];

	//grace a l'id on applique l'upload avec une requette preparé 

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs, date = :date stock= :stock  WHERE id = :id');

    $data = array(	'articles'=> $articles,
        		    'description'=> $description,
      		        'reference' => $reference,
    	            'fournisseurs' => $fournisseurs,
    	            'date' => $date,
    	            'stock' => $stock,
                    'id' => $id);

    $requeteupdate->execute(array($data));
}    


		 	print_r(json_encode($data));
		 	return json_encode($data);*/

		 	


?>




<?php
//la requete update preparé sans json 
		
		 		//ici on verifie si un des champs n'est pas vide

		/*if (isset($_POST['articles']) || isset($_POST['description']) || isset($_POST['reference']) || isset($_POST['fournisseur']))
{

	//on definit les variables 

$id = $_POST['id'] ;
$articles = $_POST['articles'];
$description = $_POST['description'];
$reference = $_POST['reference'];
$fournisseurs = $_POST['fournisseurs'];
$date = $_POST['date'];
$stock = $_POST['stock'];

	//grace a l'id on applique l'upload avec une requette preparé 

    $requeteupdate = $bdd->prepare('UPDATE article SET articles =:articles , description= :description, reference = :reference, fournisseurs = :fournisseurs, date = :date, stock = :stock  WHERE id = :id');
    $requeteupdate->execute(array('articles'=> $articles,
                                                           'description'=> $description,
                                                           'reference' => $reference,
                                                           'fournisseurs' => $fournisseurs,
                                                           'date' => $date,
                                                           'stock' => $stock,
                                                           'id' => $id));

    	return $requeteupdate ;

	
}    	*/






?>

	<!--delete-article-->		






	//Switch Case pour récupérer la l'action demandée par le controleur  Angular

/*switch($_GET['action'])  {
   case 'add_article' :
           add_article();
           break;

   case 'get_article' :
           get_article();
           break;


   case 'edit_article' :
           edit_article();
           break; 		// TODO voir l'utilitée de cette fonction


   case 'delete_article' :
           delete_article();
           break;

   case 'update_article' :
           update_article();
           break;
}*/