<?php
require('src/functions.php');

echo(task1(['Вася', 'Петя', 'Коля'], true));
echo(task1(['Банан', 'Яблоко', 'Апельсин'], false));
echo '</br>';

echo(task2('-', 5, 6, 8));
echo '</br>';
echo(task2('+', 5, 6, 8));
echo '</br>';
echo(task2('*', 5, 6, 8));
echo '</br>';
echo(task2('/', 5, 6, 8));

task3(8, 2);
task4();
echo '</br>';
task5();
echo '</br>';
task6('test.txt');
?>
