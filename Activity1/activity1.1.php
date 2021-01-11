<?php
session_start();

$unit = 365;
$result1;

if ($unit <= 50){
    $result1 = "3.50/unit";
}else if ($unit > 50 && $unit <= 100 ){
    $result1= "4.0/unit";
}else if ($unit > 100 && $unit <= 200){
    $result1 = "5.20/unit";
}else if ($unit > 200){
    $result1 = "6.50/unit";
}
echo "<h1>Decision Making</h1>";
echo "Result: $result1";

if (isset($_POST['operation'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calculate = $_POST['calculates'];

    switch ($_POST['operation']){
        case "add":
            $calculate = $num1 + $num2;
        break;
        case "subtract":
            $calculate = $num1 - $num2;
        break;
        case "multiply":
            $calculate = $num1 * $num2;
        break;
        case "divide":
            $calculate = $num1 / $num2;
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
button{
    width: 100px;
}
</style>
<body>
<form action="activity1.1.php" method="POST">

    <h1>Simple Calculator</h1>
    <label for="num1">First Number: </label>
    <input type="number" name="num1"><br>
    <br>
    <label for="num2">Second Number: </label>
    <input type="number" name="num2"><br>
    <br>
    <label for="result:">Result</label>
    <input type="text" name="calculates" value="<?php echo (isset($calculate))?$calculate: ""; ?>" readonly><br>
    
    <br>
    <button type="submit" value="add" name="operation">+</button>
    <button type="submit" value="subtract" name="operation">-</button>
    <button type="submit" value="multiply" name="operation">*</button>
    <button type="submit" value="divide" name="operation">/</button>
</form>
<?php 

?>



</body>
</html>