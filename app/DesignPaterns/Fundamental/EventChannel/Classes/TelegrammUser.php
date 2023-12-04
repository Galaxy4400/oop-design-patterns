<?php

namespace App\DesignPaterns\Fundamental\EventChannel\Classes;

use App\DesignPaterns\Fundamental\EventChannel\Contracts\SubscriberContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class TelegrammUser implements SubscriberContract
{
	private string $name;

	
	public function __construct(string $name)
	{
		$this->name = $name;
	}


	public function getName(): string
	{
		return $this->name;
	}


	public function notify(string $data): void
	{
		Debugbar::addMessage("Подписчик {$this->name} получил данные: {$data}");
	}


}
