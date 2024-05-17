<?php

require_once '../vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

$transport = Transport::fromDsn('smtp://mikoguuhw@yandex.ru:arpembcdesgldssy@smtp.yandex.ru:465/?encryption=ssl&auth_mode=login');
$mailer = new Mailer($transport);

$email = (new Email())
    ->from('mikoguuhw@yandex.ru')
    ->to('lol.nanny@mail.ru')
    ->subject('Time for Symfony Mailer!')
    ->text('Sending emails is fun again!')
    ->html('<p>Hello World!</p>');

$mailer->send($email);