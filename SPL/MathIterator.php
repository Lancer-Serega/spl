<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 6:28
 */

namespace SPL;

require_once __DIR__ . '/NumberSquared.php';
require_once __DIR__ . '/NumberSquareRoot.php';

class MathIterator implements \IteratorAggregate
{
    public $_start;
    public $_end;
    public $_action;

    /**
     * @param int $start
     *
     */
    public function setStart($start): MathIterator
    {
        $this->_start = $start;

        return $this;
    }

    /**
     * @param int $end
     */
    public function setEnd($end): MathIterator
    {
        $this->_end = $end;

        return $this;
    }

    /**
     * @param string $action
     */
    public function setAction($action): MathIterator
    {
        $this->_action = $action;

        return $this;
    }

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

/*    public function __construct($_start, $_end, $_action)
    {
        $this->_start = $_start;
        $this->_end = $_end;
        $this->_action = $_action;
    }*/

    public function getStart()
    {
        return $this->_start;
    }

    public function getEnd()
    {
        return $this->_end;
    }
}