<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='connexion') {
       
        require(ROUTE_DIR.'views/security/connexion.html.php');
       }elseif ($_GET['views']=='Déconnexion') {
           $_SESSION['userConnect']=destroy_session();
        require(ROUTE_DIR.'views/security/connexion.html.php');
       }elseif ($_GET['views']=='inscrire') {
        require(ROUTE_DIR.'views/security/inscription.html.php');
       }

    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }
       
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
  if (isset($_POST['action'])) {
        if ($_POST['action']=='connexion') {
            connexion($_POST['email'],$_POST['passer']);            
       }elseif ($_POST['action']=='inscrire') {  
           unset($_POST['controlleur']);
           unset($_POST['action']);
          inscrire($_POST,$_FILES);
      
        }
    }
}

function connexion(string $login,string $password):void{

      $arrayError = array ();
    error_email($arrayError,'email',$login);
    error_password($arrayError,'passer',$password);
    if (form_valid($arrayError)){
        $user = find_user($login,$password);
        if (count($user)==0){
            $arrayError['error_Connexion']='login ou mot de pass incorrect';
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controlleur=security&views=connexion');
        }else{
            $_SESSION['userConnect']=$user; 
           
           header('location:'.WEB_ROUTE.'?controlleur=produit&views=produit');
        }
        
    }else{
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleur=security&views=connexion');
        
    }
}
function inscrire(array $data,$_files):void{

        $arrayError=array();
        extract($data);
        
       error_name($arrayError,'nom',$nom);
        error_name($arrayError,'prenom',$prenom);
        error_email($arrayError,'email',$email);
        error_password($arrayError,'password',$password);
        error_number($arrayError,'phone',$phone);
        //valid_image($arrayError,$Upload,'Upload'); 
        if (!form_valid($arrayError)){
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controlleur=security&views=inscrire');
        }else{
            $target_dir = ROUTE_DIR.'public/image';
            $target_file = $target_dir . basename($_files["Upload"]["name"]);
            upload_image($files,$target_file);
        add_user($data,$_files);
            header('location:'.WEB_ROUTE.'?controlleur=security&views=inscrire');
        } 
}
?>