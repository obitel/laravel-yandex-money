<?php

namespace obitel\Tests\LaravelYandexMoney\Facades;

use obitel\LaravelYandexMoney\YandexMoneyManager;
use obitel\LaravelYandexMoney\Facades\YandexMoney;
use obitel\Tests\LaravelYandexMoney\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class YandexMoneyTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'yandexmoney';
    }

    protected function getFacadeClass()
    {
        return YandexMoney::class;
    }

    protected function getFacadeRoot()
    {
        return YandexMoneyManager::class;
    }
}
