<?php

namespace Tests\Unit;

use App\DesignPaterns\Fundamental\PropertyContainer\ObjectClass;
use PHPUnit\Framework\TestCase;

class PropertyContainerTest extends TestCase
{
	public function test_property_container_all_success(): void
	{
		$object = new ObjectClass();

		$object->addProperty('prop_1', 'string');
		$object->addProperty('prop_2', 123);

		$this->assertEquals('string', $object->getProperty('prop_1'));
		$this->assertEquals(123, $object->getProperty('prop_2'));
		$this->assertEquals(['prop_1', 'prop_2'], $object->getPropertyNames());

		$object->setProperty('prop_1', 'other');

		$this->assertNotEquals('string', $object->getProperty('prop_1'));

		$object->removeProperty('prop_1');

		$this->assertNull($object->getProperty('prop_1'));

		$object->removeProperties();

		$this->assertCount(0, $object->getPropertyNames());
	}
}
