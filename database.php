
<?php 
   // information didentification
   define('HOST','localhost');
   define('DB_NAME','guillaume');
   define('USER','root');
   define('PASS','');
   
	 
	 //try catch permet de verifier si ca fonctionne pas problem de connection attraper un erreur qui est arriver
   try{
	   // connection a la base de donnee
	   $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS ); // ca cest url pour connecter notre bdd
	   // verifier la connexion
	   $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // deux attribut pdo ce sont des type derreur
	   $db-> setAttribute (PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	   
   } catch(PDOException $e){
	   echo $e;
   }

?>
