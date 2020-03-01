<?php
require __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cerulean/bootstrap.min.css">    
</head>
<body>

    <h1>Products</h1>
    <?php foreach($res as $product) : ?>
        <h3><?php echo $product['title']; ?></h3>
        <h4><?php echo $product['description']; ?></h4>
        <h4><?php echo $product['fulltext']; ?></h4>
    <?php endforeach; ?>
  
</body>
</html> 