<?php
session_start();

function calculate($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            return "Invalid operator";
    }
}

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $result = calculate($num1, $num2, $operator);

    $_SESSION['result'] = $result;
    $_SESSION['history'][] = array('num1' => $num1, 'num2' => $num2, 'operator' => $operator, 'result' => $result);
}

if (isset($_POST['clear_history'])) {
    unset($_SESSION['history']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <h1>Calculator</h1>
    <form method="post">
        <input type="text" name="num1" placeholder="Number 1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2">
        <input type="submit" value="Calculate">
    </form>
    <?php if (isset($_SESSION['result'])) : ?>
        <h2>Result: <?php echo $_SESSION['result']; ?></h2>
    <?php endif; ?>
    <?php if (isset($_SESSION['history'])) : ?>
        <h2>History</h2>
        <table>
            <thead>
                <tr>
                    <th>Number 1</th>
                    <th>Operator</th>
                    <th>Number 2</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['history'] as $calculation) : ?>
                    <tr>
                        <td><?php echo $calculation['num1']; ?></td>
                        <td><?php echo $calculation['operator']; ?></td>
                        <td><?php echo $calculation['num2']; ?></td>
                        <td><?php echo $calculation['result']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post">
            <input type="submit" name="clear_history" value="Clear History">
        </form>
    <?php endif; ?>
</body>

</html>