<?php
echo "Задание # 1";

$name = 'Игорь';
$age = 29;
echo "<br/>Меня зовут: $name";
echo "<br/>Мне $age лет";
echo "<br/> “!|\/’”\ ";
echo "<br/>";
echo "<br> Задание # 2";
echo "<br/>";
echo "<b>Дана задача:</b> На школьной выставке 80 рисунков. 23 из них выполнены
фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков,
выполненные красками, на школьной выставке?<br/>"; //Условия
echo "<b>Решение:</b><br/>";
echo "Рисунки красками = Всего рисунков - Рисунки фломастерами - Рисунки карандашами<br/>";//Решение
const ALL_IMAGINE = '80'; // всего рисунков
const MARKER_IMAGINE = '23'; // рисунки фломастерами
const PEN_IMAGINE = '40'; // рисунки карандашами
echo "<b>Ответ:</b> На школьной выставке было ", ALL_IMAGINE - MARKER_IMAGINE - PEN_IMAGINE, " рисунков красками."; // рисунки красками
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
echo "<br/>";
echo "<br> Задание # 5";
echo "<br/>";
echo"<style>
   div {
    padding: 5px;
    width: 150px;
    border: 1px  solid black;
   }
  </style>";
$bmw = ['name'=>"BMW <br>", 'model'=>'X5', 'speed'=>120, 'doors'=>5,'year'=>"2015 <br>"];
$toyota = ['name'=>"Toyota <br>",'model'=>'Camry', 'speed'=>240, 'doors'=>5,'year'=>"2018<br>"];
$opel = ['name'=>"Opel <br>",'model'=>'Astra', 'speed'=>90, 'doors'=>3,'year'=>"1981 <br>"];
echo "<div>";
$cars = array($bmw, $toyota, $opel);
foreach ($cars as $elem) {
    echo $elem['name']. ' '.$elem['model']. ' '.$elem['speed']. ' '.$elem['doors']. ' '.$elem['year'];
}
echo "</div>";
echo "<br/>";
echo "<br> Задание # 6";
echo "<br/>";

$rows = 10;
$cols = 10;

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr%2==0 && $td%2==0){
            $table .= '<td>('. $tr*$td .')</td>'; // вычислили первую строку или столбец
        }elseif ($tr%2!=0 && $td%2!=0){
            $table .= '<td>['. $tr*$td .']</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;