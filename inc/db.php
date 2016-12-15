
<?php		
		//include "config.php";

		/*function connection(){
		try
			{
			$bdd = new PDO("mysql:host=$db_server;dbname=$db_name;", $db_user, $db_pass);
			}
		catch (Exception $e)
			{
			die('Erreur : ' . $e->getMessage());
			}
			
		print_r($bdd);
		return $bdd;
		}*/
/*function connection(){
    static $bdd;
    $bdd = new PDO("mysql:host=$db_server;dbname=$db_name;", $db_user, $db_pass);
          $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $bdd;
}*/


?>

<?php
        


class DbSingleton
        
        {
        private $_connection;
        private static $_instance; //The single instance

        private $_host = "localhost";

        private $_username = "root";
        private $_password = "facesimplon";

        private $_database = "2tech";
        
                   
        /*
        Get an instance of the Database
        @return Instance
        */
        public static function getInstance() {
                if(!self::$_instance) { // If no instance then make one
                        self::$_instance = new self();
                }
                return self::$_instance;
        }
        // Constructor
        private function __construct() {
                $this->_connection = new PDO("mysql:host=$this->_host;dbname=$this->_database", $this->_username, $this->_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                
        }
        // Magic method clone is empty to prevent duplication of connection
        private function __clone() { 

                throw new Exception("Can't clone a singleton");
        }
        // Get mysqli connection
        
        public function getConnection() {
                return $this->_connection;
        }


}


/*

a injecter dans le fichier d'index pour la co a la bdd 

require 'db/Dbsingleton.php';
$dbh = Dbsingleton::getInstance()->getConnection();
                var_dump($dbh);
                */






?>