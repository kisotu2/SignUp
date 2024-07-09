<!DOCTYPE html>
<html>
    <head>
        <title>Images</title>
        <link rel="stylesheet"href = "styles2.css">
    </head>
    <body>
        <div class="image_container">
            <?php 
            include("connect.php");
            $query = "SELECT * FROM images";
            $result = mysqli_query($conn,$query);
            if($result->num_rows>0){
                while( $row(mysqli_fetch_array($result))){
                    $name = $row["name"];
                    $fileName = $row["fileName"];
                    $imageUrl = "uploads/".$fileName;
                    echo "<div class = 'profile'>";
                    echo "<img src = `$imageUrl` >";
                    echo "<h3>$name</h3>";
                    echo "</div>";

                }
            }
            ?>
        </div>
    </body>
</html>