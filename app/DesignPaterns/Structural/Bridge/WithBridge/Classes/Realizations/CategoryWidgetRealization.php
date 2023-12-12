<?php

namespace App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations;

use App\DesignPaterns\Structural\Bridge\Entities\Category;
use App\DesignPaterns\Structural\Bridge\WithBridge\Classes\Realizations\Contracts\WidgetRealizationContract;


class CategoryWidgetRealization implements WidgetRealizationContract
{

	public function __construct(
		private Category $category,
	) {
	}


	public function getId(): int
	{
		return $this->category->id;
	}


	public function getTitle(): string
	{
		return $this->category->title;
	}


	public function getDescription(): string
	{
		return $this->category->description;
	}

}
