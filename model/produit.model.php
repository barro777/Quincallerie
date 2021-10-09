<?php
function get_souscathegorie(){
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from Sous_categorie";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $scth= $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $scth;
}
function get_cathegorie(){
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from Categorie";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $cth = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $cth;
}
function find_produit(){
    $pdo = ouvrir_connexion_bd();
    $sql = "select nom_produit , prix_unitaire , nom_sous_categorie , id_produit from  Produit p, Sous_categorie s 
    where p.id_sous_catégorie = s.id_sous_categorie ";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $cth = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $cth;
}



function get_produit($offset):array{
    $pdo = ouvrir_connexion_bd();
    $sql = "select nom_produit , prix_unitaire , nom_sous_categorie, id_produit  from  Produit p, Sous_categorie s 
    where p.id_sous_catégorie = s.id_sous_categorie 
    limit $offset,".NBR_PAGE;
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $produit = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return [

        'data'=> $produit,
        'count'=> $sth->rowCount()
    ];
}
    function count_produit():int{
        $pdo = ouvrir_connexion_bd();
        $sql = "select nom_produit , prix_unitaire , nom_sous_categorie from  Produit p, Sous_categorie s
        where p.id_sous_catégorie = s.id_sous_categorie";
        $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        fermer_connexion_bd($pdo);
        return $sth->rowCount();
    
}



function add_produit(array $produit,$files):int{
    $pdo = ouvrir_connexion_bd();
    extract ($produit);
    $sql = "INSERT INTO `Produit` (`nom_produit`,`prix_unitaire`, `id_fournisseur`, `quantite_stock`, `id_sous_catégorie`, `image`) 
     VALUES (?, ?, ?, ?, ?, ? )";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($libelle,$prix,$souscate,$quant,$four,$files["photo"]["name"]));
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
} 


function add_souscategorie(array $souscategorie):int{
    $pdo = ouvrir_connexion_bd();
    extract ($souscategorie);
    $sql = "INSERT INTO `Sous_Categorie` (`nom_sous_categorie`,`id_categorie`) 
     VALUES ( ?, ?)";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute($souscategorie);
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
} 









/*function insert_bien(array $bien):int{
    $pdo= ouvrir_connection_bd();
    $sql="INSERT INTO `bien` (`etat_bien`, `type_bien`, `reference`, `prix`, `description_bien`, `id_zone`, `date_creation`, `addresse`, `id_user`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute($bien);
  $dernier_id = $pdo->lastInsertId();
  fermer_connection_bd($pdo);//fermeture
  return $dernier_id ;
}

function insert_image(array $image):int{
  $pdo= ouvrir_connection_bd();
  $sql="INSERT INTO `image` (`nom_image`, `id_bien`) VALUES (?,?);";
   $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute($image);
$dernier_id = $pdo->lastInsertId();
fermer_connection_bd($pdo);//fermeture
return $dernier_id ;
?>
 