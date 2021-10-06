


<?php
function get_role(){
    $pdo = ouvrir_connexion_bd();
    extract ($user);
    $sql = "select * from Role";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute();
    $user = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $user;
}
function add_user(array $data,$files):int{
    $pdo = ouvrir_connexion_bd();
    extract ($data);
    $sql = "INSERT INTO `User` (`nom_user`, `prenom_user`, `login`, `password`, `phone`,`id_role`,`image`) 
     VALUES ( ?, ? ,? , ?, ? ,? , ?)";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($nom,$prenom,$email,$password,$phone,$role,$files['Upload']['name']));
    fermer_connexion_bd($pdo);
    return $sth->rowCount();
} 
 
function find_user($login , $password):array{
    $pdo = ouvrir_connexion_bd();
    $sql = "SELECT * From User u,Role r
                 Where u.id_role=r.id_role
                 and u.login=? 
                 and u.password=?";
    $sth = $pdo->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute([$login,$password]);
    $find = $sth->fetchALL();
    fermer_connexion_bd($pdo);
    return $find;
   
   
    
}
?>