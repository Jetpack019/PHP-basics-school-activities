<!DOCTYPE html>
<html>

<head>
</head>
<!-- CSS Link -->
<link rel="stylesheet" href="style.css">

<body>
    <?php
    $jadeross = "Jade Ross D. Banag";
    $raymart = "Raymart D. Constantino";
    echo '<h1>PHP Activity 1 </h1>', "<br>";
    echo '<h1>ANG GALING yesss </h1> ', "<br>";
    echo '<h2>Group: </h2> ';
    echo $jadeross, "<br>";
    echo $raymart, "<br>";
    ?>

    <?php

    echo 'Lakas ni sir alex ', "<br>";
    echo '<img src="Capture.PNG"></img> ', "<br>";
    echo '<h1>Sheeeeeeeeeeeeesh </h1> ', "<br>";

    echo '<h4>Input your size: </h4> ';
    echo '<input class="input_box"  required placeholder="team 2 inches" class="box">';

    echo '<h4>Input your fave position: </h4> ';
    echo '<input  class="input_box" required placeholder="team side" class="box">';

    echo '<h4>Input your body count: </h4> ';
    echo '<input class="input_box"  required placeholder="team 69" class="box">';
    ?>

    <?php

    $x = $_POST["x"];
    $y = $_POST["y"];

    if ($x > $y) {
        echo $x . "is greater than " . $y;
    } elseif ($x == $y) {
        echo $x . "and" . $y . "are equals";
    } else {
        echo $x . "is less than " . $y;
    }

    ?>

</body>

</html>