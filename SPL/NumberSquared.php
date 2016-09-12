<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 5:27
 */
declare(strict_types = 1);

namespace SPL;

class NumberSquared implements \Iterator
{
    private $_cur;
    private $_obj;

    public function __construct($obj)
    {
        $this->_obj = $obj;
    }

    public function current()
    {
        return pow($this->_cur, 2);
    }

    public function next()
    {
        $this->_cur++;
    }

    public function key()
    {
        return $this->_cur;
    }

    public function valid()
    {
        return $this->_cur <= $this->_obj->getEnd();
    }

    public function rewind()
    {
        $this->_cur = $this->_obj->getStart();
    }
}