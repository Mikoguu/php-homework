<?php

function createUsersList($names) 
{

$users = Array();

for($i = 1; $i <= 50; $i++) {
    $userData = Array(
        'id' => $i,
        'name' => $names[array_rand($names, 1)],
        'age' => rand(18,45)
    );
    array_push($users, $userData);
};

return $users;
    
};

function createJSON($users, $file) 
{
    file_put_contents($file, json_encode($users));
    return $file;
};

function getDecodedJSON($file)
{
    $content = file_get_contents($file);
    return json_decode($content, true);
};

function getNamesCount($users) 
{
    $names = array_column($users, 'name');
    return array_count_values($names);
};

function getAvgAge($users) {
    $ages = array_column($users, 'age');
    return round(array_sum($ages) / count($ages), 0);
}
?>