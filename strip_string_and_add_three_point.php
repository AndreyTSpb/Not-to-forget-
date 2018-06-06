/**
*Обрезаем строку на нужнок количкставо символов, с сохранением целостности последнего слова.
*/

function internoetics_mb_strimwidth($string, $start = 0, $width = 120, $trimmarker = '...') {
    $len = strlen(trim($string));
    $newstring = ( ($len > 120) AND ($len != 0) ) ? rtrim(mb_strimwidth($string, $start, $width - strlen($trimmarker))) . $trimmarker : $string;
    return $newstring;
}
 
/* Использование */
echo internoetics_mb_strimwidth($string, 0, 120, $trimmarker = '...');
