<?php
$guess = 0;

session_start();
if (!isset($_SESSION['val'])) {
    $_SESSION['val'] = rand(0, 100);
}
$val = $_SESSION['val'];
?>

<?php
echo $val;

if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];

    if ($guess == $val) {
        echo "<h1> CONGRATS! </h1>";
        session_destroy();
        $_SESSION['val'] = rand(0, 100);
    } elseif ($guess > $val) {
        echo "<h1> Lower  </h1>";
    } else {
        echo "<h1> High  </h1>";
    }
} else {
}
?>

<form action="" method="post">
    Guess the numebr from 0-100: <input type="number" name="guess" pattern="[0-0=9]"><br>