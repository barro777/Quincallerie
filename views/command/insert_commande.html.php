<?php 
require (ROUTE_DIR.'views/inc/menu.html.php');
//$date = generer_date();
$prod = find_produit();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

?>
<form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" >
      <input type="hidden" name="controlleur" value="commande">
      <input type="hidden" name="action" value="insert_commande">

 <div class="container"> 
   <div> <h4 style="text-align: center;" class="mt-3" id="ptitre" >Enregistrer une Commande<hr> </h4></div> 
     
      <div class=""id="input"style=""> 
      <h4 style="text-align: center;" class="mt-3">Formulaire<hr> </h4>
           <div class="row mt-5">
           <div class=" col-sm ml-2">
                <label for="">date du commande</label>
                <input type="date" class=" col-sm" name="datec" id="bord" value="" >
            </div>
            <div class="col-sm ml-1">
              
                            <label for=""class="">Date Prévue </label>
                            <input type="Date" class="col-sm" name="datep" id="bord" >
            </div>
            <div class="col-sm ml-1">
                            <label for=""class="">Quantité Commande</label>
                            <input type="text" class="col-sm " name="quantite" id="bord" >
            </div>
                     
           </div>
            <div class="row mt-5">
            <div class="col-sm " >
                      <label for="">Montant Commande </label>
                      <input type="text" name="montant_commande" class="col-sm-6 ml-2"id="bord"placeholder="fcfa">
            </div>
            <!-- <input type="hidden" name="id_user"value="<?= $id_user ?>">
            -->
             <div class="col-sm">
                <label for=""class=""> Produit</label>
                <select class="col-sm-6" id="bord" name="produit">
                <?php foreach ($prod as $produit):?> 
                  <option class="" value="<?= $produit['id_produit']?>"> <?=$produit['nom_produit']?> </option>
                  <?php endforeach?>
                </select>
            </div>
            
            
           </div>
           <div>
          <button  type="submit" class="btn btn-warning mt-3 " id="right">Valider</button>
           </div>
           
        </div> 
    </div>
             
  </div>

 </div>
 </form>

                 
 <?php require (ROUTE_DIR.'views/inc/footer.html.php');?>
                 