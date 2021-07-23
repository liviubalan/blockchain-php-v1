<?php

error_reporting(-1);
ini_set('display_errors', '1');

require_once './blockchain.php';

$bitcoin = new Blockchain();

echo '<pre>';

var_dump($bitcoin);

echo '</pre>';
