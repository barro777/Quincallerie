<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='les_versements') {
        require(ROUTE_DIR.'views/versement/versement.html.php');
       }elseif ($_GET['views']=='fair_versement') {
         require(ROUTE_DIR.'views/versement/insert_versement.html.php');
       }
    }else{
           require(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
         if (isset($_POST['action'])) {
            if ($_POST['action']=='insert_versement') {
                unset($_POST['controlleur']);
                unset($_POST['action']);
                ajout_commande($_POST);
            }
         }
    }                           
      



?>