<?php
if (isset($_SESSION['arrayError'])) {
        $arrayError=$_SESSION['arrayError'];
        unset($_SESSION['arrayError']);
    }
  $roles = get_role();

 require (ROUTE_DIR.'views/inc/menu.html.php');?> 
<div class="container">                
 <div class="mt-5" > 
                      <form method="POST" action="<?=WEB_ROUTE?>" class="row g-3" enctype="multipart/form-data">
                        <input type="hidden" name="controlleur"value="fournisseur">
                        <input type="hidden" name="action"value="inscrire"> 
                      <div class="col-md-6">
                        <label class="form-label" >Nom</label>
                        <input type="text" name="nom"  class="form-control">
                        <small  class="form-text text-danger">
                                    <?= isset($arrayError['nom']) ? $arrayError['nom']:""; ?>
                                </small>
                      </div>
                      <div class="col-md-6">
                        <label  class="form-label">Adresse</label>
                        <input type="text" name="adresse" class="form-control" >
                        <small  class="form-text text-danger">
                                      <?= isset($arrayError['adresse']) ? $arrayError['adresse']:""; ?>
                                </small> 
                      </div> 
                                   
                                <div class="col-md-6 mt-4">
                                  <label  class="form-label" >Télephone</label>
                                  <input type="text" name="phone" class="form-control"placeholder="771111111">
                                  <small  class="form-text text-danger">
                                         <?= isset($arrayError['phone']) ? $arrayError['phone']:""; ?>
                                </small>
                                </div>
                                
                                <div class="col-md-6 mt-4">
                                  <label class="form-label">Dette</label>
                                  <input type="text" name="dette" class="form-control" value="000">
                                  <small  class="form-text text-danger">
                                          <?= isset($arrayError['dette']) ? $arrayError['dette']:""; ?>
                                 </small>
                                </div>                                                 
                      <div class="col-12 offset-10 mt-2">
                        <button type="submit" class="btn btn-warning" name="">inscrire</button>
                      </div>
                    </form>
  </div>
  </div>

<?php require (ROUTE_DIR.'views/inc/footer.html.php');?>