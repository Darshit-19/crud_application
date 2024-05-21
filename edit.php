<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #333;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        a:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h2>Edit Data</h2>
    <p><a href="index.php">Home</a></p>
    <form name="edit" method="post" action="editAction.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>