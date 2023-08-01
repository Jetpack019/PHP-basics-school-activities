<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>loop</title>
</head>
<!-- CSS Link -->
<link rel="stylesheet" href="style.css">
<title>Grade Calculator</title>

<body>
    <form method="post">
        <br>First Number: <input type="text" name="f_num"><br>
        <br>Second Number: <input type="text" name="s_num"><br>
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="*">
        <input type="submit" name="op" value="%">
    </form>

</body>

</html>

<?php
session_start();
if (isset($_POST['op'])) {
    $first_number = $_POST['f_num'];
    $second_number = $_POST['s_num'];
    $operation = $_POST['op'];
    $ans = 0;
    if ($operation == "+") {
        // catch error value
        if (!isset($first_number) || trim($first_number) == '' || !isset($second_number) || trim($second_number) == '') {
            echo "Result: ", "0";
        } else {
            echo "Result: ", $ans = $first_number + $second_number;
        }
    } else if ($operation == "-") {

        if (!isset($first_number) || trim($first_number) == '' || !isset($second_number) || trim($second_number) == '') {
            echo "Result: ", "0";
        } else {
            echo "Result: ", $ans = $first_number - $second_number;
        }
    } else if ($operation == "/") {

        if (!isset($first_number) || trim($first_number) == '' || !isset($second_number) || trim($second_number) == '') {
            echo "Result: ", "0";
        } else {
            echo "Result: ", $ans = $first_number / $second_number;
        }
    } else if ($operation == "*") {

        if (!isset($first_number) || trim($first_number) == '' || !isset($second_number) || trim($second_number) == '') {
            echo "Result: ", "0";
        } else {
            echo "Result: ", $ans = $first_number * $second_number;
        }
    } else if ($operation == "%") {

        if (!isset($first_number) || trim($first_number) == '' || !isset($second_number) || trim($second_number) == '') {
            echo  "Result: ", "0";
        } else {
            echo  "Result: ", $ans = $first_number % $second_number;
        }
    } else {
        echo "Invalid Operator";
    }
}

?>