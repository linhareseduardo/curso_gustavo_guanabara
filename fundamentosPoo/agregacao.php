<?php 

require_once 'Cesta.php';
require_once 'Produto.php';

$c1 = new Cesta;

$p1 = new Produto ('Chocolate', 10, 5 );
$p2 = new Produto ('Café', 100, 7 );
$p3 = new Produto ('Mostarda', 50, 3 );

$c1 -> addItem( $p1 );
$c1 -> addItem( $p2 );
$c1 -> addItem( $p3 );

foreach($c1 -> getItens() as $item){
    print "Item: {$item -> getDescricao()} <br>";
}

// echo '<pre>';
// var_dump($c1);
// echo '<pre>';
// print_r($c1);

?>