<?php

include 'models/Gioco.php';
include 'models/Cuccia.php';
include 'models/Cibo.php';


$orsetto_peluche = new Gioco('Orsetto Peluche', 20, 'link-gioco', 'gatto', 'peluche');
$cuccia2 = new Cuccia ('Cuccia esterna per Cani Eco Lodge', 80, 'link-cuccia', 'cane', 'Cuccia Large: 99x70x75h');
$crocchette_salm_cane = new Cuccia ('Crocchette di salmone', 45, 'link-crocchette', 'cane', 'Salmone');

var_dump($orsetto_peluche );
var_dump($cuccia2 );
var_dump($crocchette_salm_cane );
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
  <div class="container text-center py-5">
    <h1>PET SHOP</h1>

    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        
      </div>
    </div>
  </div>
  

  <ul>
    <li><?php echo $cuccia2->getCategory() ?></li>
  </ul>
  
</body>
</html>