<?php
class ServiceDriver implements ServiceInterface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function apply(TariffInterface $tariff, &$price) 
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->price;
    }
}
?>