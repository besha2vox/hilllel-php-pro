<?php

require_once "traits/ColorValidation.php";
require_once "classes/ValueObject.php";

function createColor(int $red, int $green, int $blue): ?ValueObject
{
    try {
        return new ValueObject($red, $green, $blue);

    } catch (Exception $err) {
        echo $err->getMessage();
        return null;
    }
}

$pink = createColor(255, 192, 203);
$pink2 = createColor(255, 192, 203);
$lightpink = createColor(255, 182, 193);

$invalidColor = createColor(256, 182, 193);

$randomColor = ValueObject::random();

$mixedColor = $pink->mix($randomColor);

echo "pink->red: " . $pink->getRed() . PHP_EOL;
echo "pink->green: " . $pink->getGreen() . PHP_EOL;
echo "pink->blue: " . $pink->getBlue() . PHP_EOL;
echo '$pink === $pink2: ';
var_dump($pink->equals($pink2));
echo '$pink === $lightpink: ';
var_dump($pink->equals($lightpink));
echo '$randomColor: ';
var_dump($randomColor);
echo '$mixedColor: ';
var_dump( $mixedColor);