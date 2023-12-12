<?php

namespace App\DesignPaterns\Structural\Bridge\WithoutBridge\Classes;

use App\DesignPaterns\Structural\Bridge\Entities\Category;


class WidgetMiddleCategory extends WidgetAbstract
{

	public function run(Category $category): void
	{
		$viewData = $this->getRealizationLogic($category);

		$this->viewLogic($viewData);
	}


	private function getRealizationLogic(Category $category): array
	{
		$id = $category->id;
		$middleTitle = $category->id . '->' . $category->title;
		$description = $category->description;

		return compact('id', 'middleTitle', 'description');
	}

}
