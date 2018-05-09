<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 09.05.2018
 * Time: 15:31
 */

namespace Cryptocurrency\Task1;


class Ethereum implements Currency
{
    public $name = 'Ethereum';
    public $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';
    public $price ;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->price;
    }

    public function getLogoUrl(): string {
        return $this->logo;
    }
}