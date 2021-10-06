
<?php require (ROUTE_DIR.'views/inc/menu.html.php');?>

<fieldset>
  <legend><b>Nos Produit</b></legend>
  <table class="table table-border">
  <thead>
  
    <tr>
      
      <th scope="col">Produit</th>
      <th scope="col">Sous Cathégorie</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?//php  $produits=get_produit($offset); ?>
  <?php foreach ($prod as $produit) :?>
    <tr>
      <td><?=$produit['nom_produit']?></td>
      <td><?=$produit['nom_sous_categorie'] ?></td>
      <td><?=$produit['prix_unitaire']?> fcfa</td>
      <td><a href="<?=WEB_ROUTE.'?controlleur=produit&views=edit&id_produit='.$produit['id_produit']?>" title="Modifier"><i class="bi bi-pencil-square"></i></a> <a href="" title="Suprimer" ><i class="bi bi-trash" ></i></a></td>
    </tr>
    <?php endforeach  ?>
  </tbody>
</table>

<div class="card-rooter clearfix">
<ul class="pagination pagination-sm float-right">
  <li class ="page-item <?= ($current_page == 1) ? "disabled": "" ?>"> 
    <a href="<?=WEB_ROUTE.'?controlleur=produit&views=produit&page='. ($current_page - 1)?>" class = "page-link"> Précedent </a>
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


require (ROUTE_DIR.'views/inc/footer.html.php');?>