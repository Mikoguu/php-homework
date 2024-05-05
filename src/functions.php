<?php

function task1() 
{

$users = Array();
$names = ["Katy", "Lidia", "Skyler", "Hanna", "Cindy"];
$file = 'users.json';

for($i = 1; $i <= 50; $i++) {
    $userData = Array(
        'id' => $i,
        'name' => $names[array_rand($names, 1)],
        'age' => rand(18,45)
    );
    array_push($users, $userData);
};

file_put_contents($file, json_encode($users));
$content = file_get_contents($file);
$decoded_content = json_decode($content, true);

$names = array_column($decoded_content, 'name');
$unique_names_amount = array_count_values($names);

$ages = array_column($decoded_content, 'age');
$average_age = round(array_sum($ages) / count($ages), 0);

return [
    'unique_names_amount' => $unique_names_amount,
    'average_age' => $average_age
];
    
};

?>