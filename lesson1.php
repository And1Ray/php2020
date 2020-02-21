<?php

//#1
$name = 'Андрей';
$age = '26';

echo 'Меня зовут: ' . $name;
echo '<br>';
echo 'Мне ' . $age . 'лет';
echo '<br>';
echo '"<br>!<br>|<br>/<br>\'<br>"<br>\\';
echo '<br>';

echo '<hr>';

//#2
const IMAGES = 80;
const FELTTIP_PEN = 23;
const PENCIL = 40;

echo IMAGES - (FELTTIP_PEN + PENCIL);
echo '<br>';

echo '<hr>';

//#3
$second_age = 18;

if ($second_age > 17 && $second_age < 66) {
    echo 'Вам еще работать и работать';
    echo '<br>';
} elseif ($second_age > 65) {
    echo 'Вам пора на пенсию';
    echo '<br>';
} elseif ($second_age > 0 && $second_age < 18) {
    echo 'Вам ещё рано работать';
    echo '<br>';
} else {
    echo 'Неизвестный возраст';
    echo '<br>';
}

echo '<hr>';

//#4
$day = 7;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день<br>';
        break;
    case 6:
    case 7:
        echo 'Это выходной день<br>';
        break;
    default:
        echo 'Неизвестный день<br>';
}

echo '<hr>';

//#5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];
$toyota = [
    'model' => 'camry',
    'speed' => 130,
    'doors' => 4,
    'year' => '2014'
];
$opel = [
    'model' => 'astra',
    'speed' => 110,
    'doors' => 4,
    'year' => '2016'
];

$all_array = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($all_array as $el => $item) {
    echo 'CAR ' . $el . '<br>';
    echo implode(' ', $item);
    echo '<br><br>';
}

echo '<hr>';

echo '<table cellspacing="0" cellpadding="0" style="border-collapse: collapse;">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {

        if ($i == 1 || $j == 1) {
            $var = $i * $j;
            if ($var % 2 == 0) {
                echo '<td align="center" style="border: 1px solid black;width: 30px;height: 30px;">
                  ('. $var .')
                </td>';
            } else {
                echo '<td align="center" style="border: 1px solid black;width: 30px;height: 30px;">
                  ['. $var .']
              </td>';
            }
        } else {
            echo '<td align="center" style="border: 1px solid black;width: 30px;height: 30px;">
                  '. $i * $j .'
            </td>';
        }
    }
    echo '</tr>';
}
echo '</table>';