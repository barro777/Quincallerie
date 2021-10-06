<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='fournisseur') {
        require(ROUTE_DIR.'views/fournisseur/founisseur.html.php');
       }elseif ($_GET['views']=='inscrire') {
        require(ROUTE_DIR.'views/fournisseur/inscripfns.html.php');
       }

    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }
       
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
  if (isset($_POST['action'])) {
       }if ($_POST['action']=='inscrire') {  
           unset($_POST['controlleur']);
           unset($_POST['action']);
          inscrire($_POST);
          
      
        }
    }

    function inscrire(array $data):void{

        $arrayError=array();
        extract($data);
        
       error_name($arrayError,'nom',$nom);
       error_name($arrayError,'adresse',$adresse);
       error_number($arrayError,'phone',$phone);
        error_chiffre($arrayError,'dette',$dette);
        //valid_image($arrayError,$Upload,'Upload'); 
        if (!form_valid($arrayError)){
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controlleur=fournisseur&views=inscrire');
        }else{
        add_fns($data);
            header('location:'.WEB_ROUTE.'?controlleur=fournisseur&views=inscrire');
        } 
}



?>