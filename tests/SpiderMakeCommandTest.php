<?php

declare(strict_types=1);

/**
 * Copyright (c) 2024 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/roach-php/laravel
 */

namespace RoachPHP\Laravel\Tests;

use Illuminate\Support\Facades\File;

/**
 * @internal
 */
final class SpiderMakeCommandTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['roach.default_spider_namespace' => 'App\Spiders\Test']);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory(__DIR__.'/Fixtures/Spiders');

        parent::tearDown();
    }

    public function test_create_new_spider_class(): void
    {
        $this->artisan('roach:spider', ['name' => 'ExampleSpider']);

        $generatedPath = app_path('Spiders/Test/ExampleSpider.php');
        $expectedPath = __DIR__.'/__snapshots__/files/SpiderMakeCommandTest__testCreateNewSpiderClass__1.php';

        self::assertFileExists($generatedPath);
        self::assertStringEqualsFile($expectedPath, File::get($generatedPath));
    }
}
