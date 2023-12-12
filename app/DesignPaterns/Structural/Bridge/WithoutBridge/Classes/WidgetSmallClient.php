<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Client;


class WidgetSmallClient extends WidgetAbstract
{

	public function run(Client $client): void
	{
		$viewData = $this->getRealizationLogic($client);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Client $client): array
	{
		$id = $client->id;
		$smallName = str($client->name)->limit(5)->value();
		$biography = $client->biography;

		return compact('id', 'smallName', 'biography');
	}

}
