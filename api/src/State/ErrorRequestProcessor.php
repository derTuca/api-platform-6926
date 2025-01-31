<?php

namespace App\State;

use App\ApiResource\DemoThrownError;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Entity\LoginRequest;

/**
 * @implements ProcessorInterface<LoginRequest, LoginRequest|void>
 */
final class ErrorRequestProcessor implements ProcessorInterface
{
    /**
     * @param LoginRequest $data
     * @return LoginRequest|void
     */
    public function process($data, Operation $operation, array $uriVariables = [], array $context = []): mixed
    {
        throw new DemoThrownError();
    }
}
