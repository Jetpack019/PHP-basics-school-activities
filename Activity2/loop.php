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
        $x = $_POST['x'];
        $y = $_POST['y'];
        for ($i = 0; $i < $x; $i++) {
            echo ($i . "<br>");
        }

        while ($y > 0) {
            echo ($y . "<br>");
            $y--;
        }

        ?>
    </h1>

</body>

</html>