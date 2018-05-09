<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public $arr = [ '🚀', '🚃', '🚄', '🚅', '🚇' ];

    public function generate(): \Generator
    {
foreach ($this->arr as $key) {
    yield $key;

}

    }
}