<?php

// Name: Jade Ross D. Banag
// BSCpE-4C
// Date: 24/03/2023

session_start();

function calculate($input)
{
    if ($input !== "") {
        // Check if user input is valid
        if (preg_match('/^[\d\+\-\*\/\.]+$/', $input)) {
            // Check if user input ends with an operator
            if (preg_match('/[\+\-\*\/]$/', $input)) {
                return "Invalid input";
            }
            // Check if division by zero
            if (preg_match('/\/0/', $input)) {
                return "Cannot divide by zero";
            }
            // Check if there are two or more consecutive operators
            if (preg_match('/[\+\-\*\/]{2,}/', $input)) {
                return "Invalid input";
            }
            // Check if there are two or more consecutive decimal points
            if (preg_match('/\.{2,}/', $input)) {
                return "Invalid input";
            }
            eval("\$result = $input;");
            return $result;
        } else {
            return "Invalid input";
        }
    } else {
        return "";
    }
}

if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = "";
}

if (isset($_POST['add'])) {
    $button_value = $_POST['add'];

    // Check if button value is a valid number or operator
    if (is_numeric($button_value) || in_array($button_value, array("+", "-", "*", "/", "."))) {
        // Clear invalid input text when another button is clicked
        if ($_SESSION['result'] == "Invalid input") {
            $_SESSION['result'] = "";
        }
        $_SESSION['result'] .= $button_value;
    }
}

if (isset($_POST['calculate'])) {
    $display = $_SESSION['result'];
    if ($display === "") {
        $_SESSION['result'] = "";
    } else {
        $_SESSION['result'] = calculate($display);
    }
}

if (isset($_POST['clear'])) {
    unset($_SESSION['result']);
    $_SESSION['result'] = "";
}

$buttons = array("1", "2", "3", "+", "-", "4", "5", "6", "/", "*", "7", "8", "9", "0",  ".");

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Web Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>PHP Web Calculator</h1>
    <form method="post">
        <input type="text" name="display" id="display" value="<?php echo $_SESSION['result']; ?>" readonly><br><br>
        <?php foreach ($buttons as $button) { ?>
            <table>
                <tr>
                    <button type="submit" name="add" value="<?php echo $button; ?>"><?php echo $button; ?></button>
                </tr>
            </table>

        <?php } ?>
        <table>
            <tr>
                <button type="submit" name="clear" value="Clear">Clear</button>
                <button type="submit" name="calculate" value="Calculate">=</button>
            </tr>
        </table>

    </form>
</body>

</html>