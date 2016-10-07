<?php
/*1.
$something = 110.010101;
$ohter = "0xFFFF";
*** People {
    var $health;
    var $age;
    function People($health = "normally", $age)
    {
        $this->physiology = $health;
        $this->lifecycle = $age;
    }
    function how_feel()
    {
        return $this->health;
    }
    function how_old()
    {
        return $this->age;
    }
}
$what = true;
$presidents = ***("USA" => "Obama",
    "Ukraine" => "Poroshenko"
);
$child = new People;
$year = 2016;
*/
/*2.
$arr = array ('html', 'css', 'php', 'js', 'jq');
    foreach ($arr as $key ) {
    echo $key . '<br>';
}
*/

/*3.
	$arr = array(10, 20, 15, 17, 24, 35);
    $result = 0;
foreach ($arr as $el)
{
    $result = $result + $el;
}
echo $result;
?>
*/
/*4.
$arr = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr as $el)
{
    $result += $el * $el;
}
echo $result;
*/

/*5.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr as $key=>$el)
    {
        echo $key . ' ' . $el.'<br>';
    }
*/
/*6.
$arr = array ('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
    foreach ($arr as $key => $el)
    {
        echo $key . ' - зарплата'. $el . 'долларов' . '<br>';
    }

*/
/*7.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr as $key=>$el)
    {
        $en[] = $key;
        $ru[] = $el;
    }

*/
/*8.
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $el)
{
    if ($el > 3 && $el < 10)
    {
        echo $el.'<br>';
    }
}
*/
/*9.
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$str = ' ';
	foreach ($arr as $el)
    {
        $str .= $el;
    }
	echo $str;
*/
//10.
/*
$i = 1;
for ($i = 0; $i <= 100; $i++)
    {
        echo $i.'<br>';
    }

*/

/*$i = 1;
	while ($i <= 100)
    {
        echo $i.'<br>';
        $i++;
    }
*/
//11.
/*for ($i = 10; $i <= 33; $i++)
{
    echo $i.'<br>';
}
*/
/*$i = 11;
	while ($i <= 33)
    {
        echo $i.'<br>';
        $i++;
    }
*/
//12.
/*for ($i = 0; $i <= 100; $i += 2)
{
    echo $i.'<br>';
}
*/

/*$i = 0;
	while ($i <= 100)
    {
        echo $i.'<br>';
        $i += 2;
    }
*/
//13.
/* $n = 1000;
	$i = 0;
	while ($n > 50)
    {
        $i++;
        $n /= 2;
    }

	echo $i.'<br>'; //кол-во итераций
	echo $n; //число, которое получилось

*/

/* for ($n = 1000, $i = 0; $n > 50; $n /= 2, $i++);

echo $i.'<br>';
echo $n;
*/
//14.

//15.
/* $arr = array(1, 4, 2, 5, 19, 13, 0, 10);
$e = 2;
$i = 3;
$f = 4;
foreach ($arr as $el)
{
    if ($el == $e)
    {
        echo 'Есть!';
        break; //выйдет из цикла
    }
    echo '<br>';
    if($el == $i)
    {
        echo 'Есть!';
        break;
    }
    echo '<br>';
    if($el == $f)
    {
        echo 'Есть!';
        break;
    }
}
*/

//16.
/* $arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $el)
{
    $count++;
}
*/
 //17.
/* $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$i = 0;
	$str = '';
	foreach ($arr as $el)
    {
        if ($i == 3 or $i == 6 or $i == 9)
        {
            $str .= $el.', ';
        }
        else
        {
            $str .= $el.'<br>';
        }
    }
	echo $str;
*/
//18.
/* $arr = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
$month = 10; //текущий месяц
foreach ($arr as $key => $el)
{
    if ($key == $month - 1)
    {
        echo "<b>$el</b><br>";
    }
    else
    {
        echo $el.'<br>';
    }
}
*/
//19.
/* $arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
foreach ($arr as $key => $el)
{
    if ($key == 5 or $key == 6)
    {
        echo "<b>$el</b><br>";
    }
    else
    {
        echo $el.'<br>';
    }
}
*/
//20.
/* $arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
$day = 5; //  пятница
foreach ($arr as $key => $el)
{
    if ($key == $day - 1)
    {
        echo "<i>$el</i><br>";
    }
    else
    {
        echo $el.'<br>';
    }
}
*/
//21.
/* $str = '';
for ($i = 1; $i <= 20; $i++)
{
    $str .= 'x';
    echo $str.'<br>';
}
*/
//22.
/* $str = ' ';
for ($i = 1; $i <= 9; $i++)
{
    for ($f = 0; $f < $i; $f++)
    {
        $str .= $i;
    }
    echo $str.'<br>';
    $str = ' ';
    $f = 0;
}
*/
//23.
/* $str = '';
$i = 0;
while ($i <= 5)
{
    $i++;
    $str .= 'xx';
    echo $str.'<br>';
}
*/
//24. Сам не справился с этой задачей, обратился к помощи
/* $str='12345';
$i=0;
$summ=0;
while($i < strlen($str))
{
    $summ = $summ + $str[$i];
    $i++;
}
echo $summ;
*/
//25.

