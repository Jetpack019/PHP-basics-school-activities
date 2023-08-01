<?php


    $x   = rand(1, 100);
    $num = '';

    if (isset($_POST['submit'])) {
     $num = $_POST['num']; // Add this to set value for $num variable
            if ($num < $x) 
            {
                echo " Your number is lower! <br />";
            } elseif ($num > $x) 
                {
                echo " Your number is higher! <br />";
            } elseif ($num == $x) 
                {
                echo " Congratulations! You guessed the hidden number. <br />";
            } else 
                {
                echo " You never set a number! <br />";
            }
    }
   
?>
<p>
<form action="guess_input.php" method="post">
    <input type="text" name="num">
    <button type="submit" name="submit">Guess</button>

</form>
</p>