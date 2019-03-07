<?php

namespace obitel\Tests\LaravelYandexMoney;

use obitel\LaravelYandexMoney\YandexMoneyServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @package TkachevO\Tests\LaravelYandexMoney
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return YandexMoneyServiceProvider::class;
    }
}
