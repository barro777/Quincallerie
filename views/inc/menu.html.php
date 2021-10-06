<?php
 require (ROUTE_DIR.'views/inc/header.html.php');
 ?>
  <body>
  <div class="bg-secondary">
                <div class="haut">
                <img class="img"src="<?=WEB_ROUTE.'image/log.png'?>" alt="" style="">   
                          <h3
                          class="txt">
                          Quincallerie Barro & Frére
                          </h3>
                        <?php if (isset($_GET['views'])=='Déconnexion'):?>
                        <button type="submit" class="deconnect" name="Déconnexion"><a href="controlleur=security&views=Déconnexion">Déconnexion</a></button> 
                        <?php endif ?>
                </div>  
<nav class="navbar navbar-expand-lg navbar-light bg-secondary offset-4">
      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav ">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning " href="<?=WEB_ROUTE.'?controlleur=produit&views=produit'?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produit
                    </a>
                    <!-- bloc menu déroulant -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=produit&views=insert'?>">Enregistrer un produit</a>
                    <a class="dropdown-item" href="#">Produit en Rupture</a>
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=produit&views=produit'?>">liste des produits</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Commande
                    </a>
                    <!-- bloc menu déroulant -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=commande&views=fair_commande'?>">Enregistrer un commande</a>
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=commande&views=les_commandes'?>">liste des commandes</a>
                    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Versement
                    </a>
                    <!-- bloc menu déroulant -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=produit&views=insert'?>">Enregistrer un Versement</a>
                    <a class="dropdown-item" href="#">Liste des Versements</a>
                    <a class="dropdown-item" href="#">Liste des Paiements</a>
                    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Utilisateur
                    </a>
                    <!-- bloc menu déroulant -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=security&views=inscrire'?>">Enregistrer un Utilisateur</a>
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleur=fournisseur&views=inscrire'?>">Enregistrer un Fournisseur</a>
                    <a class="dropdown-item" href="#">Liste des Utilisateurs</a>
                    </div>
                </li>
                </ul>
            </div>
</nav>                              
</div>