<?php

namespace App\DesignPaterns\Structural\Proxy;

use App\DesignPaterns\Structural\Proxy\Contracts\DownloaderContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class ProxyDownloaderApp
{
	public function run(DownloaderContract $downloader): void
	{
		Debugbar::addMessage('Скачиваем контент первый раз');
		
		$result = $downloader->download('https://laravel.com/img/logotype.min.svg');
		
		Debugbar::addMessage('Скачиваем контент второй раз');
		
		$result = $downloader->download('https://laravel.com/img/logotype.min.svg');
	}
}
