<?php
 
$bdd = new PDO('mysql:host=localhost;dbname=cesiprojet;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_picture = $_POST['product_picture']; 
$product_type = $_POST['product_type'];
$product_price = $_POST['product_price'];
$product_stock = $_POST['product_price'];


//$requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");


// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("INSERT INTO products (product_name, product_description, product_picture, product_type, product_price, product_stock) VALUES( :product_name,:product_description,:product_picture,:product_type,:product_price,:product_price)");
        
$requete->bindValue(':product_name', $product_name, PDO::PARAM_STR);
$requete->bindValue(':product_description', $product_description, PDO::PARAM_STR);
$requete->bindValue(':product_picture', $product_picture, PDO::PARAM_STR);
$requete->bindValue(':product_price', $product_price, PDO::PARAM_STR);
$requete->bindValue(':product_type', $product_type, PDO::PARAM_STR);
$requete->bindValue(':product_price', $product_stock, PDO::PARAM_STR);

$requete->execute();

$reponse = $bdd->prepare("SELECT product_name FROM products WHERE product_name = '$_POST[product_name]'AND product_description = '$_POST[product_description]'AND product_picture = '$_POST[product_picture]'AND product_type = '$_POST[product_type]'AND product_price = '$_POST[product_price]");
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
$query = $bdd->query("SELECT event_name FROM product WHERE product_name = '$product_name'"); 
    echo "félicitation vous venez de créée votre propre produit!!$product_name";
}
                
?> 