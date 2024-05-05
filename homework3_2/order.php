<?php

include('src/config.php');
include('src/class.db.php');
include('src/class.burger.php');

$burger = new Burger();

$email = $_POST['email'];
$name = $_POST['name'];

$addressFileds = ['phone', 'street', 'home', 'part', 'apt', 'floor'];
$address = '';
foreach($_POST as $field => $value) {
    if ($value && in_array($field, $addressFileds)) {
        $address .= $value . ', ';
    }
}
$data = ['address' => $address];

$user = $burger->getUserByEmail($email);

if($user) {
    $userId = $user['id'];
    $burger->incOrder($user['id']);
    $orderNumber = $user['orders_count'];
} else {
    $orderNumber = 1;
    $userId = $burger->createUser($email, $name);
}

$orderId = $burger->addOrder($userId, $data);

echo "Спасибо, ваш заказ будет доставлен по адресу: $address<br>
Номер вашего заказа: #$orderId<br>
Это ваш $orderNumber-й заказ!"
?>