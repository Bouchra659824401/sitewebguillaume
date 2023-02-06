<!DOCTYPE html>
<html>
 <head> 
     <title> Page de traitement de formulaire </title>
	 <meta charset="utf-8">
 </head>
 <body>
 
 
 	 <?php 
     include 'database.php';
	 global $db;
	 	 
    
	 
	 
     if(isset ($_POST['formsend'])) // isset si existe 
	 {
	  $name = $_POST['name']; // methode post permet ajouter des information a une base de donnees
	  $email = $_POST['email'];
	  $phone= $_POST['phone'];
	  $message = $_POST['message'];
	 
	 
	 if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)) // empty si est vide
	 {
 
		 
		 
	 
	 // on prepare la requete
	 
	 $q = $db-> prepare("INSERT INTO `users`(`name`, `email`, `phone`, `message`) VALUES (:name,:email,:phone,:message)");
	 // on execute la requete
	 $q ->execute([':name' =>$name, ':email' => $email , ':phone' =>$phone, ':message' =>$message]);
		echo " Bonjour $name votre formulaire a ete envoyer avec succes";
	 }
	 else {
		echo "Les information que tu as saisie sont faux";
	 }
	 }
	 
 ?>
 </body>
</html>