<?php 
include_once("connect.php");
if($_POST["submit"]){
    $fullName = $_POST["fullname"];
    $fileName = $_FILES["Image"]["name"];
    $extension = pathinfo($Image,PATHINFO_EXTENSION);
    $allowed = array("jpeg","jpg","png","gif","JPG");
    $tempName = $_FILES["Image"]["tmp_name"];
    $targetPath = "uploads/".$Image;

    if(in_array($extension,$allowed)){
        if (move_uploaded_file($tempName,$targetPath)){
            $query = "INSERT INTO images (name,file_name) VALUES ('$fullName','$fileName')";
            if(mysqli_query($conn,$query)){
              header("location : index2.php");

            }else {
                echo "something is wrong with your image";
            }
    }
    else{
        echo"Fle not uploaded]";
}
    }
    else{
        echo "Your files are not allowed";
    }

}
?>