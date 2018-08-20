<?php
$array = array('имя', 'почта', 'телефон');
function task1($array, $second = true)
{
    if ($second == false) {
        $masseffect = implode(" ", $array);
        echo $masseffect;
    } else {
        $masseffect = implode("<p> </p>", $array);
        return $masseffect;
    }
}
echo task1($array, $second = true);
