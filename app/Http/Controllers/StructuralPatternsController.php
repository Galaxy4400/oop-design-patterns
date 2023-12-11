<?php

namespace App\Http\Controllers;

use App\DesignPaterns\Structural\Adapter\AppNotification;
use App\DesignPaterns\Structural\Adapter\Classes\EmailNotification;
use App\DesignPaterns\Structural\Adapter\Classes\SlackNotification;
use App\DesignPaterns\Structural\Adapter\Service\SlackApi;
use App\DesignPaterns\Structural\Facade\FacadeClass\Computer;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;


/**
 * Структурный шаблон проектирования - предоставляет абстракции для организации классов и объектов в более крупные структуры.
 */
class StructuralPatternsController extends Controller
{

	public function adapter(): View|Factory
	{
		$emailNotification = new EmailNotification('developers@example.com');
		AppNotification::note($emailNotification);

		Debugbar::addMessage('');

		$slackApi = new SlackApi("example.com", "XXXXXXXX");
		$slackNotification = new SlackNotification($slackApi, 'Example.com Developers');
		AppNotification::note($slackNotification);
		
		return view('welcome');
	}

	
	public function facade(): View|Factory
	{
		$computer = new Computer();

		$computer->lounch();

		return view('welcome');
	}

}
