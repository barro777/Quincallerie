<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='les_versements') {
        require(ROUTE_DIR.'views/versement/versement.html.php');
       }elseif ($_GET['views']=='fair_versement') {
        fair_versement();
       }
    }else{
           require(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
         if (isset($_POST['action'])) {
            if ($_POST['action']=='insert_versement') {
                unset($_POST['controlleur']);
                unset($_POST['action']);
                ajout_versement($_POST);
            }
         }
    }                           
      
function fair_versement(){
   $en_cour = find_commande();
   require(ROUTE_DIR.'views/versement/add_versement.html.php');
}
function ajout_versement(array $data):void{
   $arrayError=array();
         extract($data);
         
      error_chiffre($arrayError,'mnt_versement',$mnt_versement);
      if (!form_valid($arrayError)){
         $_SESSION['arrayError']=$arrayError;
        
         header('location:'.WEB_ROUTE.'?controlleur=versement&views=fair_versement');
       
     }else{
      
      
      (add_versement($mnt_versement,$date_versement, $id_commande)) ;
     
       
     
        
         header('location:'.WEB_ROUTE.'?controlleur=versement&views=fair_versement');  
     }
}

?>