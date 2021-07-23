<?php

require_once './blockchain.php';

$bitcoin = new Blockchain();

echo '<pre>';
var_dump($bitcoin);
$bitcoin->createNewBlock(1, 'hash-0', 'hash-1');
$bitcoin->createNewBlock(2, 'hash-1', 'hash-2');
$bitcoin->createNewBlock(3, 'hash-2', 'hash-3');
var_dump($bitcoin);
echo '</pre>';
