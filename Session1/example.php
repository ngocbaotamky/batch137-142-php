<?php
$userName = "Bao";
$myPhone = "0987470340";
//Bien dat ten co y nghia
//Su dung chu cai hoa hoac thuong hoac so hoac dau gach duoi
//Bat dau bang dau $ 
//Theo quy tac Camel
//Khong bat dau bang so
//Nen dat theo tieng Anh
$myUserName = "Bao";
//Cac phep toan +, -, *, /, %
$a = "5";
$b = "7";
echo $a + $b;
echo "<br>";
echo $userName;

//Ham trong PHP
function myFunctionName($a, $b)
{
    return $a + $b;
}
echo "<br>";
echo myFunctionName(9, 6);

echo "<br>";
$x = myFunctionName(12, 7);
echo $x;

function myTestFunction()
{
    echo "Demo test";
}
echo "<br>";
echo myTestFunction();

//Cau dieu kien
//if (dieu kien){
//Neu dieu kien dung thi thuc hien
//} else{
//neu dieu kien sai thi thuc hien lenh nay
//}
/* Bai tap: Cho 1 so x co gia tri cho truoc, kiem tra so x la chan hay le */
echo "<br>";
$x = "2";
if ($x % 2 == 0) {
    echo "x chan";
} else {
    echo "x le";
}
echo "<br>";

switch ($x) {
    case 1:
        echo "x la so 1";
        break;
    case 2:
        echo "x la so 2";
        break;
    default:
        echo "x la so khong phai 1 hoac 2";
        break;
}
echo "<br>";
//BT : Cho 1 so x cho truoc, kiem tra x co phai la thang trong nam khong ?
//Neu x la thang trong nam thi in ra so ngay cua thang do
$month = "13";
switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "thang nay 31";
        echo "<br>";
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo "thang nay co 30 ngay";
        echo "<br>";
        break;

    case 2:
        echo "thang nay co 28 ngay";
        echo "<br>";
        break;

    default:
        echo "Khong phai thang trong nam";
}

//Cho 1 so y cho truoc , kiem tra y co phai la nam khong ? Neu la nam thi kiem tra nam nhuan hay khong de biet so ngay cua thang 2 ?
echo "<br>";

$year = "a2016";
if (is_numeric($year)) {
    # code...
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo "la nam nhuan";
        } else {
            echo " khong phai la nam nhuan";
        }
    } else if ($year % 4 == 0) {
        echo "la nam nhuan";
    } else {
        echo " khong phai la nam nhuan";
    }
} else {
    # code...
    echo "ban nhap khong phai la so !";
}
