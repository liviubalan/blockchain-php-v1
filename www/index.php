<?php

error_reporting(-1);
ini_set('display_errors', '1');

require_once './blockchain.php';

$bitcoin = new Blockchain();

echo '<pre>';

$bitcoin->createNewBlock(1, 'hash-0', 'hash-1');

$bitcoin->createNewTransaction(100, 'sender-1', 'recipient-1');
$bitcoin->createNewBlock(2, 'hash-1', 'hash-2'); // mine a new block

$bitcoin->createNewTransaction(50, 'sender-2', 'recipient-2');
$bitcoin->createNewTransaction(300, 'sender-3', 'recipient-3');
$bitcoin->createNewTransaction(2000, 'sender-4', 'recipient-4');
$bitcoin->createNewBlock(3, 'hash-2', 'hash-3'); // mine a new block

var_dump($bitcoin);
echo '</pre>';
