<?php
echo "Задание # 1";

$name = 'Игорь';
$age = 29;
echo "<br/>Меня зовут: $name";
echo "<br/>Мне $age лет";
echo "<br/> “!|\/’”\ ";
echo "<br/>";
echo "<br> Задание # 2";
const ALL_IMAGINE = '80'; // всего рисунков
const MARKER_IMAGINE = '23'; // рисунки фломастерами
$paint_imagine = ALL_IMAGINE - MARKER_IMAGINE;
echo "На школьной выставке было $paint_imagine рисунков красками.";
echo "<br/>";
echo "<br> Задание # 3";
echo "<br/>";
$age = 66;
if($age>=18 && $age<=65) {
    echo 'Вам еще работать и работать';
}
    elseif ($age>65)
{
    echo "Вам пора на пенсию";
}
    elseif ($age>=1 && $age<=17)
{
    echo "Вам еще рано работать";
}
    else
{
    echo "Неизвестный возраст";
}
echo "<br/>";
echo "<br> Задание # 4";
echo "<br/>";
$day = 10;
switch ($day)
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    echo "Это рабочий день";
        break;
    case 6:
    case 7:
    echo "Это выходной день";
    break;
    default:
    Echo "Неизвестный день";
    break;
    
}