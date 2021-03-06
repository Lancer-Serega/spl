<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 21:15
 */

namespace SPL;

/**
 * Class Registry
 *
 * @package SPL
 */
class Registry implements \ArrayAccess
{
    /**
     * @var array
     */
    private $props = [];

    /**
     * @return array
     */
    public function getProps(): array
    {
        return $this->props;
    }

    /**
     * @param array $props
     *
     * @return Registry
     */
    public function setProps(array $props): Registry
    {
        $this->props = $props;

        return $this;
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->props[$offset]);
    }

    /**
     * @param mixed $offset
     *
     * @return array|mixed|null
     */
    public function offsetGet($offset)
    {
        if(!isset($this->props[$offset])) {
            return null;
        }

        return $this->props[$offset];
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return bool
     */
    public function offsetSet($offset, $value): bool
    {
        $this->props[$offset] = $value;

        return true;
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetUnset($offset): bool
    {
        unset($this->props[$offset]);

        return true;
    }
}