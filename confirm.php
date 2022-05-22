<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Instant Café</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo (int)$orderCount ?>
      </p>
      <p class="order-price">Rp<?php echo (number_format($menu->getTotalPrice() , 0, ',', '.')) ?></p>
    <?php endforeach ?>
    <h3>Harga total: Rp<?php echo (number_format($totalPayment , 0, ',', '.')) ?></h3>
  </div>
</body>
</html>