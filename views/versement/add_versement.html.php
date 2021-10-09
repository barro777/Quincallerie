<?php 
require (ROUTE_DIR.'views/inc/menu.html.php');
if (isset($_SESSION['arrayError'])) {
  $arrayError=$_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
//$date = generer_date();
//$prod = find_produit();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
$est='est en cour depuit';
?>
<form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" >
      <input type="hidden" name="controlleur" value="versement">
      <input type="hidden" name="action" value="insert_versement">

 <div class="container"> 
   <div> <h4 style="text-align: center;" class="mt-3" id="ptitre" > versement d'une Commande <hr> </h4></div> 
     
      <div class=""id="input"style=""> 
      <h4 style="text-align: center;" class="mt-3">Formulaire des versements<hr> </h4>
           <div class="row mt-5">
           <div class=" col-sm ml-2">
                <label for="">montant versement</label>
                <input type="text" class=" col-sm" name="mnt_versement" id="bord" value="" >
                <small  class="form-text text-danger">
                                      <?= isset($arrayError['mnt_versement']) ? $arrayError['mnt_versement']:""; ?>
                                </small>
            </div>
            <div class="col-sm ml-1">
              
                            <label for=""class="">Date versement </label>
                            <input type="date" class="col-sm" name="date_versement" id="bord" >
            </div>
          
                     
           </div>
            <div class="row mt-5">
          
             <div class="col-sm">
                <label for=""class=""> la Commande </label>
                <select class="col-sm-6" id="bord" name="id_commande">
                <?php foreach ($en_cour as $en_cours):?> 
                  <option class=""value="<?=$en_cours['id_commande']?>" > <?= $en_cours['nom_produit'].$est.$en_cours['date_commande'] ?> </option>
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
                 