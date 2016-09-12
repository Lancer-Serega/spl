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


/**
 * Class MathIterator
 *
 * @package SPL
 */
class MathIterator implements \IteratorAggregate
{
    public $_start;
    public $_end;
    public $_action;

    /**
     * @param $start
     *
     * @return MathIterator
     */
    public function setStart($start): MathIterator
    {
        $this->_start = $start;

        return $this;
    }

    /**
     * @param $end
     *
     * @return MathIterator
     */
    public function setEnd($end): MathIterator
    {
        $this->_end = $end;

        return $this;
    }

    /**
     * @param $action
     *
     * @return MathIterator
     */
    public function setAction($action): MathIterator
    {
        $this->_action = $action;

        return $this;
    }

    /**
     * @return NumberSquared|NumberSquareRoot
     * @throws \Exception
     */
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
    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->_start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->_end;
    }
}