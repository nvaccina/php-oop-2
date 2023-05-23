<?php

include 'models/Gioco.php';
include 'models/Cuccia.php';
include 'models/Cibo.php';

//DB
require_once __DIR__ . "/DB/db.php";

//VIEWS
include __DIR__ . "/Views/layout/head.php";
include __DIR__ . "/Views/layout/header.php";
include __DIR__ . "/Views/partials/products.php";
include __DIR__ . "/Views/layout/footer.php";

?>


