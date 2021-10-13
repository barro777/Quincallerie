<?php
//INSERT INTO `Commande` (`id_commande`, `date_commande`, `date_prevue`, `quantite_commande`, `mnt_commande`, `etat_commande`, `date_livrer`, `mnt_restant`, `id_user`, `id_produit`) 
//VALUES (NULL, '2021-10-07', '2021-10-09', '200', '5800', 'livrer', '2021-10-07', '5000', '14', '1');

function add_commande($datec,$datep,$quantite,$montant_commande,$id_user,$produit):int{
   $quantite=(int)$quantite;
   $montant_commande=(int)$montant_commande;
   $produit = (int) $produit;
    $pdo = ouvrir_connexion_bd();
    //extract($commande);
    $sql = "INSERT INTO `Commande` (`date_commande`, `date_prevue`, `quantite_commande`, `mnt_commande`, `id_user`, `id_produit`) 
    VALUES (?,? , ?, ?, ?,?);";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($datec,$datep,$quantite,$montant_commande,$id_user,$produit));
    $dernier_id=$pdo->lastInsertId();
    fermer_connexion_bd($pdo);
   return $dernier_id;


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
function get_comman($offset):array{
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from  Commande
    c, Produit p
    where p.id_produit = c.id_produit
    limit $offset,".NBR_PAGE;
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $commande = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return [                                                                                        
        'data'=> $commande,
        'count'=> $sth->rowCount()
    ];
}
function count_command():int{
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from  Commande
    c, Produit p
    where p.id_produit = c.id_produit";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    fermer_connexion_bd($pdo);
    return $sth->rowCount();

}
function find_commande(){
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from  Commande c, Produit p
    where p.id_produit = c.id_produit and
     etat_commande like 'en_cour'";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $cth = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $cth;
}
function update_commande($etat_commande, $date_livrer,$mtn_restant , $id_commande):int{

     $pdo = ouvrir_connexion_bd();
     $etat_commande ='en_cour';
     
   
     $sql = "UPDATE `Commande` SET 
     `etat_commande` = ? , `date_livrer` = ?, 
     `mnt_restant` = ? WHERE `Commande`.`id_commande` = ? ";
     $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
     $sth->execute($etat_commande, $date_livrer,$mtn_restant , $id_commande);
     fermer_connexion_bd($pdo);
    return $sth->rowCount(); 

 
 }






?>