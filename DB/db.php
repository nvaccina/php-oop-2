<?php

require_once __DIR__ . "/../Models/Prodotto.php";

$listProducts = [
  new Gioco('Orsetto Peluche', 20.0, 'gioco1', 'cane', 'Gioco', 'peluche'),
  new Gioco('Osso masticabile', 32.0, 'gioco_cane1', 'cane', 'Gioco', 'pelle di bufalo'),
  new Gioco('Topo Peluche', 20.0, 'gioco_gatto2', 'gatto', 'Gioco', 'peluche'),
  new Cuccia ('Cuccia esterna per cani', 80.0, 'cuccia1', 'cane', 'Cuccia', 'legno', '20x20x52'),
  new Cuccia ('Cuccia rampicante a torretta', 55.0, 'cuccia2', 'gatto', 'Cuccia', 'cartone', '99x70x75h'),
  new Cuccia ('Cuccia per Cani ', 65.5, 'cuccia3', 'cane', 'Cuccia', 'plastica', '86x84x82h'),
  new Cibo ('Crocchette di salmone', 45.0, 'cibo1', 'gatto', 'Cibo', 'salmone'),
  new Cibo ('Cibo umido per gatti', 43.0, 'cibo2', 'gatto', 'Cibo', 'pollame'),
  new Cibo ('Natural Trainer', 62.0, 'cibo3', 'cane', 'Cibo', 'tonno, riso'),
];
