<!-- Write a registration form that validates user input (e.g., email, password) using regular
expressions before submission. -->
<?php
if (isset($_POST['Register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<div class='output'>";
    echo "Email: ". $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Simple Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #eef2f7;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding-top: 50px;
        margin: 0;
        height: 100vh;
    }
    form {
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        width: 320px;
    }
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin: 10px 0 20px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 15px;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
        outline: none;
    }
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .output {
        width: 320px;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #dff0d8;
        border: 1px solid #3c763d;
        border-radius: 5px;
        color: #3c763d;
        font-weight: bold;
        box-sizing: border-box;
    }
</style>
</head>
<body>

<form method="post">
    Email: <input type="text" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="Register" value="Register">
</form>

</body>
</html>

