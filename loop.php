<h3>For Loop</h3>
<?php 
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
?>
<!-- การทำลูป เรื่อยจนน้อยกว่า 10 -->
<h3>While Loop</h3>
<?php 
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
?>

<!--การทำลป ทำก่อน ค่อยเช็คลูป -->
<h3>Do While Loop</h3>
<?php 
$i = 0;
do {
    echo $i;
    $i++;
}  while ($i < 10);
?>
