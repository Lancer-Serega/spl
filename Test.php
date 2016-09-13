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

/**
 * Generators implements(in systems) \Iterator
 *
 * @return Generator
 */
#function generator(): Generator
#{
#    echo 'Start', "\n";
#
#    for($i = 0; $i <= 5; ++$i) {
#        yield $i;
#        echo 'Value: ', $i, "\n";
#    }
#
#    echo 'Finish', "\n";
#}
#
#$generator = generator();
#
#var_dump($generator); // object(Generator)[1]
#
#foreach($generator as $value);

/**
 * Read Line in .txt file helpful \Iterator
 */
#require_once __DIR__ . '/SPL/FileIterator.php';
#
#use SPL\FileIterator;
#
#
#$f = __DIR__ . '/res/data.txt';
#
#$FI = new FileIterator($f);
#
#foreach($FI as $line) {
#
#    if($line === 'Line Two' . "\n") {
#        echo '========', "\n";
#
#        continue;
#    }
#
#    echo $line;
#}
#
#echo "\n\n";

/**
 * Read Line in .txt file helpful Generator
 *
 * @param resource $file
 *
 * @return Generator
 * @throws Exception
 */
#function getLines($file): Generator
#{
#    $file = fopen($file, "r");
#
#    if(!$file) {
#        throw new Exception();
#    }
#
#    while($line = fgets($file)) {
#        yield $line;
#    }
#
#    fclose($file);
#}

/**
 * @var resource $file
 */
#$file = __DIR__ . '/res/data.txt';
#
#foreach(getLines($file) as $line) {
#    if($line === 'Line Two' . "\n") {
#        echo '========', "\n";
#
#        continue;
#    }
#
#    echo $line;
#}

/**
 * @return Generator
 */
#function generator()
#{
#    yield 'a';
#    yield 'c';
#    yield 'lo';
#    yield [
#        'Anna' => [
#            'name' => 'anna',
#            'year' => 18,
#        ],
#
#        'array' => [
#            /*0 =>*/
#            'gdfghjhdgfj',
#            /*1 =>*/
#            'dhgjhdgj',
#            /*2 =>*/
#            'hgdjdghjdhg',
#            /*3 =>*/
#            'hdgjdghj',
#            /*4 =>*/
#            'ghdjhdgj',
#            /*5 =>*/
#            'hdgjghdj',
#            /*6 =>*/
#            'dyjdhgjhg',
#        ],
#
#        'Vasya' => [
#            'name' => 'Vasiliy',
#            'year' => 86,
#        ],
#    ];
#    yield 'Lancer' => [
#        'name' => 'Lancer',
#        'year' => 24,
#        'phone' => [
#            'tele2' => [
#                '0' => 'num1',
#                'num2',
#            ],
#            'megafon' => 'mega1',
#            'mts' => 'm1',
#        ]
#    ];
#}
#
#foreach(generator() as $key => $value) {
#    echo $key, ' : ', $value, "\n";
#}
#
#echo "=======\n";
#
#function echoLogger()
#{
#    while(true) {
#        echo 'Log: ' . yield . "\n";
#    }
#}
#
/** @noinspection PhpVoidFunctionResultUsedInspection */
#$logger = echoLogger();
/**
 * @var $logger Generator
 */
#$logger->send('Foo');
#$logger->send('Franc');
#
#echo "=======\n";

$shop = [
    'Fruits' => [
        'Orange',
        'Apple',
        'Limon',
        'Cherry',
        'Banana',
    ],
    'Vegetable' => [
        'Cabbage',
        'Potato',
        'Tomato',
        'Onion' => [
            'self' => [
                1,
                2 => [
                    'a',
                    'b',
                    'c'
                ],
                3,
            ],
            'update',
        ],
    ],
    'Chemicals' => [
        'Toothpaste',
        'Shampoo',
        'SOAP',
        'Shower Gel',
        'White',
    ],
    'School' => [
        'Pen',
        'Pencil',
        'Ruler',
        'Compass',
        'Notebook',
    ],
];

$RAI = new RecursiveArrayIterator($shop);
$RII = new RecursiveIteratorIterator($RAI, 1);
/**
 * @param $depth
 */
function depthLn($depth)
{
    for($i = 1; $i < $depth; $i++) {
        echo($depth . '>> ' . "\t");
    }
}

#foreach ($RII as $key => $value){
#    $depth = $RII->getDepth();
#
#    echo depthLn($depth), $key, ':', $value, "\n";
#}

require_once __DIR__ . '/SPL/MyArrayList.php';

use SPL\MyArrayList;


$RAI2 = new MyArrayList(
    new RecursiveArrayIterator($shop), RecursiveIteratorIterator::SELF_FIRST
);

echo '<ul>', "\n";

foreach($RAI2 as $key => $value) {

    if($RAI2->callHasChildren()) {
        echo '<li>[<b>', $key, '</b>]</li>', "\n";
        continue;
    }

    echo '<li>', $value, '</li>', "\n";
}