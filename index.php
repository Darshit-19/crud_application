<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="index_styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Homepage</h1>
            <p>
                <a href="add.php" class="button">Add New Data</a>
            </p>
        </div>
    </header>
    
    <div class="container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch the next row of a result set as an associative array
                while ($res = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['age']."</td>";
                    echo "<td>".$res['email']."</td>";   
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
                    <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
