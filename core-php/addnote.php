<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to php e-notes</h1>

     <form method="post">
        <table>
            <tr>
                <td>Enter php E-Note Genretor Name:</td>
                <td><input type="text" name="gname"></td>
            </tr>
            <tr>
                <td>Enter php E-note title:</td>
                <td><input type="text" name="gtitle"></td>
            </tr>
            <tr>
                <td>Enter php E-note content:</td>
                <td><textarea name="gcontent" rows="3" cols="20"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="addnote"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['addnote'])) {
        $gname = $_POST['gname'];
        $gtitle = $_POST['gtitle'];
        $gcontent = $_POST['gcontent'];

        $sql = "INSERT into enote (gname,gtitle,gcontent) VALUES ('$gname','$gtitle','$gcontent')";
        $run = mysqli_query($conn,$sql);

        if($run)
        {
            header("location:index.php");
        }
    }

    ?>
</body>
</html>