<?php

namespace App\DesignPaterns\Fundamental\Delegation\Contracts;

interface MessengerContract
{
	public function setSender(string $value): self;

	public function setRecipient(string $value): self;

	public function setMessage(string $value): self;

	public function send(): bool;
}
