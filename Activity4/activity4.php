<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>4C Arrays</title>
</head>

<body>
    <h1 style="
    background-color:palevioletred;
    border: 5px dashed black;
    text-align: center;
    padding: 10px;
    margin:20px;">
        <form action="activity4.php" method="post">
            <input type="text" name="firstinput" id="input1"><br>
            <input type="submit" value="quindot">
        </form>

        <form action="activity4.php" method="post">
            <input type="submit" value="uindot" name="sad">
        </form>
    </h1>
    <h1 style="
     background-color:aquamarine;
    border: 5px dashed black;
    text-align: center;
    padding: 10px;
    margin:20px;">
        Hello 4C <br>
        <?php
        session_start();
        if (isset($_POST["sad"])) {
            unset($_SESSION["agh1"]);
        }
        if ((isset($_SESSION["agh1"]))) {
            if ($_POST["firstinput"] != NULL) {
                array_push($_SESSION["agh1"], $_POST["firstinput"]);
            }
        } else {
            $_SESSION["agh1"] = array(
                "sama ng loob",
                "itlog",
                "maling",
                "hotdog",
                "french toast", "gin"
            );
        }
        foreach ($_SESSION["agh1"] as $i) {
            echo $i, "<br>";
        }
        ?>
    </h1>
</body>

</html>