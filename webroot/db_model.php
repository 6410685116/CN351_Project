<!--Nattapat Chotisen 6410685116-->
<?php

$sever = 'mariadb';
$username = 'root';
$password = 'secret';
$database = 'registration';

function db_connect($sever, $username, $password, $database)
{
    $link = mysqli_connect($sever, $username, $password, $database);
    if ( ! $link){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $link;
}
$link = db_connect($sever, $username, $password, $database);

function get_all_data()
{
    global $link;
    $query = 'select * from persons order by id desc' ;
    $result = mysqli_query($link ,$query);
    if (! $result){
        die('Query failed: ' . mysqli_connect_error($link));
    }
    $persons =mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $persons;
}

function insert_data_secure($name, $surname, $email, $phone)
{
    global  $link;
    //Create a prepared statement
    $stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO persons (name, surname, email, phone)
              VALUES (?, ?, ?, ?)";
    mysqli_stmt_prepare($stmt, $query);
    //bind parameters for makers
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $surname, $email, $phone);
    // execute query
    return mysqli_stmt_execute($stmt);//Return True or False
}
function insert_data($name, $surname, $email, $phone)
{
    global $link;
    $query = "INSERT INTO persons (name, surname, email, phone)
              VALUES ('$name', '$surname', '$email', '$phone')";
    $result = mysqli_query($link, $query);
    if ( !$result){
        die('Query failed: ' . mysqli_error($link));
    }
    return $result;
}

function get_data($id)
{
    global  $link;
    //Create a prepared statement
    $stmt = mysqli_stmt_init($link);
    $query = "select * from persons Where id = ?";
    mysqli_stmt_prepare($stmt, $query);
    //bind parameters for makers
    mysqli_stmt_bind_param($stmt, 'i', $id);
    // execute query
    if(! mysqli_stmt_execute($stmt)){
        die("Query failed: " . mysqli_error($link));
    }
    $result = mysqli_stmt_get_result($stmt);
    $person = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $person;
}

function update_data($id, $name, $surname, $email, $phone)
{
    global  $link;
    //Create a prepared statement
    $stmt = mysqli_stmt_init($link);
    $query = "UPDATE persons
              SET name=?, surname=?, email=?, phone=?
              WHERE id =?";
    mysqli_stmt_prepare($stmt, $query);
    //bind parameters for makers
    mysqli_stmt_bind_param($stmt, 'ssssi', $name, $surname, $email, $phone, $id);
    return mysqli_stmt_execute($stmt);//Return True or False
}
function delete_data($id)
{
    global  $link;
    $stmt = mysqli_stmt_init($link);
    $query = "DELETE FROM persons WHERE id = ? ";
    // $query = "DELETE FROM persons WHERE id =?";
    mysqli_stmt_prepare($stmt, $query);
    //bind parameters for makers
    mysqli_stmt_bind_param($stmt, 'i', $id);
    if(! mysqli_stmt_execute($stmt)){
        die("Query failed: " . mysqli_error($link));
    }
    $result = mysqli_stmt_get_result($stmt);
    return $result; // Return True or false 
}
function search_data($name, $surname){
    global $link;
    $query = "SELECT * FROM persons WHERE name LIKE '$name' OR surname LIKE '$surname'";
    $result = mysqli_query($link, $query);
    if (! $result ){
        die('Query failed: ' . mysqli_connect_error($link));
    }
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $persons;
}
?>
