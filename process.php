<?php

$error = "";
$showBill = false;


if (isset($_POST['calculate'])) {
    echo "The input for the first kwh" . $_POST['first'];

    $firstkwh = $_POST['first'];
    $secondkwh = $_POST['second'];
    $thirdkwh = $_POST['third'];
    $fourthkwh = $_POST['fourth'];
    $fifthkwh = $_POST['fifth'];



    if ($firstkwh == "")
        $firstkwh = 0;
    if ($secondkwh == "")
        $secondkwh = 0;
    if ($thirdkwh == "")
        $thirdkwh = 0;
    if ($fourthkwh == "")
        $fourthkwh = 0;
    if ($fifthkwh == "")
        $fifthkwh = 0;


if($firstkwh < 0 || $secondkwh < 0 || $thirdkwh < 0 || $fourthkwh < 0 || $fifthkwh < 0){
    $error = "<br>Invalid input. Please enter a valid number.";
}else if($firstkwh > 200 )
       $error = "<br>Invalid input. The first kWh should not exceed 200.";
 else if($secondkwh > 100 )
       $error = "<br>Invalid input. The second kWh should not exceed 100.";
 else if($thirdkwh > 300 )
       $error = "<br>Invalid input. The third kWh should not exceed 300.";
 else if($fourthkwh > 300 ) 
       $error = "<br>Invalid input. The fourth kWh should not exceed 300.";

  else if($firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh == 0)
        $error = "<br>Invalid input. Please enter a valid number barua!!!";
else {

    $firstcharge = $firstkwh * 0.218;
    $secondcharge = $secondkwh * 0.344;
    $thirdcharge = $thirdkwh * 0.516;
    $fourthcharge = $fourthkwh * 0.546;
    $fifthcharge = $fifthkwh * 0.571;

$totalkwh = $firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh;
$totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge;

if($totalkwh> 600){
    $sst = $totalcharge * 0.06;
    $totalcharge += $sst;

} else{
    $sst = 0;
}
$totalBill = $totalcharge + $sst;
$showBill = true;

}
}
?>