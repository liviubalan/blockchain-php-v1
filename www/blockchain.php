<?php

class Blockchain
{
    public array $chain = [];
    public array $newTransactions = [];

    public function createNewBlock(int $nonce, string $previousBlockHash, string $hash): array
    {
        $newBlock = [
            'index' => count($this->chain) + 1,
            'timestamp' => time(),
            'transactions' => $this->newTransactions,
            'nonce' => $nonce,
            'hash' => $hash,
            'previousBlockHash' => $previousBlockHash,
        ];

        $this->newTransactions = [];
        $this->chain[] = $newBlock;

        return $newBlock;
    }
}
