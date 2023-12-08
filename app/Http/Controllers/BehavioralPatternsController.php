<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;


/**
 * Поведенческий шаблон проектирования - это никей алгоритм который определяет поведение объектов в различных ситуациях, а так же позволяет обеспечить взаимодействие объектов без жесткой связи друг с другом.
 */
class BehavioralPatternsController extends Controller
{

	public function strategy(): View|Factory
	{
		Debugbar::addMessage('strategy');
		
		return view('welcome');
	}

}
