<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 1:01
 */

namespace SPL;

/**
 * Class MyIterator
 *
 * @package SPL
 */
class MyIterator implements \Iterator
{
    /**
     * @var array
     */
    private $var = [];
    private $count = 0;

    /**
     * MyIterator constructor.
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->var = $array;
        $this->count = count($array);
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return json_encode($this->var);
        /*        $log_a = "";
                foreach($data as $key => $value) {
                    if(is_array($value)) {
                        $log_a .= "[" . $key . "] => (" . array2string($value) . ") \n";
                    }
                    else {
                        $log_a .= "[" . $key . "] => " . $value . "\n";
                    }
                }

                return $log_a;*/
    }

    public function rewind()
    {
        echo 'Rewinding', "\n";
        reset($this->var);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->var);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return next($this->var);
    }

    /**
     * @return bool
     */
    public function valid() : bool
    {
        return $this->current() !== 0;
    }

    /**
     * @return false|string
     */
    public function current()
    {

        $this->count--;

        return date('d-m-Y', current($this->var));
    }
}