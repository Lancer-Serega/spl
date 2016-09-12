<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 1:01
 */
declare(strict_types = 1);

namespace SPL;

class Iterator implements \Traversable
{
    private $var = [];

    public function __construct(array $array)
    {
        if(is_array($array)) {
            $this->var = $array;
        }
    }

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
        echo 'rewinding', "\n";
        reset($this->var);
    }

    public function next() : array
    {
        $var = next($this->var);
        echo 'next: ', $var, "\n";

        return $var;
    }

    public function valid() : bool
    {
        $var = $this->current() !== false;
        echo 'valid: ', $var, "\n";

        return $var;
    }

    private function current() : array
    {
        $var = current($this->var);
        echo 'current: ', $var, "\n";

        return $var;
    }

    public function key() : array
    {
        $var = key($this->var);
        echo 'key: ', $var, "\n";

        return $var;
    }
}