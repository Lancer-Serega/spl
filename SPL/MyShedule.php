<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 4:14
 */

namespace SPL;

require_once __DIR__ . '/MyIterator.php';


/**
 * Class MyShedule
 *
 * @package SPL
 */
class MyShedule implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @return MyIterator
     */
    public function getIterator() : MyIterator
    {
        asort($this->items);

        return new MyIterator($this->items);
    }

    /**
     * @param $key
     * @param $value
     */
    public function add($key, $value)
    {
        $this->items[$key] = $value;
    }
}