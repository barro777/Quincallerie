<?php
        if (isset($_REQUEST['controlleur'])) {
            if ($_REQUEST['controlleur'] == 'security') {
                require_once(ROUTE_DIR.'controlleur/security.controlleur.php');
            }elseif ($_REQUEST['controlleur'] == 'produit') {
                require_once(ROUTE_DIR.'controlleur/produit.controlleur.php');
            }elseif ($_REQUEST['controlleur'] == 'commande') {
                require_once(ROUTE_DIR.'controlleur/commande.controlleur.php');
            }elseif ($_REQUEST['controlleur'] == 'utilisateur') {
                require_once(ROUTE_DIR.'controlleur/utilisateur.controlleur.php');
            }elseif ($_REQUEST['controlleur'] == 'versement') {
                require_once(ROUTE_DIR.'controlleur/versement.controlleur.php');
            }elseif ($_REQUEST['controlleur'] == 'fournisseur') {
                    require_once(ROUTE_DIR.'controlleur/fournisseur.controlleur.php');
            }else{
                require_once(ROUTE_DIR.'views/security/connexion.html.php');
            
            }
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    ?>