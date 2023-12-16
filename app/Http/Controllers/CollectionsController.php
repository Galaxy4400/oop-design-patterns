<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Barryvdh\Debugbar\Facades\Debugbar;


class CollectionsController extends Controller
{

	public function collect(): View|Factory
	{
		$array = ['taylor', 'abigail', null];

		Debugbar::addMessage('Исходный массив:');
		Debugbar::addMessage($array);
		
		$collection = collect($array);
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($collection);

		return view('welcome');
	}


	public function all(): View|Factory
	{
		$collection = collect(['taylor', 'abigail', null]);

		Debugbar::addMessage('Исходная коллекция:');
		Debugbar::addMessage($collection);
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($collection->all());

		return view('welcome');
	}


	public function average(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

		Debugbar::addMessage('Исходная коллекция:' . (string) $collection);
		Debugbar::addMessage($collection);
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($collection->avg());

		return view('welcome');
	}


	public function chunk(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]);

		Debugbar::addMessage('Исходная коллекция:' . (string) $collection);
		Debugbar::addMessage($collection);
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($collection->chunk(6));

		return view('welcome');
	}


	public function chunkWhile(): View|Factory
	{
		$collection = collect(str_split('AABBCCCD'));

		Debugbar::addMessage('Исходная коллекция:');
		Debugbar::addMessage($collection);
		
		$result = $collection->chunkWhile(function (string $value, int $key, Collection $chunk) {
			return $value === $chunk->last();
		});

		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($result->toArray());

		return view('welcome');
	}


	public function collapse(): View|Factory
	{
		$collection = collect([ [1, 2, 3], [4, 5, 6], [7, 8, 9] ]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->collapse();
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function combine(): View|Factory
	{
		$collectionKeys = collect(['name', 'age']);
		$collectionValues = collect(['George', 29]);

		Debugbar::addMessage('Исходная коллекция ключей: ' . (string) $collectionKeys);
		Debugbar::addMessage('Исходная коллекция значений: ' . (string) $collectionValues);
		
		$result = $collectionKeys->combine($collectionValues);

		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function contact(): View|Factory
	{
		$collection = collect(['John Doe']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function contains(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->contains(fn (int $value) => $value > 5);
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function doesntContain(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->doesntContain(fn (int $value) => $value < 5);
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function count(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->count();
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function countBy(): View|Factory
	{
		$collection = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com', 'jane@yandex.ru']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->countBy(fn (string $email) => str($email)->after('@')->value());
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function crossJoin(): View|Factory
	{
		$collection = collect([1, 2, 3]);
		$anotherCollection = collect(['A', 'B', 'C']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage('Дополнительная коллекция: ' . (string) $anotherCollection);

		$result = $collection->crossJoin($anotherCollection);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function diff(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);
		$anotherCollection = collect([2, 4, 6, 8]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage('Дополнительная коллекция: ' . (string) $anotherCollection);

		$result = $collection->diff($anotherCollection);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function dot(): View|Factory
	{
		$collection = collect(config('broadcasting'));

		Debugbar::addMessage('Исходная коллекция:');
		Debugbar::addMessage($collection);

		$result = $collection->dot();
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function duplicates(): View|Factory
	{
		$collection = collect(['a', 'b', 'a', 'c', 'b']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->duplicates();
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function each(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);
		
		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->each(fn (int $value) => Debugbar::addMessage($value . ' + 1 = ' . $value + 1));
		
		return view('welcome');
	}


	public function ensure(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->ensure('int');

		Debugbar::addMessage('Результат:');
		Debugbar::addMessage('ensure: true');
		
		return view('welcome');
	}


	public function every(): View|Factory
	{
		$collection = collect([2, 3, 4]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->every(fn (int $value) => $value % 2 === 0);

		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}

}