<?php
$unit=$_POST["t1"];
$bill;
if($unit>=1 && $unit<=100)
{
    $bill=$unit*4;
    echo "Your bill is ".$bill;
}
else if($unit>100 && $unit<=200)
{
    $bill=400+($unit-100)*5;
    echo "Your bill is ".$bill;
}
else {
    $bill=400+500+($unit-200)*6;
    echo "Your bill is ".$bill;
}
?>