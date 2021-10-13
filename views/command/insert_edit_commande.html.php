<?php 
require (ROUTE_DIR.'views/inc/menu.html.php');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

?>
<form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" >
      <input type="hidden" name="controlleur" value="commande">
      <input type="hidden" name="id_commande" value="<?= $id_commande ?>">
      <input type="hidden" name="action" value="update_commande">

 <div class="container"> 
        <div> <h4 style="text-align: center;" class="mt-3" id="ptitre" >modifier la  Commande<hr> </h4></div> 
     
            <div class=""id="input"style=""> 
            <h4 style="text-align: center;" class="mt-3">Formulaire<hr> </h4>
           <div class="row mt-5">
           <div class=" col-sm ml-2">
                <label for="">date de livraison </label>
                <input type="date" class=" col-sm" name="date_livrer" id="bord" value="" >
            </div>
            <div class="col-sm ml-1">
                            <label for=""class="">montant restant</label>
                            <input type="text" class="col-sm" name="mtn_restant" id="bord" >
            </div>

          
          <button  type="submit" class="btn btn-warning mt-3 " id="right">Valider</button>
           
           
</div> 
  
             
  </div>

 </div>
 </form>

                 
 <?php require (ROUTE_DIR.'views/inc/footer.html.php');?>
                 