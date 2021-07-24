<?php

namespace App\Controller;

use App\Classes\Blockchain;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{
    private $blockchain;

    public function blockchain()
    {
        $this->blockchain = new Blockchain();
        var_dump($this->blockchain);

        die('tst');
    }
}
