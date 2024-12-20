<?php

// 1

function power($val, $pow) {
    if ($pow == 0) {
        return 1; 
    }
    return $val * power($val, $pow - 1);
}

echo power(2, 3);
echo "<br>";

// 2

function getTimeString($hours, $minutes) {
    $hourStr = $hours . ' ' . getHourDeclension($hours);
    $minuteStr = $minutes . ' ' . getMinuteDeclension($minutes);
    return $hourStr . ' ' . $minuteStr;
}

function getHourDeclension($hours) {
    if ($hours % 10 == 1 && $hours % 100 != 11) {
        return 'час';
    } elseif (in_array($hours % 10, [2, 3, 4]) && !in_array($hours % 100, [12, 13, 14])) {
        return 'часа';
    } else {
        return 'часов';
    }
}

function getMinuteDeclension($minutes) {
    if ($minutes % 10 == 1 && $minutes % 100 != 11) {
        return 'минута';
    } elseif (in_array($minutes % 10, [2, 3, 4]) && !in_array($minutes % 100, [12, 13, 14])) {
        return 'минуты';
    } else {
        return 'минут';
    }
}

$currentHour = date('G');
$currentMinute = date('i');
echo getTimeString($currentHour, $currentMinute);
echo "<br>";

// 3

$number = 0;
while ($number <= 100) {
    if ($number % 3 == 0) {
        echo $number . " ";
    }
    $number++;
}
echo "<br><br>";

// 4

function printOddEven() {
    $number = 0;
    do {
        if ($number == 0) {
            echo "$number – это ноль<br>";
        } elseif ($number % 2 == 0) {
            echo "$number – четное число<br>";
        } else {
            echo "$number – нечетное число<br>";
        }
        $number++;
    } while ($number <= 10);
}
printOddEven();
echo "<br>";

// 5

for ($i = 0; $i < 10; $i++) {
    echo $i . ' ';
}
echo "<br><br>";

// 6

$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Ряжск']
];

foreach ($cities as $region => $cityArray) {
    echo "$region: " . implode(', ', $cityArray) . "<br>";
}
echo "<br>";

// 7

foreach ($cities as $region => $cityArray) {
    $filteredCities = array_filter($cityArray, function($city) {
        return strpos($city, 'К') === 0;
    });
    if (!empty($filteredCities)) {
        echo "$region: " . implode(', ', $filteredCities) . "<br>";
    }
}
echo "<br>";

// 8

$transliterationMap = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
    'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
    'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate($string) {
    global $transliterationMap;
    return str_replace(array_keys($transliterationMap), array_values($transliterationMap), $string);
}

echo transliterate("свинья захрюкала");
echo "<br><br>";

// 9

function transliterateAndReplaceSpaces($string) {
    return str_replace(' ', '_', transliterate($string));
}

echo transliterateAndReplaceSpaces('свинья захрюкала'); 

?>

