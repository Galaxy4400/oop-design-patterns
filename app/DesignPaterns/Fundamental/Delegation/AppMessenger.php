<?php

namespace App\DesignPaterns\Fundamental\Delegation;

use App\DesignPaterns\Fundamental\Delegation\Contracts\MessengerContract;
use App\DesignPaterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPaterns\Fundamental\Delegation\Messengers\Messenger;
use App\DesignPaterns\Fundamental\Delegation\Messengers\SmsMessenger;

class AppMessenger implements MessengerContract
{
	protected Messenger $messenger;


	public function __construct()
	{
		$this->toEmail();
	}


	public function info(): Messenger
	{
		return $this->messenger;
	}


	public function toEmail(): self
	{
		$this->messenger = new EmailMessenger();

		return $this;
	}
	
	
	public function toSms(): self
	{
		$this->messenger = new SmsMessenger();

		return $this;
	}


	public function setSender(string $value): self
	{
		$this->messenger->setSender($value);

		return $this;
	}
	
	
	public function setRecipient(string $value): self
	{
		$this->messenger->setRecipient($value);
		
		return $this;
	}
	
	
	public function setMessage(string $value): self
	{
		$this->messenger->setMessage($value);

		return $this;
	}
	
	
	public function send(): bool
	{
		return $this->messenger->send();
	}

}
