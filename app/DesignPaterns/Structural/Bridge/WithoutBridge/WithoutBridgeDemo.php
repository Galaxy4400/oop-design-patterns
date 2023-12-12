<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge;

use App\DesignPaterns\Structural\Bridge\Entities\Client;
use App\DesignPaterns\Structural\Bridge\Entities\Product;
use App\DesignPaterns\Structural\Bridge\Entities\Category;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetBigClient;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetBigProduct;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetBigCategory;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetSmallClient;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetMiddleClient;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetSmallProduct;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetMiddleProduct;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetSmallCategory;
use App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes\WidgetMiddleCategory;

class WithoutBridgeDemo
{
	public function run(): void
	{
		$product = new Product();
		(new WidgetBigProduct)->run($product);
		(new WidgetMiddleProduct)->run($product);
		(new WidgetSmallProduct)->run($product);
		
		$category = new Category();
		(new WidgetBigCategory)->run($category);
		(new WidgetMiddleCategory)->run($category);
		(new WidgetSmallCategory)->run($category);
		
		$client = new Client();
		(new WidgetBigClient)->run($client);
		(new WidgetMiddleClient)->run($client);
		(new WidgetSmallClient)->run($client);
	}
}
