<?php
for ($i = 0; $i < 10; $i++){
    echo $i;
    echo "<br>";
}


//Cho dãy số từ 1 đến 100
//Kiểm tra số nào chia hết cho 3 thi in ra " số n chia hết cho 3"
//Kiểm tra số nào chia hết cho 5 thi in ra " số n chia hết cho 5"
//Kiểm tra số nào chia hết cho 15 thi in ra " số n chia hết cho 15" mà không in ra số chia hết cho 3 hoặc n chia hết cho 5

for ($i = 1; $i < 100; $i++) {
    echo "<br/>";
    if ($i % 15 == 0) {
        
        echo "So " . $i . " Chia hết cho 15";
    } else if ($i % 5 == 0 || $i % 3 == 0) {
        
        if ($i % 3 == 0) {
            
            echo "So " . $i . " Chia hết cho 3";
        } else {
            
            echo "So ". $i . " Chia hết cho 5 5";
        }
    }
}
echo "<br/>";


//BT1: Bình có 27 quyển sách
//Bình có số sách gấp 3 lần số sách của Minh. 
//Hỏi Bình phải chuyển cho Minh bao nhiêu quyển sách để số sách của Bình gấp đôi số sách của Minh?

$binhBook = 27;
$minhBook = $binhBook/3;
$soLanChuyen = 0;
while($binhBook != $minhBook*2){
    $binhBook--;
    $minhBook++;
    $soLanChuyen++;
}
echo "<br>";
echo "Số lần Bình phải chuyển là : " . $soLanChuyen;


//BT2 :Cho ban 2000 vnđ đi mua kẹo .Biết :
//_ 1 viên kẹo giá 200 vnđ.
//_ cứ 2 vỏ kẹo đổi được 1 viên.
//Hỏi với 2000 vnđ, ban sẽ mua đc bao nhiêu viên kẹo ?

echo "<br/>";
$candy = 0;
$shell = 0;
$money = 2000;
while($money > 0 )
{
    $candy++;
    $shell++;
    $money -=200;
}
while($shell >= 2) 
{
    $shell -=2;
    $candy ++;
    $shell ++;
}    
echo "Số kẹo mua được là :  " . $candy;
echo "<br>";
echo "Số vỏ kẹo còn lại là : " . $shell;


//BT3: Ở trung tâm giải trí Euroland có chiếc máy tự động có thể thực hiện 
//được hai loại giao dịch sau:
//1) Bỏ vào 2 euro sẽ nhận được 3 USD và được tặng thêm 1 viên kẹo.
//2) Bỏ vào 5 USD sẽ nhận được 3 euro và được tặng thêm 1 viên kẹo.
//Khi Buratino đến nghịch máy đổi tiền, cậu ta chỉ có toàn USD. 
//Khi cậu ta rời khỏi đó thì tiền đô bị hao hụt đi, không có thêm tiền euro 
//nhưng có được 50 viên kẹo.
//Hỏi Buratino đã tốn bao nhiêu USD để có được món quà 50 viên kẹo đó?

echo "<br>";
echo "<br>";
 function bt3(){
     $candy = 0;
     $euroMoney = 0;
     $dolarMoney = 0;
     while($candy < 50){
         $dolarMoney -=5;
         $candy++;
         $euroMoney +=3;
         while($euroMoney >= 2){
             $euroMoney -= 2;
             $dolarMoney += 3;
             $candy ++;
         }
     }
     return "Bạn đã tốn " . $dolarMoney . " để có được món quà 50 viên kẹo .";
 }
 echo bt3();


//BT4: Dũng có 50 viên bi gồm 2 loại: bi xanh và bi đỏ. 
//Biết rằng nếu lấy 2/5 số bi xanh cộng với 3/4 số bi đỏ thì được 27 viên bi.
// Hỏi mỗi loại có bao nhiêu viên bi?

$a = 1;
$b = 1;
$c = 50;
$d = 2 / 5;
$e = 3 / 4;
$f = 27;
$G = $a * $e - $d * $b;
$Gx = $c * $e - $f * $b;
$Gy = $a * $f - $d * $c;
$biXanh = $Gx / $G;
$biDo = $Gy / $G;
echo "<br/>";
echo "<br/>Số Bi xanh Dũng có được là : " . $biXanh;
echo "<br/>Số Bi đỏ Dũng có được là : " . $biDo;


//BT5:Một hộp có 120 viên bi gồm bốn màu : đỏ , xanh , vàng, trắng.
// Số bi màu đỏ chiếm 1/5 tổng số bi , số bi màu xanh chiếm 30% tổng số bi , còn lại là bi màu vàng và trắng .
//A) Tính số bi màu đỏ ; số bi màu xanh 
//b) Tính số bi màu vàng ; số bi màu trắng biết tỉ số giữa số bi trắng và số bi màu vàng là 3/7

$total = 120;
$red = 120 * 1/5;
$blue = 120 * 30/100;
echo "<br/>";
// Câu a :
echo "<br/> Số bi màu đỏ là : " . $red;
echo "<br/> Số bi màu xanh là : " . $blue;