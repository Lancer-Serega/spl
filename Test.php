<?php
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 3:33
 */
declare(strict_types = 1);

require_once 'MyIterator.php';

$values = [1,2,3];
$it = new MyIterator($values);

foreach($it as $key => $value) {
    echo $key, ': ', $value, "\n";
}