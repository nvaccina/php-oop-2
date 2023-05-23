<div class="container">
    <h3 class="pt-1">I nostri prodotti</h3>
    <div class="d-flex flex-wrap justify-content-center pt-2">
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