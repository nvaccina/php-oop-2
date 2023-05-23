<?php

include 'models/Gioco.php';
include 'models/Cuccia.php';
include 'models/Cibo.php';

require_once __DIR__ . "/DB/db.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <title>PET SHOP</title>
</head>
<body>
  
  <div class="container py-5">
    <h1 class="text-center pb-2">PET SHOP</h1>
    <hr>

    <div class="d-flex flex-wrap justify-content-center pt-5">

      <?php foreach($listProducts as $product): ?>

        <div class="card mx-2 mb-4" style="width: 18rem; cursor: pointer;">
          <img src="img/<?php echo $product->image ?>.jpg" class="card-img-top" style="height: 300px;" alt="<?php echo $product->title ?>">
          <div class="card-body border-top border-1"">
            <h5 class="card-title text-center"><?php echo $product->title ?></h5>
            <p class="card-text mb-0"><?php echo $product->getInfo() ?></p>

            <p class="card-text">
              <?php 
                echo match($product->type) {
                  'Gioco'  => $product->getMaterial(),
                  'Cuccia' => $product->getcucciaInfo(),
                  'Cibo'   => $product->getComposition(),
                }
              ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  
</body>
</html>