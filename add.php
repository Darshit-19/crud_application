<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
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
    <h2>Add Data</h2>
    <p><a href="index.php">Home</a></p>
    <form action="addAction.php" method="post" name="add">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>