<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 4:14
 */
declare(strict_types = 1);

namespace SPL;

require_once('MyIterator.php');


class MyShedule implements \IteratorAggregate
{
    private $items = [];

    public function getIterator() : MyIterator
    {
        asort($this->items);

        return new MyIterator($this->items);
    }

    public function add($key, $value)
    {
        $this->items[$key] = $value;
    }
}