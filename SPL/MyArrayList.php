<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 13.09.2016
 * Time: 3:00
 */

namespace SPL;

/**
 * Class MyArrayList
 *
 * @package SPL
 */
class MyArrayList extends \RecursiveIteratorIterator
{
    public function beginChildren()
    {
        parent::beginChildren();

        echo '<ul>', "\n";
    }

    public function endChildren()
    {
        parent::endChildren();

        echo '</ul>', "\n";
    }
}