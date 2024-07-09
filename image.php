<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="styles2.css">
    </head>
    <body>
        <div class="main-container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="Name">Name:</label><br>
        <input type="text" id="Name" name = "fullname" placeholder="Full Name"id = ""><br>

        <label for="Image">Image</label><br>
        <input type="file" id="Image" name = "image" id = ""><br>
        <button type="submit" value="Upload" name="submit">Upload</button>
        </div>
        </form>
    </body>
</html>