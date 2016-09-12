<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 1:01
 */
declare(strict_types = 1);

class MyIterator implements \Iterator
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
        echo 'Rewinding', "\n";
        reset($this->var);
    }

    public function next()
    {
        $var = next($this->var);
        echo 'Next: ', $var, "\n\n";

        return $var;
    }

    public function valid() : bool
    {
        $var = $this->current() !== false;
        echo 'Valid: ', $var, "\n\n";

        return $var;
    }

    public function current()
    {
        $var = current($this->var);
        echo 'Current: ', $var, "\n";

        return $var;
    }

    public function key() : int
    {
        $var = key($this->var);
        echo 'Key: ', $var, "\n";

        return $var;
    }
}