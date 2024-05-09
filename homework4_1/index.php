<?php
include('ServiceInterface.php');
include('TariffInterface.php');
include('TariffAbstract.php');
include('TariffBasic.php');
include('ServiceGPS.php');
include('ServiceDriver.php');
include('TariffHour.php');
include('TariffStudent.php');

/** @var TariffInterface */
$tariffStudent = new TariffStudent(5, 45);
$tariffBasic = new TariffBasic(10, 80);
$tariffHour = new TariffHour(8, 15);
$tariffBasicWithServiceDriver = $tariffBasic->addService(new ServiceDriver(100));
$tariffStudentWithGPS = $tariffStudent->addService(new ServiceGPS(15));

echo 'Тариф: Студенческий c GPS <br>' . 
'Расстояние: ' . $tariffStudent->getDistance() . ' км' . '<br>' .
'Время: ' . $tariffStudent->getMinutes() . ' минут' . '<br>' .
'Стоимость: ' . $tariffStudentWithGPS->countPrice() . ' рублей' . '<br>' .
'<br>' .
'Тариф: Базовый с дополнительным водителем <br>' . 
'Расстояние: ' . $tariffBasic->getDistance() . ' км' . '<br>' .
'Время: ' . $tariffBasic->getMinutes() . ' минут' . '<br>' .
'Стоимость: ' . $tariffBasicWithServiceDriver->countPrice()  . ' рублей' . '<br>' .
'<br>' .
'Тариф: Почасовой <br>' . 
'Расстояние: ' . $tariffHour->getDistance() . ' км' . '<br>' .
'Время: ' . $tariffHour->getMinutes() . ' минут' . '<br>' .
'Cтоимость: ' . $tariffHour->countPrice() . ' рублей' . '<br>' .
'<br>'


?>