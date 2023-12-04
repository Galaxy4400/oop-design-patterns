<?php

namespace App\DesignPaterns\Fundamental\EventChannel;

use App\DesignPaterns\Fundamental\EventChannel\Classes\Telegramm;
use App\DesignPaterns\Fundamental\EventChannel\Classes\TelegrammUser;
use App\DesignPaterns\Fundamental\EventChannel\Classes\TelegrammGroup;

class EventChanaleProgramm
{
	public function run()
	{
		$telegramm = new Telegramm();

		$soloviovGroup = new TelegrammGroup('news', $telegramm);
		$rybarGroup = new TelegrammGroup('news', $telegramm);
		$katyaGroup = new TelegrammGroup('tarro', $telegramm);

		$userA = new TelegrammUser('User A');
		$userB = new TelegrammUser('User B');
		$userC = new TelegrammUser('User C');
		$userD = new TelegrammUser('User D');

		$telegramm->subscribe('news', $userA);
		$telegramm->subscribe('tarro', $userB);
		$telegramm->subscribe('religion', $userC);
		$telegramm->subscribe('tarro', $userC);
		$telegramm->subscribe('news', $userD);
		$telegramm->subscribe('religion', $userD);

		$soloviovGroup->publish("Новая новость Соловьева");
		$rybarGroup->publish("Новая новость Рыбаря");
		$katyaGroup->publish("Пост от Кати");
	}
}
