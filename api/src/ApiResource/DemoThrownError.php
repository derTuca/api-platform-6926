<?php

namespace App\ApiResource;
use ApiPlatform\Metadata\ErrorResource;
use ApiPlatform\Metadata\Exception\ProblemExceptionInterface;

#[ErrorResource]
class DemoThrownError extends \Exception implements ProblemExceptionInterface
{
    public function getType(): string
    {
        return '/errors/demo-error';
    }
    public function getTitle(): ?string
    {
        return 'Demo error';
    }
    public function getStatus(): ?int
    {
        return 400;
    }
    public function getDetail(): ?string
    {
        return 'This should be returned in the response.';
    }
    public function getInstance(): ?string
    {
        return null;
    }
}
