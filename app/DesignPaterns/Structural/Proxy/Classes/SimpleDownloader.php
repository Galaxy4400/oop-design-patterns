<?php

namespace App\DesignPaterns\Structural\Proxy\Classes;

use App\DesignPaterns\Structural\Proxy\Contracts\DownloaderContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class SimpleDownloader implements DownloaderContract
{
	public function download(string $url): string
	{
		Debugbar::addMessage('Скачивание файла с помощью ' . class_basename(static::class));
		
		$result = file_get_contents($url);

		Debugbar::addMessage('Скаченные байты: ' . strlen($result));

		return $result;
	}
}
