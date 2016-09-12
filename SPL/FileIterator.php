<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 21:56
 */

namespace SPL;

/**
 * Class FileIterator
 *
 * @package SPL
 */
class FileIterator implements \Iterator
{
    /**
     * @var $data
     */
    private $data;
    private $key;
    private $file;

    /**
     * FileIterator constructor.
     *
     * @param $file resource
     *
     * @throws \Exception
     */
    public function __construct($file)
    {
        $this->file = fopen($file, "r");

        if(!$this->file) {
            throw new \Exception('File Not Found!');
        }
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->data;
    }

    public function next()
    {
        $this->data = fgets($this->file);
        $this->key++;
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return false !== $this->data;
    }

    public function rewind()
    {
        fseek($this->file, 0);
        $this->data = fgets($this->file);
        $this->key = 0;
    }
}