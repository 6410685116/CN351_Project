<!--Nattapat Chotisen 6410685116-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Hello <?= $_POST['fname']?> <?= $_POST['lname'] ?><br>
Your password is: <?= $_POST['password']?><br>
Your gender is: <?= $_POST['gender']?><br>
You will receive newletter via:
<?php //= $_POST['newsletter'] ?? '' ?><!----><?php //= $_POST['email'] ?? '' ?><!--<br>-->
<?php
if (isset($_POST['receive'])){
     foreach ($_POST['receive'] as $value) {
         echo $value . ' ';
     }
 }
else {
    echo 'No newsletter';
}
?><br>
Your car is:
<?php //= $_POST['car']?><!--<br>-->
<?php
foreach ($_POST['car'] as $value) {
        echo $value . ' ';
}
?><br>
Your address is: <br>
<?= nl2br($_POST['address']) ?><br>

</body>
</html>

