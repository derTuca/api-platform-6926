<?php

namespace App\Entity;

use ApiPlatform\Metadata\Post;
use App\ApiResource\DemoThrownError;
use App\State\ErrorRequestProcessor;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[Post(
	processor: ErrorRequestProcessor::class,
	denormalizationContext: ['groups' => ['login_request:write']],
	normalizationContext: ['groups' => ['login_request:read']],
	errors: [DemoThrownError::class]
	)]
class LoginRequest
{
	#[Assert\Uuid]
    #[Groups('login_request:read')]
	private ?string $id = null;

    public function getId(): ?string {
        return $this->id;
    }
}
