<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 5:27
 */

namespace SPL;

/**
 * Class NumberSquared
 *
 * @package SPL
 */
class NumberSquared implements \Iterator
{
    private $_cur;
    private $_obj;

    /**
     * NumberSquared constructor.
     *
     * @param $obj
     */
    public function __construct($obj)
    {
        $this->_obj = $obj;
    }

    /**
     * @return number
     */
    public function current(): number
    {
        return pow($this->_cur, 2);
    }

    public function next()
    {
        $this->_cur++;
    }

    /**
     * @return mixed
     */
    public function key(): mixed
    {
        return $this->_cur;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->_cur <= $this->_obj->getEnd();
    }

    public function rewind()
    {
        $this->_cur = $this->_obj->getStart();
    }
}