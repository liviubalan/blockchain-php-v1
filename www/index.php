<?php

error_reporting(-1);
ini_set('display_errors', '1');

require_once './blockchain.php';

$bitcoin = new Blockchain();

echo '<pre>';

$previousBlockHash = 'hash-1';
$currentBlockData = [
    [
        'amount' => 10,
        'sender' => 'sender-1',
        'recipient' => 'recipient-1',
    ],
    [
        'amount' => 30,
        'sender' => 'sender-2',
        'recipient' => 'recipient-2',
    ],
    [
        'amount' => 200,
        'sender' => 'sender-3',
        'recipient' => 'recipient-3',
    ],
];

$nonce = $bitcoin->proofOfWork($previousBlockHash, $currentBlockData); // number of iterations to find the nonce
var_dump($nonce);
var_dump($bitcoin->hashBlock($previousBlockHash, $currentBlockData, $nonce)); // verify the result
echo '</pre>';
