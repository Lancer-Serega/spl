<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 6:19
 */

namespace SPL;

/**
 * Class NumberSquareRoot
 *
 * @package SPL
 */
class NumberSquareRoot implements \Iterator
{
    private $_cur;
    private $_obj;

    /**
     * NumberSquareRoot constructor.
     *
     * @param $obj
     */
    public function __construct($obj)
    {
        $this->_obj = $obj;
    }

    /**
     * @return float
     */
    public function current()
    {
        return sqrt($this->_cur);
    }

    public function next()
    {
        $this->_cur++;
    }

    /**
     * @return mixed
     */
    public function key()
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