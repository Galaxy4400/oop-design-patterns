<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Client;


class WidgetMiddleClient extends WidgetAbstract
{

	public function run(Client $client): void
	{
		$viewData = $this->getRealizationLogic($client);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Client $client): array
	{
		$id = $client->id;
		$middleName = $client->id . '->' . $client->name;
		$biography = $client->biography;

		return compact('id', 'middleName', 'biography');
	}

}
