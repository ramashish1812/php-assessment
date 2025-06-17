<?php include "connection.php";
echo "press 1 for generate Note <br> press 2 for view Note <br> press 3 For exit" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <table>
            <tr>
                <td>User plases Enter your choice:</td>
            </tr>
            <tr>
                <td><input type="number" name="choice" placeholder="1/2/3" min="1" max="3"></td>
            </tr>
            <tr>
                <td><input type="submit" name="choicebtn"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['choicebtn'])) {
        $choice = $_POST['choice'];

        switch ($choice) {
            case '1':
                header("location:addnote.php");
                break;

            case '2':
                header("location:viewnote.php");
                break;

            case '3':
                header("location:index.php");
                break;

            default:
                echo "user plaese enter vaild choice...!";
                break;
        }
    }

    ?>

</body>

</html>