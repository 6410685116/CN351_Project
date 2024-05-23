<!--Nattapat Chotisen 6410685116-->

<?php

require_once 'db_model.php';

if ( isset($_POST['insert'])){
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if ( insert_data_secure($name, $surname, $email, $phone)){
        $message = "Data inserted successfully";
    }

    else {
        $message = "Error inserting data";
    }

} 
elseif ( isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if ( update_data($id, $name, $surname, $email, $phone)){
        $message = "Data updated successfully";
    }
    else {
        $message = "Error updated data";
    }
}

elseif ( isset($_POST['delete'])){
    $id = $_POST['id'];
    if ( delete_data($id)){
        $message = "Data deleted successfully";
    }
    else {
        $message = "Error deleted data";
    }
}

else if (isset($_POST["search"])){
    $name = $_POST["name"] ?? '';
    $surname = $_POST["surname"] ?? '';
    $persons = search_data($name, $surname);
    require_once 'data.view.php';
}

if ( isset($_GET['update'])) {
    $id = $_GET['update'];
    $person = get_data($id);
    require_once 'update_form.php';
} 
elseif (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $person = get_data($id);
    require_once 'delete_form.php';
}
else {
    $persons =get_all_data();
    require_once 'data.view.php';
}
?>



