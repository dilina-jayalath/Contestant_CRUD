<?php
session_start();

if (isset($_POST["update"])) {

    require_once 'dbh.inc.php';

    $id = $_GET["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $region = $_POST["region"];
    $week = $_POST["week"];
    $sName = $_POST["sName"];
    $sDescription = $_POST['sDescription']; 
    $songBy = $_POST['songBy']; 
    $genres = $_POST['genres']; 
    $released = $_POST['released']; 



if (!empty($_FILES["image"]["name"])) {
    
    $imageName = $_FILES["image"]["name"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $imageExtension = explode('.', $imageName);
    $imageExtension = end($imageExtension);
    $newImageName = uniqid() . '.' . $imageExtension;
    move_uploaded_file($tmpName, '../uploads/' . $newImageName);

} else {

    $newImageName = $_POST["current_image"];
}


    $sql = "UPDATE contestant 
            SET name='$name', age=$age, region='$region', week=$week, sName='$sName',image = '$newImageName' ,sDescription='$sDescription', songBy='$songBy', genres='$genres', released='$released'
            WHERE id=$id";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: contestantsTable.php?&error=stmtfailed");
        exit();
    }
    else {
        mysqli_stmt_execute($stmt);
        header("Location: ../contestantsTable.php?error=SUCCESS");
        exit();
    }

} else {
    // Redirect to the login page or display an error message if the update button is not clicked
    header("Location: addContestants.php?error=updatebuttonnotclicked");
    exit();
}
?>
