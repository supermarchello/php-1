<?php
function getReadableTime()
{
    $arMinutes = [
        0  => 'минут',
        1  => 'минута',
        2  => 'минуты',
        3  => 'минуты',
        4  => 'минуты',
        5  => 'минут',
        6  => 'минут',
        7  => 'минут',
        8  => 'минут',
        9  => 'минут',
        10 => 'минут',
        11 => 'минут',
        12 => 'минут',
        13 => 'минут',
        14 => 'минут',
        15 => 'минут',
        16 => 'минут',
        17 => 'минут',
        18 => 'минут',
        19 => 'минут',
        20 => 'минут',
    ];
    $time      = new DateTime();
    $time      = $time->format('H:i');
    $arTime    = explode(':', $time);
    if (((int)$arTime[0] >= 5 && (int)$arTime[0] <= 20) || (int)$arTime[0] == 0) {
        $hourString = $arTime[0] . ' часов';
    } elseif ((int)$arTime[0] == 1 || (int)$arTime[0] == 21) {
        $hourString = $arTime[0] . ' час';
    } else {
        $hourString = $arTime[0] . ' часа';
    }
    if ((int)$arTime[1] <= 20 || (int)$arTime[1] >= 0) {
        $minutesString = $arTime[1] . ' '. $arMinutes[(int)$arTime[1]];
    } else {
        $minutesString = $arTime[1] . ' '. $arMinutes[$arTime[1][count($arTime[1])]];
    }
    
    return $hourString . ' ' . $minutesString;
    
}

echo getReadableTime();