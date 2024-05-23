<!--Nattapat Chotisen 6410685116-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Form</title>
    <style>
        div{
            margin-left: 1em;

        }
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: .5em;
            margin: 1em;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <form action="person2.php" method="post">
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <tr>
                <td><?= $person['id']; ?></td>
                <td><?= $person['name'] . " " . $person['surname']; ?></td>
                <td><?= $person['email']; ?></td>
                <td><?= $person['phone']; ?></td>
            </tr>
        </table>

    <input type="hidden" name="id" value="<?= $person['id']; ?>">
    <input type="hidden" name="delete" value="1">

    <div>
        <input type="submit">
        <a href="person2.php">Cancel</a>
    </div>

    </form>

</body>
</html>

