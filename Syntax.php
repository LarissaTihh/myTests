<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf=8"/>
<?php
//основные операторы//
//оператор присваивания//
$firstName = "имя";
$lastName = "фамилия";
$fullName = $firstName . $lastName;// оператор конкатенации//
//$fullName = $firstName . " - " . $lastName;//изменили вывод.Почему вывелось один раз//
echo $fullName ;

//условные операторы//
//if состоит из условия и одного или нескольких операторов,сгруппированных в виде блока.///* 
echo '<br>=================================================</br>';
$a = 7;
$b = 6;
if ($a == $b) {
    echo 'А равно В';
} else {
    echo "А не равно В ";
}
echo '<br>=================================================</br>';
//оператор elseif//
$c = 10;
$d = 5;

if($a==$b) {
    echo 'А равно В';
}elseif ($a==$c) {
    echo 'А равно С';
}elseif ($a==$d) {
    echo 'А равно D';
} else {
    echo 'А ничему не равно';   
}
echo '<br>=================================================</br>';
switch ($a) {
    case $b:
        echo 'А равно В';
break;
    case $c:
        echo 'А равно С';
        break;
    case $d:
        echo 'А равно D';
        break;
        
    default:
        echo 'А ничему не равно';
        break;
}
    echo '<br>=================================================</br>';

//циклы//
for ($i = 1; $i < 101; $i = $i + 1) {
    echo $i . '<br>';
    
}
    
    echo '<br>=================================================</br>';
    $i = 1;
    while ($i < 101) {
        echo $i . '<br>';
        $i = $i + 1;
    }
    //foreach//
        echo '<br>=================================================</br>';
        $myArray = array('ПРивет','Мир','родился','новый','программист');
        foreach ($myArray as $value) {
            echo $value . '<br>';
    
}