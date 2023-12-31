<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPaterns\Structural\Adapter\AppNotification;
use App\DesignPaterns\Structural\Adapter\Service\SlackApi;
use App\DesignPaterns\Structural\Proxy\ProxyDownloaderApp;
use App\DesignPaterns\Structural\Decorator\Classes\TextInput;
use App\DesignPaterns\Structural\Facade\FacadeClass\Computer;
use App\DesignPaterns\Structural\Bridge\WithBridge\BridgeDemo;
use App\DesignPaterns\Structural\Composite\OrderPriceComposite;
use App\DesignPaterns\Structural\Decorator\TextFormatDecorator;
use App\DesignPaterns\Structural\Decorator\Classes\MarkdownFormat;
use App\DesignPaterns\Structural\Adapter\Classes\EmailNotification;
use App\DesignPaterns\Structural\Adapter\Classes\SlackNotification;
use App\DesignPaterns\Structural\Decorator\Classes\PlainTextFilter;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\WithoutBridgeDemo;
use App\DesignPaterns\Structural\Decorator\Classes\DangerousHTMLTagsFilter;
use App\DesignPaterns\Structural\Proxy\Classes\CachingDownloader;
use App\DesignPaterns\Structural\Proxy\Classes\SimpleDownloader;

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


	public function bridge(): View|Factory
	{
		(new WithoutBridgeDemo())->run();
		(new BridgeDemo())->run();

		return view('welcome');
	}


	public function composite(): View|Factory
	{
		(new OrderPriceComposite())->run();

		return view('welcome');
	}


	public function decorator(): View|Factory
	{
		$dangerousComment = <<<HERE
			Hello! Nice blog post!
			Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
			<script src="http://www.iwillhackyou.com/script.js">
				performXSSAttack();
			</script>
			HERE;

		$naiveInput = new TextInput();
		$plain = new PlainTextFilter($naiveInput);
		$markdown = new MarkdownFormat($plain);
		$filteredInput = new DangerousHTMLTagsFilter($markdown);
		
		(new TextFormatDecorator())->run($naiveInput, $dangerousComment);
		(new TextFormatDecorator())->run($plain, $dangerousComment);
		(new TextFormatDecorator())->run($markdown, $dangerousComment);
		(new TextFormatDecorator())->run($filteredInput, $dangerousComment);

		return view('welcome');
	}
	
	
	public function proxy(): View|Factory
	{
		(new ProxyDownloaderApp())->run(new SimpleDownloader());

		Debugbar::addMessage('');

		(new ProxyDownloaderApp())->run(new CachingDownloader());
		
		return view('welcome');
	}

}

