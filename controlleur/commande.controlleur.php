<?php          
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='les_commandes') {
        mes_commande();
       }elseif ($_GET['views']=='fair_commande') {
       
         require(ROUTE_DIR.'views/command/insert_commande.html.php');
       }


    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }


    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
         if (isset($_POST['action'])) {
            if ($_POST['action']=='insert_commande') {
                unset($_POST['controlleur']);
                unset($_POST['action']);
                ajout_commande($_POST);
            }
         }
    } 
    function mes_commande(){
        $count = count_command();
        $par_page = NBR_PAGE;
        $current_page=isset($_GET['page'])?$_GET['page']:1;
        $page=ceil($count/$par_page);
        $premier=($current_page*$par_page)-$par_page;
        $commande=get_comman($premier);
        $comm=$commande['data'];  
        require(ROUTE_DIR.'views/command/commande.html.php');                        
    }
    function ajout_commande(array $commande):void{
        extract($commande);

        $arrayError = array();
        
   
      if (form_valid($arrayError)){
        
   $id_user=(int)$_SESSION['userConnect'][0]['id_user'];
           
        (add_commande($datec,$datep,$quantite,$montant_commande,$id_user,$produit)); 
        
     header('location:'.WEB_ROUTE.'?controlleur=commande&views=fair_commande');

      }else{
          $_SESSION['arrayError']=$arrayError;
          header('location:'.WEB_ROUTE.'?controlleur=security&views=connexion');
          
      }
  }

                 
?>
