<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;



use function Composer\Autoload\includeFile;

class CoinMarket
{

    protected $currencies = [];
    protected $maxPrice = [];

public function addCurrency(Currency $currency): void
    {
        array_push($this->currencies, $currency);
    }

    public function maxPrice(): float
    {
            # code...
        $result = array_reduce($this->currencies,function($carry, Currency $item)
        {
            return max($item->getDailyPrice(),$carry);
        });
        return $result;
 }

public function getCurrencies(): array
    {
        return $this->currencies;
    }
}

