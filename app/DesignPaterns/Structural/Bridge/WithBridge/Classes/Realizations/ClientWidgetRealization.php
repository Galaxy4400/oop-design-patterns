<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations;

use App\DesignPaterns\Structural\Bridge\Entities\Client;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class ClientWidgetRealization implements WidgetRealizationContract
{

	public function __construct(
		private Client $client,
	) {
	}


	public function getId(): int
	{
		return $this->client->id;
	}


	public function getTitle(): string
	{
		return $this->client->name;
	}


	public function getDescription(): string
	{
		return $this->client->biography;
	}

}
