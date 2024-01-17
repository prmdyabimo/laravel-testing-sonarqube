<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sonarqube</title>
</head>

<body>

    <h1>Hello Sonarqube</h1>

</body>

</html>

<?php

$id = $_GET['id'];
mysql_connect('localhost', $username, $password) or die('Could not connect: ' . mysql_error());
mysql_select_db('myDatabase') or die('Could not select database');

$result = mysql_query('SELECT * FROM myTable WHERE id = ' . $id); // Sensitive, could be susceptible to SQL injection

while ($row = mysql_fetch_object($result)) {
    echo $row->name;
}

?>
