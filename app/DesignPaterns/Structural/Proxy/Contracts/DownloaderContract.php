<?php

namespace App\DesignPaterns\Structural\Proxy\Contracts;

interface DownloaderContract
{
	public function download(string $url): string;
}
