<?php

namespace UnknowSk\Test\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use UnknowSk\Test\TestServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TestServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-test_table.php.stub';
        $migration->up();
        */
    }
}
