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


	public function except(): View|Factory
	{
		$collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->except('price', 'discount');

		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function filter(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->filter(function (int $value) {
			return $value > 3;
		});

		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function first(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->first(function (int $value) {
			return $value > 3;
		});

		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function firstWhere(): View|Factory
	{
		$collection = collect([
			['name' => 'Regena', 'age' => null],
			['name' => 'Linda', 'age' => 14],
			['name' => 'Diego', 'age' => 23],
			['name' => 'Linda', 'age' => 84],
		]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->firstWhere('age', '>', 50);

		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function flatMap(): View|Factory
	{
		$collection = collect([
			['name' => 'Sally'],
			['school' => 'Arkansas'],
			['age' => 28]
		]);

		Debugbar::addMessage('Исходная коллекция: ');
		Debugbar::addMessage($collection);

		$result = $collection->flatMap(function (array $values) {
			return array_map('strtoupper', $values);
		});

		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function flatten(): View|Factory
	{
		$collection = collect(config('broadcasting'));

		Debugbar::addMessage('Исходная коллекция:');
		Debugbar::addMessage($collection);

		$result = $collection->flatten();
		
		Debugbar::addMessage('Результат:');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function flip(): View|Factory
	{
		$collection = collect(['name' => 1, 'framework' => 2]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->flip();
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function forget(): View|Factory
	{
		$collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$collection->forget('price');
		
		Debugbar::addMessage('Результат: ' . (string) $collection);
		Debugbar::addMessage($collection);
		
		return view('welcome');
	}


	public function forPage(): View|Factory
	{
		$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->forPage(2, 3);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function get(): View|Factory
	{
		$collection = collect(['name' => 'taylor', 'framework' => 'laravel']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->get('name');
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function groupBy(): View|Factory
	{
		$collection = collect([
			['account_id' => 'account-x10', 'product' => 'Chair'],
			['account_id' => 'account-x10', 'product' => 'Bookcase'],
			['account_id' => 'account-x11', 'product' => 'Desk'],
		]);

		Debugbar::addMessage('Исходная коллекция: ');
		Debugbar::addMessage($collection);

		$result = $collection->groupBy('account_id');
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function has(): View|Factory
	{
		$collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->has('product');
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function hasAny(): View|Factory
	{
		$collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->hasAny(['product', 'price']);
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function implode(): View|Factory
	{
		$collection = collect([
			['account_id' => 1, 'product' => 'Desk'],
			['account_id' => 2, 'product' => 'Chair'],
		]);

		Debugbar::addMessage('Исходная коллекция: ');
		Debugbar::addMessage($collection);

		$result = $collection->implode('product', ', ');
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function intersect(): View|Factory
	{
		$collection = collect(['Desk', 'Sofa', 'Chair']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->intersect(['Desk', 'Chair', 'Bookcase']);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function intersectAssoc(): View|Factory
	{
		$collection = collect([
			'color' => 'red',
			'size' => 'M',
			'material' => 'cotton',
		]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->intersectAssoc([
			'color' => 'blue',
			'size' => 'M',
			'material' => 'polyester',
		]);
		
		Debugbar::addMessage('Результат: ' . (string) $result);
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function isEmpty(): View|Factory
	{
		$collection = collect([]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->isEmpty();
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function isNotEmpty(): View|Factory
	{
		$collection = collect([]);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->isNotEmpty();
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}


	public function join(): View|Factory
	{
		$collection = collect(['a', 'b', 'c']);

		Debugbar::addMessage('Исходная коллекция: ' . (string) $collection);
		Debugbar::addMessage($collection);

		$result = $collection->join('!', '?');
		
		Debugbar::addMessage('Результат: ');
		Debugbar::addMessage($result);
		
		return view('welcome');
	}

}