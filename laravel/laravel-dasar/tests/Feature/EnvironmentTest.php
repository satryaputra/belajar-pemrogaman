<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{

    public function testGetEnv() {
        $youtube = env("YOUTUBE");

        self::assertEquals("Satrya Putra", $youtube);
    }

    public function testDefaultEnv() {
        $author = env("AUTHOR", "Putra");

        self::assertEquals("Putra", $author);
    }

}
