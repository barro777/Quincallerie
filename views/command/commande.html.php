
<?php require (ROUTE_DIR.'views/inc/menu.html.php');
?>
<fieldset>
  <legend><b>Les Commandes</b></legend>
  <table class="table table-border">
  <thead>
  
    <tr>
      
      <th scope="col">date commande</th>
      <th scope="col">date prévue</th>
      <th scope="col">nom du produit</th>
      <th scope="col">montant </th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?//php  $produits=get_produit($offset); ?>
  <?php foreach ($comm as $cmd) :?>
    <tr>
      <td><?=$cmd['date_commande']?></td>
      <td><?=$cmd['date_prevue'] ?></td>
      <td><?=$cmd['nom_produit']?> fcfa</td>
      <td><?=$cmd['mnt_commande']?></td>
      <td><a href="<?=WEB_ROUTE.'?controlleur=commande&views=edit&id_produit='.$cmd['id_commande']?>"
       value="<?= $cmd['id_commande']?>" name='id' title="Modifier"><i class="bi bi-pencil-square"></i></a> <a href="" title="Suprimer" ><i class="bi bi-trash" ></i></a></td>
    </tr>
    <?php endforeach  ?>
  </tbody>
</table>

<div class="card-rooter clearfix">
<ul class="pagination pagination-sm float-right">
  <li class ="page-item <?= ($current_page == 1) ? "disabled": "" ?>"> 
    <a href="<?=WEB_ROUTE.'?controlleur=commande&views=les_commandes&page='. ($current_page - 1)?>" class = "page-link"> Précedent </a>
  </li>

  <?php for ($i=1;$i<=$page;$i++):?>
    <li class="page-item"><a href="<?=WEB_ROUTE.'?controlleur=produit&views=produit&page='.$i?>"><?= $i ?> </a></li>
  <?php endfor ?>

  <li class ="page-item <?= ($current_page== $page)?"disabled":"" ?>" >
    <a href="<?= WEB_ROUTE.'?controlleur=produit&views=produit&page='. ($current_page + 1 )?>" class="page-link"> Suivante</a>
  </li>
</ul>
</div>
</fieldset>
        

<?php

require (ROUTE_DIR.'views/inc/footer.html.php');
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        