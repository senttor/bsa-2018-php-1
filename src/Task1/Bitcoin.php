<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 09.05.2018
 * Time: 15:30
 */

namespace Cryptocurrency\Task1;


class Bitcoin implements Currency
{
    private $name = 'Bitcoin';
    private $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
    public $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getDailyPrice(): float{
        return $this->price;
    }

    public function getLogoUrl(): string {
        return $this->logo;
    }
}
