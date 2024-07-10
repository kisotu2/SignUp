<!DOCTYPE html>
<html>
    <head>
        <title>Images</title>
        <link rel="stylesheet" href="styles2.css">
    </head>
    <body>
        <div class="search-container">
            <input type="text" id="searchBar" onkeyup="searchNames()" placeholder="Search for names..">
        </div>
        <div class="image_container">
            <?php 
            include("connect.php");
            $query = "SELECT * FROM images";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row["name"];
                    $fileName = $row["file_name"];
                    $imageUrl = "uploads/" . $fileName;
                    echo "<div class='profile'>";
                    echo "<img src='$imageUrl' alt='$name'>";
                    echo "<h3>$name</h3>";
                    echo "</div>";
                }
            } else {
                echo "<p>No images found.</p>";
            }
            ?>
        </div>
        <script>
            function searchNames() {
                var input, filter, imageContainer, profiles, h3, i, txtValue;
                input = document.getElementById('searchBar');
                filter = input.value.toUpperCase();
                imageContainer = document.getElementsByClassName('image_container')[0];
                profiles = imageContainer.getElementsByClassName('profile');

                for (i = 0; i < profiles.length; i++) {
                    h3 = profiles[i].getElementsByTagName('h3')[0];
                    txtValue = h3.textContent || h3.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        profiles[i].style.display = "";
                    } else {
                        profiles[i].style.display = "none";
                    }
                }
            }
        </script>
        <?php include("footer.php");?>
    </body>
</html>
