<?php
require('functions.php');

$names = ["Katy", "Lidia", "Skyler", "Hanna", "Cindy"];

echo '<pre>';
$usersList = createUsersList($names);
createJSON($usersList, 'users.json');
$usersDecodedJSON = getDecodedJSON('users.json');
$uniqueNamesCount = getNamesCount($usersDecodedJSON);
$avgAge = getAvgAge($usersDecodedJSON);

echo 'Количество уникальных имен пользователей <br>';
foreach($uniqueNamesCount as $key => $value) {
    echo ($key . ':' . $value . ' ');
}; 
echo '<br><br>';
echo 'Средний возраст пользователей: ' . $avgAge;
?>
