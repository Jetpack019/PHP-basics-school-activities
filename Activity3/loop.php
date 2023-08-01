<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>loop</title>
</head>
<!-- CSS Link -->
<link rel="stylesheet" href="style.css">

<body>
    <h1>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];

        $sort_inputs = array($a, $b, $c, $d, $e);
        sort($sort_inputs);
        echo ("The number in ascending order are: "), implode(",", $sort_inputs), "<br>";

        rsort($sort_inputs);
        echo ("The number in descending order are: "), implode(",", $sort_inputs), "<br>";
        ?>
    </h1>

</body>

</html>