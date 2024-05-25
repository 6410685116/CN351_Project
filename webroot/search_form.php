<!--Nattapat Chotisen 6410685116-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
</head>
<body>
    <!-- <form action="person2.php" method="post"> -->
    <form action="person2.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"><br>
        
        <label for="surname">Surname: </label>
        <input type="text" name="surname" id="surname"><br>
        
       
        <input type="hidden" name="search" value="1"> 
        <input type="submit" value="submit">
        <input type="reset">
    </form>
</body>
</html>