<?php 
      function est_connect():bool{
        return isset($_SESSION['userConnect']);
     }
     function est_gestionnaire():bool{
         return est_connect() && $_SESSION['userConnect'][0]['nom_role']=='GESTIONNAIRE';
     }
     function est_responsable_achat():bool{
         return est_connect() && $_SESSION['userConnect'][0]['nom_role']=='R_achat';
     }
     function est_responsable_paiement():bool{
        return est_connect() && $_SESSION['userConnect'][0]['nom_role']=='R_paiement';
    }
?>