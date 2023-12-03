<?php

namespace App\Http\Controllers;

use App\DesignPaterns\Fundamental\Delegation\AppMessenger;
use Illuminate\Http\Request;

class DelegationController extends Controller
{
	public function __invoke(Request $request)
	{
		$messenger = new AppMessenger();
		dump($messenger->info());
		
		$messenger->toSms();
		dump($messenger->info());
		
		return view('welcome');
	}
}
