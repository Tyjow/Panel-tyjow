




<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>article_Delete</title>
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
<label>ajout des articles</label>


 



	<!--formulaire select method get-->
			<form method="GET" action="fournisseurs_delete.php " >
				<label>delete by id</label>
					<input type="number" name="id" placeholder="l'id du produit"/>
				<input type="submit"  >envoyer</input>	
			</form>		


	<!--form update article -->				
				<!--<form method="POST" action="article_read.php" >
					
						 
						 <label>the last</label>	

						<input type="submit"></input>
				</form>-->
</section>
</body>
</html>