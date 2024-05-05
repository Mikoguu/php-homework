<?php

function task1($array, $join) {
    foreach($array as $key) {
        if (!$join) {
        echo '<p>';
        echo($key);
        echo'</p>';
        } else {
            $onestring = implode(", " , $array);
            return $onestring;
        }
    };
};

function task2 ($operation, ...$numbers) {
    $total = 0;
    switch ($operation) {
        case "+": 
            $total = array_sum($numbers);
            break;
        case "-":
            $total = array_shift($numbers);
            for ($i = 0; $i < count($numbers); $i++) {
                $total -= $numbers[$i];
            };
            break;
        case "*":
            $total = array_product($numbers);
            break;
        case "/":
            $total = array_shift($numbers);
            for ($i = 0; $i < count($numbers); $i++) {
                $total /= $numbers[$i];
            };
            break;
        case "%":
            $total = array_shift($numbers);
            for ($i = 0; $i < count($numbers); $i++) {
                $total %= $numbers[$i];
            };
            break;
        default:
            echo('Некорректная операция');

    };
    
    return $total;
}

function task3($rows, $columns) {
    if (is_int($rows) === false || is_int($columns) === false) {
        echo 'Оба аргумента должны быть числами';
        return;
    };

    if ($rows <= 0 || $columns <= 0) {
        echo 'Оба аргумента должен быть больше нуля';
    };
    
    echo '<table border=1 width=300px height=300px>';
        for($tr = 1; $tr <= $rows; $tr++ ) {
            echo '<tr>';
                for($td = 1; $td <= $columns; $td++) {
                    echo '<td>';
                    echo '</td>';
                }
            echo '</tr>';
        };
        
        echo '</table>';  

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

function task6($file) {
    $text = 'Hello!';
    file_put_contents($file, $text);
    $data = file_get_contents($file);
    echo($data);
};

?>