<?php
$tong = 0;
for($i = 0; $i <= 100; $i++){
    if($i > 50) continue;
    $tong += $i;
}
echo "i: $i <br>";  
echo "Tong: $tong";
?><br>

<?php
$color = array('red','green','blue','yellow');
foreach($color as $value){
    echo "$value <br>"; 
}
for($i=0; $i < count($color); $i++){
    echo "$color[$i] <br>";
}