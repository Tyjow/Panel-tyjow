<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>article_update</title>
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
<label>upload des articles</label>

<!--formulaire select method get-->
			<!--<form method="GET" action="fournisseurs_upload.php" >
				<label>id</label>
					<input type="number" name="id" placeholder="l'id du fournisseurs"/>
				<input type="submit" >envoyer</input>	
			</form>-->

	<!--form update article methode post-->
			<!--<form method="POST" action=" " >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du produit"/>
					<label>nom de l'article  </label>
						<input type="text" name="articles" placeholder="Nom de l'article"/>
											
					<label for="example-date-input" class="col-xs-2 col-form-label">description</label>
						<input class="form-control" name="description" type="text" value="describ" id="example-date-input">
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
					
					<label>fournisseurs</label>
						<input type="text" name="fournisseurs" placeholder="fournisseurs"/>	
					
					<label>date</label>
						 
						 <input type="text" name="date" id="datepicker">

						 <label>stock</label>
						 
						 <input type="text" name="stock" id="datepicker">



						<input type="submit"></input>
				</form>-->

			<!-- formulair d'update fournisseurs-->

					<form method="POST" action="fournisseurs_upload.php" >
					<label>id</label>
						<input type="number" name="id" placeholder="l'id du fournisseurs"/>

					<label>nom du fournisseurs </label>
						<input type="text" name="name" placeholder="Nom du fournisseurs"/>
											
					<label>localisation</label>
						<input class="form-control" name="localisation" type="text" placeholder="localisation"  id="example-date-input">
						
					<label>reference</label>
						<input type="text" name="reference" placeholder="reference"/>
														
					<label>date</label>
						 
						 <input type="text" name="date" id="datepicker">

						<input type="submit"></input>
				</form>
</section>
</body>
</html>