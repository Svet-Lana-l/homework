<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив $arr с ключами \'Коля\', \'Вася\', \'Петя\' с элементами \'200\', \'300\', \'400\'. С помощью
цикла foreach выведите на экран столбец строк такого формата: \'Коля — зарплата 200
долларов.\'.<br><br>';
$arr = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
foreach ($arr as $key=>$value ){
    echo $key . ' - зарплата ' . $value . ' долларов. <br>';
}
?>
</body>
</html>