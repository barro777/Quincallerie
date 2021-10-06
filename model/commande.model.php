<?php

function add_commande(array $commande):int{
    $pdo = ouvrir_connexion_bd();
    extract ($commande);
    $sql = "INSERT INTO `Commande` (`date_commande`,`date_prevue`, `quantite_commande`,`mnt_commande`,'id_user','id_produit') 
     VALUES (?, ?, ?, ?, ?, ?)";
     $now= date_create();
     $datec=date_format($now,'Y-m-d');
     $id_user = $_SESSION['userConnect'][0]['id_user'];
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($datec, $datep , $quantite, $montant_commande, $id_user,$produit));
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
}

   /*  function add_produit(array $produit,$files):int{
        $pdo = ouvrir_connexion_bd();
        extract ($produit);
        $sql = "INSERT INTO `Produit` (`nom_produit`,`prix_unitaire`, `id_fournisseur`, `quantite_stock`, `id_sous_catégorie`, `image`) 
         VALUES (?, ?, ?, ?, ?, ? )";
        $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($libelle,$prix,$souscate,$quant,$four,$files["photo"]["name"]));
        fermer_connexion_bd($pdo);
        return $sth->rowCount();
    } 
 */
?>