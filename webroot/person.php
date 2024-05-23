<!--Nattapat Chotisen 6410685116-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Welcome to my website!"; ?></title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>
<body>
<?php
require 'data.inc.php';
echo "
<table>
    <tr>
        <th>ID</th>
        <th>Full name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>";
foreach ( $persons as $person ) {
    echo "<tr>";
    echo "<td>" . $person['id'] . "</td>\n";
    echo "<td>" . $person['name'] . " " . $person['surname'] . "</td>\n";
    echo "<td>" . $person['email']. "</td>\n";
    echo "<td>" . $person['phone'] . "</td>\n";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>