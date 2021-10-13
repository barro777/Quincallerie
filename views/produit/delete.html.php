
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="http://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE. "css/menu.css"?> ">

</head>
  <body>
  <div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">
            <h4 class="card-title text-center text-primary">Formulaire</h4>
            <form action="" method="GET">
              <input type="hidden" name="controlleur" value="produit">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id_produit" value="<?=(int)$id_produit?>">
                <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE?>" role="button">non</a>
                <button type="submit" class="btn btn-danger" href="<?=WEB_ROUTE?>" name="">oui</button>
              </form>
          </div>
        </div>
        </div>
        </div>
      </div>