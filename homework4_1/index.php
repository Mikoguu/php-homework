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
$tariff = new TariffStudent(5, 60);
//$tariff->addService(new ServiceGPS(15));
//$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();
?>