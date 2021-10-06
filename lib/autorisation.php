<?php 
      function est_connect():bool{
        return isset($_SESSION['userConnect']);
     }
     function est_gestionnaire():bool{
         return est_connect() && $_SESSION['userConnect']['nom_role']=='ROLE_GESTIONNAIRE';
     }
     function est_responsable():bool{
         return est_connect() && $_SESSION['userConnect']['nom_role']=='ROLE_CLIENT';
     }
?>