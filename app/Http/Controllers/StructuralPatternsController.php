<?php

namespace App\Http\Controllers;

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
		Debugbar::addMessage('adapter');
		
		return view('welcome');
	}

	
	public function facade(): View|Factory
	{
		Debugbar::addMessage('facade');
		
		return view('welcome');
	}

}
