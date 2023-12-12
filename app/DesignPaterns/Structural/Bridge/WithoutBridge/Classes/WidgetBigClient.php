<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Category;
use App\DesignPaterns\Structural\Bridge\Entities\Client;

class WidgetBigClient extends WidgetAbstract
{

	public function run(Client $client): void
	{
		$viewData = $this->getRealizationLogic($client);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Client $client): array
	{
		$id = $client->id;
		$fullName = $client->id . '::::' . $client->name;
		$biography = $client->biography;

		return compact('id', 'fullName', 'biography');
	}

}
