<?php

namespace App\Controller;

use App\Classes\Blockchain;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{
    private $bitcoin;

    public function __construct()
    {
        $this->bitcoin = new Blockchain();
    }

    public function blockchain(): JsonResponse
    {
        return new JsonResponse($this->bitcoin);
    }

    public function transaction(Request $request): JsonResponse
    {
        $amount = $request->request->get('amount', 0);
        $sender = $request->request->get('sender', '');
        $recipient = $request->request->get('recipient', '');

        $blockIndex = $this->bitcoin->createNewTransaction($amount, $sender, $recipient);

        return new JsonResponse("Transaction will be added in block $blockIndex.");
    }
}
