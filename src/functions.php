<?php

function task1($array, $join) {
    foreach($array as $key) {
        if (!$join) {
        echo '<p>';
        echo($key);
        echo'</p>';
        } else {
            return implode(", " , $array);
        }
    };
};

function task2($operation, ...$numbers) {
    $total = 0;
    if ($operation == '+') {
        for ($i = 0; $i < count($numbers); $i++) {
            $total += $numbers[$i];
        };
    } elseif ($operation == '-') {
        $total = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $total -= $numbers[$i];
        };
    } elseif ($operation == '*') {
        $total = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $total *= $numbers[$i];
        };
    } elseif ($operation == '/') {
        $total = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $total /= $numbers[$i];
        };
    } elseif ($operation == '%') {
        $total = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $total %= $numbers[$i];
        };
    } else {
        echo('Некорректная операция');
    }

    return $total;
};

function task3($rows, $columns) {
    if (isset($rows) === true && isset($columns) === true) {
        echo '<table border=1 width=300px height=300px>';
        for($tr = 1; $tr <= $rows; $tr++ ) {
            echo '<tr>';
                for($td = 1; $td <= $columns; $td++) {
                    echo '<td>';
                    echo '</td>';
                }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Некорректные параметры';
    }
};

function task4() {
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y H:m');
    echo '</br>';
    echo strtotime('24.02.2016 00:00:00');
};

function task5() {
    $string1 = 'Карл у Клары украл Кораллы';
    $string2 = 'Две бутылки лимонада';
    echo(str_replace('К', '', $string1));
    echo '</br>';
    echo(str_replace('Две', 'Три', $string2));
};

?>