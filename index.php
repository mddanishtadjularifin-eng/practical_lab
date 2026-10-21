<?php
include 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATE HOUSE ELECTIRICITY BILL</title>
</head>

<body>
    <h1>Calculate House Electricity Bill </h1>
    <?php if ($error): ?>
        <h3 style="color: red;"><?php echo $error; ?></h3>
    <?php endif; ?>
    <div>
        <table border="2">
            <tr>
                <th> Block Tariff (per month) </th>
                <th> Unit </th>
                <th> Rate </th>
            </tr>
            <tr>
                <td> For the first 200kwh (1-200 kWh) per month</td>
                <td> sen/kwh </td>
                <td> 0.218 </td>
            </tr>
            <tr>
                <td> For the next 100 kWh (201 – 300 kWh) per month</td>
                <td> sen/kwh </td>
                <td> 0.344 </td>
            </tr>
            <tr>
                <td> For the next 300 kWh (301 – 600 kWh) per month</td>
                <td> sen/kwh </td>
                <td> 0.516 </td>
            </tr>
            <tr>
                <td> For the next 300 kWh (601 – 900 kWh) per month</td>
                <td> sen/kwh </td>
                <td> 0.546</td>
            </tr>
            <tr>
                <td> For the next kWh (901 kWh onwards) per month</td>
                <td> sen/kwh </td>
                <td> 0.571</td>
            </tr>
            <tr>
                <td colspan="3"> The minimum monthly chafe is RM300 </td>

            </tr>
        </table>
        <br>
        <div>
            <form action="" method="post">
                <label for=""> Enter your first 200 kWh (1 - 200 kWh) per month</label>
                <input type="number" name="first" id="">

                <br>

                <label for=""> Enter next 100 kWh (201 – 300 kWh) per month</label>
                <input type="number" name="second" id="">

                <br>

                <label for=""> Enter next 300 kWh (301 – 600 kWh) per month</label>
                <input type="number" name="third" id="">

                <br>

                <label for="">Enter next 300 kWh (601 - 900 kWh) per month</label>
                <input type="number" name="fourth" id="">

                <br>

                <label for="">Enter next kWh (901 kWh onwards) per month</label>
                <input type="number" name="fifth" id="">

                <br>
        </div>
        <input type="Submit" name="calculate" value="Calculate Bill">
        <input type="Submit" name="reset" value="Reset">
        </form>
    </div>

</body>

</html>

<?php
if ($showBill) {

    echo "<hr>";
    echo "<h1> Your Electricity Bill </h1>";

    echo "First input: " . $firstkwh . "* 0.218 = RM" . $firstcharge . "<br>";
    echo "Second input: " . $secondkwh . "* 0.344 = RM" . $secondcharge . "<br>";
    echo "Third input: " . $thirdkwh . "* 0.516 = RM" . $thirdcharge . "<br>";
    echo "Fourth input: " . $fourthkwh . "* 0.546 = RM" . $fourthcharge . "<br>";
    echo "Fifth input: " . $fifthkwh . "* 0.571 = RM" . $fifthcharge . "<br>";

    echo "Total kWh: " . $totalkwh . "kWh<br>";
    echo "Total charge: RM" . $totalcharge . "<br>";      
    echo "Total SST: RM" . $sst . "<br>";
    echo "Total Bill: RM" . $totalBill . "<br>";
      
}


?>