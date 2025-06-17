<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3px" align="center" cellpadding="4">
        <thead>
            <tr>
                <th colspan="4">e-notes</th>
            </tr>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>title</th>
                <th>content</th>
            </tr>
        </thead>
        <tbody>
            
            <a href="index.php">view</a>
        <?php

            $sql = "select * from enote";
            $run = mysqli_query($conn,$sql);
            $sno = 0;

            while($fetch = mysqli_fetch_array($run))
            {
                $sno++;
                ?>
                <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $fetch['gname']?></td>
                <td><?php echo $fetch['gtitle']?></td>
                <td><?php echo $fetch['gcontent']?></td>
               
                </tr>
                <?php
            }

        ?>
        </tbody>
    </table>
</body>
</html>