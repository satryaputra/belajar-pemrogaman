<?php

namespace Tests\Feature;

use App\Data\Foo;
use App\Data\Bar;
use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainerTest extends TestCase
{
    public function testDependecy() {
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertEquals("Foo", $foo1->foo());
        self::assertEquals("Foo", $foo2->foo());

        self::assertNotSame($foo1, $foo2);
    }

    public function testBind() {
        $this->app->bind(Person::class, function($app) {
            return new Person("Satrya", "Putra");
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Satrya", $person1->firstName);
        self::assertEquals("Satrya", $person2->firstName);

        self::assertNotSame($person1, $person2);
    }
    
    public function testSingleton() {
        $this->app->singleton(Person::class, function($app) {
            return new Person("Satrya", "Putra");
        });
        
        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);
        
        self::assertEquals("Satrya", $person1->firstName);
        self::assertEquals("Satrya", $person2->firstName);

        self::assertSame($person1, $person2);
    }
    
    public function testInstance() {
        $person = new Person("Satrya", "Putra");
        $this->app->instance(Person::class, $person);
        
        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Satrya", $person1->firstName);
        self::assertEquals("Satrya", $person2->firstName);
        
        self::assertSame($person, $person1);
        self::assertSame($person1, $person2);
    }

    public function testDependecyInjection() {
        $this->app->singleton(Foo::class, function($app) {
            return new Foo();
        });

        $foo = $this->app->make(Foo::class);
        $bar = $this->app->make(Bar::class);

        self::assertEquals("Foo and Bar", $bar->bar());
        self::assertSame($foo, $bar->foo);
    }
}
