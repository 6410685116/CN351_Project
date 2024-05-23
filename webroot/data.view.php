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
        padding: .5em;
        margin: auto;
    }
    .text-center{
        text-align: center;
    }

</style>
<body>
<h1 class="text-center">Persons Table</h1>

<?php
if (isset($message))
    echo "<p class=\"text-center\">$message</p>"
?>
<p class="text-center">
    <a href="person2.php">Home</a>
    <a href="person_form.php">Add new person</a>
    <a href="search_form.php">Search</a>

</p>

<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <td>Update</td>
        <td>Delete</td>
    </tr>
    <?php foreach($persons as $person): ?>
        <tr>
            <td><?= $person['id']; ?></td>
            <td><?= $person['name'] . " " . $person['surname']; ?></td>
            <td><?= $person['email']; ?></td>
            <td><?= $person['phone']; ?></td>
            <td><a href="person2.php?update=<?= $person['id']; ?>">Update</td>
            <td><a href="person2.php?delete=<?= $person['id']; ?>">Delete</td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
