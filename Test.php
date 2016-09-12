<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Lancer
 * Date: 12.09.2016
 * Time: 3:33
 */

/**
 * Iterator
 */
#require_once __DIR__ . '/SPL/MyIterator.php';
#
#use SPL\MyIterator;
#
#$values = [1, 2, 3];
#$it = new MyIterator($values);
#
#foreach($it as $key => $value) {
#    echo $key, ': ', $value, "\n";
#}

/**
 * IteratorAggregate
 */
#require_once __DIR__ . '/SPL/MyShedule.php';
#
#use SPL\MyShedule;
#
#
#$shedule = new MyShedule();
#$shedule->add('PHP', mktime(0, 40, 15, 3, 20, 2015)); // 2 // PHP: 20-03-2015
#$shedule->add('XML', mktime(0, 18, 6, 1, 10, 2015)); // 1 // XML: 10-01-2015
#$shedule->add('Java', mktime(0, 32, 35, 5, 26, 2015)); // 3 // Java: 26-05-2015
#$shedule->add('MySQL', mktime(0, 20, 48, 11, 20, 2015)); // 6 // MySQL: 20-11-2015
#$shedule->add('JavaScript', mktime(0, 10, 59, 7, 12, 2015)); // 4 // JavaScript: 12-07-2015
#$shedule->add('HTML & CSS', mktime(0, 51, 12, 9, 28, 2015)); // 5 // HTML & CSS: 28-09-2015
#
#foreach($shedule as $key => $value) {
#    echo $key, ': ', $value, "\n";
#}

/**
 * Iterator
 * MathIterator implements IteratorAggregate
 */
#require_once __DIR__ . '/SPL/MathIterator.php';
#
#use SPL\MathIterator;
#
#
#$obj1 = new MathIterator(1, 10, 'pow');
#$obj2 = new MathIterator(1, 10, 'sqrt');
#$obj3 = new MathIterator();
#//$obj3->setStart(1);
#//$obj3->setEnd(10);
#//$obj3->setAction('sqrt');
#$obj3->setStart(1)->setEnd(100)->setAction('sqrt');
#
#//foreach($obj1 as $key => $value) {
#//    echo 'Pow int:', $key, ' = ', $value, "\n";
#//}
#//echo "\n\n";
#
#//foreach($obj2 as $key => $value) {
#//    echo 'Sqrt int:', $key, ' = ', $value, "\n";
#//}
#//echo "\n\n";
#
#foreach($obj3 as $key => $value) {
#    echo 'Sqrt int:', $key, ' = ', $value, "\n";
#}

/**
 * Registry implements ArrayAccess
 * Object as Array
 */
#require_once __DIR__ . '/SPL/Registry.php';
#
#use SPL\Registry;
#
#
#$obj = new Registry();
#$obj['login'] = 'Lancer';
#$obj['password'] = 'pass@word';
#
#if(isset($obj['login'])) {
#    echo $obj['login'], ' : ', $obj['password'];
#}
#
#unset($obj['password']);

