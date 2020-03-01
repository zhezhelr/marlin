<?php

try {
    $dbh = new PDO('mysql:host=localhost:8889;dbname=phpproducts', 'root', 'root');
    //echo 'Connected';

    $sth = $dbh->prepare('SELECT * FROM products');
    $sth->execute();
    $res = $sth->fetchAll();
    //var_dump($res);

} catch (PDOException $e) {
    echo $e->getMessage();
}

