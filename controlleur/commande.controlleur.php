<?php          
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='les_commandes') {
        require(ROUTE_DIR.'views/command/commande.html.php');
       }elseif ($_GET['views']=='fair_commande') {
       
         require(ROUTE_DIR.'views/command/insert_commande.html.php');
       }


    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }


    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
         if (isset($_POST['action'])) {
            if (isset($_POST['action'])=='insert_commande') {
                unset($_POST['controlleur']);
                unset($_POST['action']);
                var_dump($_SESSION);
                die;
                
                ajout_commande($_POST);
            }
         }
    }                           
      
    




    function ajout_commande(array $data):void{
            extract($data);
            /* $now= date_create();
            $datec=date_format($datec,'Y-m-d'); */
            $id_user = $_SESSION['userConnect']['id_user'];

            $data = [
                $datec , 
                $datep , $quantite, $montant_commande, $id_user,$produit
            ];
            //header('location:'.WEB_ROUTE.'?controlleur=produit&views=produit');

    }
                 
?>
