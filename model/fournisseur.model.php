<?php
function get_fournisseur(){
    $pdo = ouvrir_connexion_bd();
    $sql = "select * from Fournisseur";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $fns = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $fns;
   
}
$fourn=get_fournisseur();
function add_fns(array $fns):int{
    $pdo = ouvrir_connexion_bd();
    extract ($fns);
    $sql = "INSERT INTO `Fournisseur` (`nom_fournisseur`, `numb_fns`, `adresse_fns`, `dette`) 
     VALUES ( ?, ? ,? , ?)";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($nom,$phone,$adresse,(string)$dette));
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
} 
?>