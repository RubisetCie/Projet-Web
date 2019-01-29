<?php
 
$bdd = new PDO('mysql:host=localhost;dbname=cesiprojet;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      
$event_name = $_POST['event_name'];
$event_description = $_POST['event_description'];
$event_picture = $_POST['event_picture'];

//$requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");


// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("INSERT INTO events (event_name, event_description, event_picture) VALUES( :event_name,:event_description,:event_picture)");
        
$requete->bindValue(':event_name', $event_name, PDO::PARAM_STR);
$requete->bindValue(':event_description', $event_description, PDO::PARAM_STR);
$requete->bindValue(':event_picture', $event_picture, PDO::PARAM_STR);

$requete->execute();

$reponse = $bdd->prepare("SELECT event_name FROM events WHERE event_name = '$_POST[event_name]'AND event_description = '$_POST[event_description]'AND event_picture = '$_POST[event_picture]");
$reponse->execute();

/* Récupération de toutes les valeurs de la première colonne */
$result = $reponse->fetchAll(PDO::FETCH_COLUMN);
var_dump($result);

$count = $reponse->rowCount();


//Dans le cas où il y a une réponse, qu'un pseudo dans la table correspont au pseudo tapé
if($count >1) 
{ 
// evenement déjà utilisé 
echo 'Cette évènement est déjà utilisé'; 
} 
    
    
else 
{ 
// evenement libre, on l'insère dans la table
$query = $bdd->query("SELECT event_name FROM events WHERE event_name = '$event_name'"); 
    echo "félicitation vous venez de créée votre propre événement!!$event_name";
}
                
?> 