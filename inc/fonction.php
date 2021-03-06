<?php

		
include 'db.php';

header( 'content-type: text/html; charset=utf-8; application/json' );
error_reporting(E_ALL ^ E_NOTICE);

//Switch Case pour récupérer l'action demandée par le controleur  Angular

switch($_GET['action'])  {
  case 'add_article' :
         add_articles();
         break;

  case 'get_articles' :
         get_articles();
         break;

  case 'get_by_id' :
         get_by_id();
         break;

  case 'check_token' :
        check_token();
        break;

  case 'login_user' :
        login_user();
        break;

  case 'sign_up' :
        sign_up();
        break;

  case 'logout_user' :
        logout_user();
        break;

  case 'delete_article' :
         delete_article();
         break;

  case 'update_article' :
         update_article();
         break;

  case 'get_fournisseurs' :
         get_fournisseurs();
         break;

  case 'get_id_fournisseurs' :
         get_id_fournisseurs();
         break;

  case 'update_fournisseur' :
         update_fournisseur();
         break;

  case 'add_fournisseur' :
         add_fournisseur();
         break;

  case 'delete_fournisseur' :
         delete_fournisseur();
         break;

  case 'get_users' :
         get_users();
         break;

  case 'get_id_users' :
         get_id_users();
         break;

  case 'update_user' :
         update_user();
         break;

  case 'add_user' :
         add_user();
         break;

  case 'delete_user' :
         delete_user();
         break;
}

function get_articles() {
    try
    {   
        $bdd = Dbsingleton::getInstance()->getConnection();
        //var_dump($bdd);
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
        //$bdd=null;
    }  
    catch(PDOException $e) 
    {
        die('Erreur : ' . $e->getMessage()); 
    }

print_r(json_encode($data));
return json_encode($data);

}

function get_by_id() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;
  $data=array();
  $req = $bdd->query('SELECT * FROM article WHERE id =' .$id);
      
        while($result = $req ->fetch()){

          $data[] =array(
            "id"=> $result['id'],
            "articles"=>$result['articles'],
            "description"=>$result['description'],
            "reference"=>$result['reference'],
            "fournisseurs"=>$result['fournisseurs'],
            "date"=>$result['date'],
            "stock"=>$result['stock']);
        }
  print_r(json_encode($data));
  return json_encode($data);
}

function update_article() {
    $bdd = Dbsingleton::getInstance()->getConnection();
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $articles = $data->articles;
    $description = $data->description;
    $reference = $data->reference;
    $fournisseurs = $data->fournisseurs;
    $date = $data->date;
    $stock = $data->stock;

    $requete = "UPDATE article SET articles ='".$articles."' , description ='".$description."' , reference ='".$reference."' , fournisseurs ='".$fournisseurs."' , date ='".$date."' , stock ='".$stock."' WHERE id=".$id;
    $req = $bdd->query($requete);

    if ($req) {
        $arr = array('msg' => "Réussi", 'erreur' => '');
        $jsn = json_encode($arr);
    } else {
        $arr = array('msg' => "", 'erreur' => 'Echoué');
        $jsn = json_encode($arr);
    }
}

function add_articles() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $articles = $data->articles;
  $description = $data->description;
  $reference = $data->reference;
  $fournisseurs = $data->fournisseurs;
  $date = $data->date;
  $stock = $data->stock;

  $requete = "INSERT INTO article (articles, description, reference, fournisseurs, date, stock) VALUES ('".$articles."', '".$description."', '".$reference."', '".$fournisseurs."', '".$date."', '".$stock."' )";
  $req = $bdd->query($requete);

  if ($req) {
      $arr = array('msg' => "Réussi", 'erreur' => '');
      $jsn = json_encode($arr);
  } else {
      $arr = array('msg' => "", 'erreur' => 'Echoué');
      $jsn = json_encode($arr);
  }
}

function delete_article() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;

  $req = $bdd->query("DELETE FROM article WHERE id =".$id);

  if($req){
    echo "l'article a bien eté supprimé" ;
    return true;
  } 
  else {
    $bdd->errorInfo();
    echo "un problème est survenu !";
    return false;
  }
}

/*** fournisseur ***/

function get_fournisseurs() {
    try
    {   
        $bdd = Dbsingleton::getInstance()->getConnection();
        //var_dump($bdd);
        $req = $bdd->query('SELECT * FROM fournisseurs');
        $data=array();

        //Convertit en JSON  
        while($result = $req->fetch()){
          $data[] =array(
        "id"=> $result['id'],
          "name"=>$result['name'],
          "localisation"=>$result['localisation'],
          "reference"=>$result['reference'],
          "date"=>$result['date']);
        }
        //ferme la connexion ?
        //$bdd=null;
    }  
    catch(PDOException $e) 
    {
        die('Erreur : ' . $e->getMessage()); 
    }

print_r(json_encode($data));
return json_encode($data);

}

function get_id_fournisseurs() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;
  $data=array();
  $req = $bdd->query('SELECT * FROM fournisseurs WHERE id =' .$id);
      
        while($result = $req ->fetch()){

          $data[] =array(
            "id"=> $result['id'],
            "name"=>$result['name'],
            "localisation"=>$result['localisation'],
            "reference"=>$result['reference'],
            "date"=>$result['date']);
        }
  print_r(json_encode($data));
  return json_encode($data);
}

