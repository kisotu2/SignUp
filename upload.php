<?php
include_once("connect.php");

if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $fileName = $_FILES["image"]["name"];
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "uploads/" . $fileName;

    if (in_array(strtolower($extension), $allowed)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "INSERT INTO images (name, file_name) VALUES ('$fullName', '$fileName')";
            if (mysqli_query($conn, $query)) {
                header("Location: index2.php");
                exit;
            } else {
                echo "Something is wrong with your image upload.";
            }
        } else {
            echo "File not uploaded.";
        }
    } else {
        echo "Your file type is not allowed.";
    }
}
?>
