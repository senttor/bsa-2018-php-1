<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $market->getCurrencies();
        $str ='';
     foreach ($market->getCurrencies() as $item) {

         $str .= '<ul> 
             <li><img src="'.$item->getLogoUrl().'"></li>
             <li>'.$item->getName() : $item->getDailyPrice().'</li>
                </ul>';


     }
     return $str;


    }
}
