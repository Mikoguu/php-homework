<?php

require '../vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Typography\FontFactory;

$manager = new ImageManager(
    new Intervention\Image\Drivers\Gd\Driver()
);

$image = $manager->read('doge.jpg');

$image->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();
});

$image->text('The Doge is confused', 120, 100, 
    function (FontFactory $font) {
        $font->size(70);
        $font->color('fff');
        $font->stroke('ff5500', 2);
        $font->align('center');
        $font->valign('middle');
        $font->lineHeight(1.6);
        $font->angle(10);
        $font->wrap(250);
    });


$image->save('dog1.jpg');


?>