function update_fournisseur() {
    $bdd = Dbsingleton::getInstance()->getConnection();
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $name = $data->name;
    $localisation = $data->localisation;
    $reference = $data->reference;
    $date = $data->date;

    $requete = "UPDATE fournisseurs SET name ='".$name."' , localisation ='".$localisation."' , reference ='".$reference."', date ='".$date."' WHERE id=".$id;
    $req = $bdd->query($requete);

    if ($req) {
        $arr = array('msg' => "Réussi", 'erreur' => '');
        $jsn = json_encode($arr);
    } else {
        $arr = array('msg' => "", 'erreur' => 'Echoué');
        $jsn = json_encode($arr);
    }
}

function add_fournisseur() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $name = $data->name;
  $localisation = $data->localisation;
  $reference = $data->reference;
  $date = $data->date;

  $requete = "INSERT INTO fournisseurs (name, localisation, reference, date) VALUES ('".$name."', '".$localisation."', '".$reference."', '".$date."' )";
  $req = $bdd->query($requete);

  if ($req) {
      $arr = array('msg' => "Réussi", 'erreur' => '');
      $jsn = json_encode($arr);
  } else {
      $arr = array('msg' => "", 'erreur' => 'Echoué');
      $jsn = json_encode($arr);
  }
}

function delete_fournisseur() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;

  $req = $bdd->query("DELETE FROM fournisseurs WHERE id =".$id);

  if($req){
    echo "l'article a bien eté supprimé" ;
    return true;
  } 
  else {
    $bdd->errorInfo();
    echo "un problème est survenu !";
    return false;
  }
}

/*** user ***/

function get_users() {
    try
    {   
        $bdd = Dbsingleton::getInstance()->getConnection();
        //var_dump($bdd);
        $req = $bdd->query('SELECT * FROM users');
        $data=array();

        //Convertit en JSON  
        while($result = $req->fetch()){
          $data[] =array(
        "id"=> $result['id'],
        "username"=>$result['username']);
        }
        //ferme la connexion ?
        //$bdd=null;
    }  
    catch(PDOException $e) 
    {
        die('Erreur : ' . $e->getMessage()); 
    }

print_r(json_encode($data));
return json_encode($data);

}

function get_id_users() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;
  $data=array();
  $req = $bdd->query('SELECT * FROM users WHERE id =' .$id);
      
        while($result = $req ->fetch()){

          $data[] =array(
            "id"=> $result['id'],
            "username"=>$result['username'],
            "password"=>$result['password']);
        }
  print_r(json_encode($data));
  return json_encode($data);
}

function update_user() {
    $bdd = Dbsingleton::getInstance()->getConnection();
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $username = $data->username;
    $password = sha1($data->password);

    $requete = "UPDATE users SET username ='".$username."' , password ='".$password."' WHERE id=".$id;
    $req = $bdd->query($requete);

    if ($req) {
        $arr = array('msg' => "Réussi", 'erreur' => '');
        $jsn = json_encode($arr);
    } else {
        $arr = array('msg' => "", 'erreur' => 'Echoué');
        $jsn = json_encode($arr);
    }
}

function add_user() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $username = $data->username;
  $password = sha1($data->password);

  $requete = "INSERT INTO users (username, password) VALUES ('".$username."', '".$password."')";
  $req = $bdd->query($requete);

  if ($req) {
      $arr = array('msg' => "Réussi", 'erreur' => '');
      $jsn = json_encode($arr);
  } else {
      $arr = array('msg' => "", 'erreur' => 'Echoué');
      $jsn = json_encode($arr);
  }
}

function delete_user() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $id = $data->id;

  $req = $bdd->query("DELETE FROM users WHERE id =".$id);

  if($req){
    echo "l'article a bien eté supprimé" ;
    return true;
  } 
  else {
    $bdd->errorInfo();
    echo "un problème est survenu !";
    return false;
  }
}

/*** login ***/

function check_token() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $token = $data->token;
  $checked = $bdd->query("SELECT * FROM users WHERE token='$token'");
  $check = $checked->fetchAll();
  if (count($check) == 1){
    echo "authorized";
  } else {
    echo "unauthorized";
  }
}

function login_user() {
  $bdd = Dbsingleton::getInstance()->getConnection();
    $data = json_decode(file_get_contents("php://input"));
    $password = sha1($data->password);
    $username = $data->username;
    $userInfo = $bdd->query("SELECT username FROM users WHERE username='$username' AND password='$password'");
    $userV = $userInfo->fetch();
    $token;
    if (count($userV) == 1){
      //ça signifie que l'utilisateur est connecté et reçois un 'token'
      $token = $username . " | " . uniqid() . uniqid() . uniqid();
      
    $q = "UPDATE users SET token=:token WHERE username=:username AND password=:password";
    $query = $bdd->prepare($q);
    $execute = $query->execute(array(
      ":token" => $token,
      ":username" => $username,
      ":password" => $password
    )); 
      print_r(json_encode($token));
      return json_encode($token);
    } else {
    echo "ERROR";
    }
}

function sign_up() {
  $bdd = Dbsingleton::getInstance()->getConnection();
    $data = json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;
    $q = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $query = $bdd->prepare($q);
    $execute = $query->execute(array(
        ":username" => $username,
        ":password" => sha1($password)
    ));
    print_r(json_encode($username));
    return json_encode($username);
}

function logout_user() {
  $bdd = Dbsingleton::getInstance()->getConnection();
  $data = json_decode(file_get_contents("php://input"));
  $token = $data->token;
  $bdd->query("UPDATE users SET token='LOGGED OUT' WHERE token=$token");
}
?>

