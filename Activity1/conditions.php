<!DOCTYPE html>
<html>

<head>
</head>


<body>

    <?php

    $x = $_POST["x"];
    $y = $_POST["y"];

    if ($x > $y) {
        echo $x . " is greater than " . $y;
    } elseif ($x == $y) {
        echo $x . " and " . $y . " are equals ";
    } else {
        echo $x . "is less than " . $y;
    }

    switch ($x) {
        case 10:
            echo ("<br> the value of x is 10");
            break;
        case 20:
            echo ("<br> the value of x is 20");
        default:
            echo ("<br>ok");
    }


    ?>

</body>

</html>