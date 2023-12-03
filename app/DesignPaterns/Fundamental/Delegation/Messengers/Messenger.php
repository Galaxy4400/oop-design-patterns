<?php

namespace App\DesignPaterns\Fundamental\Delegation\Messengers;

use App\DesignPaterns\Fundamental\Delegation\Contracts\MessengerContract;


abstract class Messenger implements MessengerContract
{
	protected string $sender;

	protected string $recipient;
	
	protected string $message;


	public function setSender(string $value): self
	{
		$this->sender = $value;
		
		return $this;
	}
	
	
	public function setRecipient(string $value): self
	{
		$this->recipient = $value;
		
		return $this;
	}
	
	
	public function setMessage(string $value): self
	{
		$this->message = $value;
		
		return $this;
	}
	
	
	public function send(): bool
	{
		return true;
	}
}

