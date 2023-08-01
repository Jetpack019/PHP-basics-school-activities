<!DOCTYPE html>
<html>

<head>
</head>


<body>


    <?php
    session_start();
    if (!isset($_SESSION['val'])) {
        $_SESSION['val'] = rand(0, 100);
    }
    $val = $_SESSION['val'];
    ?>
</body>

</html>