<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<?php

include_once("connection.php");

$sql = "select * from users";

$getUsers=$conn->prepare($sql);
$getUsers->execute();
$Users= $getUsers->fetchAll();

?>


    <h2>Users</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

    <?php
    foreach($getUsers as $user){
        echo"<tr>";
        echo "td".$user["ID"]."</td>";
        echo "td".$user["Username"]."</td>";
        echo "td".$user["Password"]."</td>";
        echo"</tr>";
    

    }
    ?>
</table>
<br>
<a href="index.php">Add User</a>

</body>
</html>


