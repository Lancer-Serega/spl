<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 6:28
 */
declare(strict_types = 1);

namespace SPL;

require_once ('NumberSquared.php');
require_once ('NumberSquareRoot.php');

class MathIterator implements \IteratorAggregate
{
    public $_start;
    public $_end;
    public $_action;

    public function getIterator()
    {
        switch($this->_action){
            case 'pow':
                return new NumberSquared($this);
            break;

            case 'sqrt':
                return new NumberSquareRoot($this);
            break;

            default:
                throw new \Exception('Missing 3th argiment "action" (pow | sqrt) -> ' . $this->_action);
        }
    }

    public function __construct($_start, $_end, $_action)
    {
        $this->_start = $_start;
        $this->_end = $_end;
        $this->_action = $_action;
    }

    public function getStart()
    {
        return $this->_start;
    }

    public function getEnd()
    {
        return $this->_end;
    }
}