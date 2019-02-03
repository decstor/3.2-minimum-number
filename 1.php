<?php
$summ = $argv[1];
$fivehung= [];
$twohung = [];
$onehung = [];
$fifty = [];
$twenty = [];
$ten = [];
$five = [];
$two = [];
$one = [];
if ($summ <= 100000) {
    $fivehung = (int)($summ / 500);
    $twohung = (int)(($summ - $fivehung * 500) / 200);
    $onehung = (int)(($summ - $fivehung * 500 - $twohung * 200) / 100);
    $fifty = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100) / 50);
    $twenty = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100 - $fifty * 50) / 20);
    $ten = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100 - $fifty * 50 - $twenty * 20) / 10);
    $five = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100 - $fifty * 50 - $twenty * 20 - $ten * 10) / 5);
    $two = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100 - $fifty * 50 - $twenty * 20 - $ten * 10 - $five * 5) / 2);
    $one = (int)(($summ - $fivehung * 500 - $twohung * 200 - $onehung * 100 - $fifty * 50 - $twenty * 20 - $ten * 10 - $five * 5 - $two * 2) / 1);
    if ($fivehung > 0) {
        echo "500: {$fivehung}" . PHP_EOL;
    }

    if ($twohung > 0){
        echo "200: {$twohung}" . PHP_EOL;
    }
    if ($onehung > 0) {
        echo "100: {$onehung}" . PHP_EOL;
    }
    if ($fifty > 0) {
        echo "50: {$fifty}" . PHP_EOL;
    }
    if ($twenty > 0) {
        echo "20: {$twenty}" . PHP_EOL;
    }
    if ($ten > 0) {
        echo "10: {$ten}" . PHP_EOL;
    }
    if ($five > 0) {
        echo "5: {$five}" . PHP_EOL;
    }
    if ($two > 0) {
        echo "2: {$two}" . PHP_EOL;
    }
    if ($one > 0) {
        echo "1: {$one}" . PHP_EOL;
    }
}
else {
    echo "Введите число которое <=100000 грн.";
}
