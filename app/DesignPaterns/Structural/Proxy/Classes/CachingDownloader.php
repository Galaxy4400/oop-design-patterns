<?php

namespace App\DesignPaterns\Structural\Proxy\Classes;

use App\DesignPaterns\Structural\Proxy\Contracts\DownloaderContract;
use Barryvdh\Debugbar\Facades\Debugbar;

class CachingDownloader implements DownloaderContract
{
	private SimpleDownloader $downloader;

	private array $cache = [];

	public function __construct(?SimpleDownloader $downloader = null)
	{
		$this->downloader = $downloader ?: new SimpleDownloader();
	}


	public function download(string $url): string
	{
		if (!isset($this->cache[$url])) {
			Debugbar::addMessage('В кеше не найдено! Запись в кешь');
			
			$this->cache[$url] = $this->downloader->download($url);
		} else {
			Debugbar::addMessage('Достаём данные из кеша');
		}

		return $this->cache[$url];
	}
	
}
