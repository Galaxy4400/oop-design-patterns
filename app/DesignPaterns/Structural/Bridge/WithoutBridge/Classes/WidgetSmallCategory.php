<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Category;


class WidgetSmallCategory extends WidgetAbstract
{

	public function run(Category $category): void
	{
		$viewData = $this->getRealizationLogic($category);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Category $category): array
	{
		$id = $category->id;
		$smallTitle = str($category->title)->limit(5)->value();
		$description = $category->description;

		return compact('id', 'smallTitle', 'description');
	}

}
