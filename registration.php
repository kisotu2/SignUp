<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Sign Up</title>
    </head>
    <body>

    <style>
        body {
            background-color: beige;

        }
        body .main{
            background-color:gray;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius: 10px;
        }
        .container{
            text-align: center;
        }
        .container h1{
            font-family: Arial,  sans-serif;
            color: black;
        }
        .container h3{
            color: orange;
        }
       

    </style>
        <div>
            <?php
            if(isset($_POST['create'])){
               $Firstname = $_POST['firstname'];
               $Lastname = $_POST['lastname'];
               $Email = $_POST['email'];
               $Phonenumber = $_POST['phonenumber'];
               $Password = $_POST ['password'];

               echo $Firstname . "" . $Lastname . "" . $Email . ""  . $Phonenumber ."". $Password ."";
            }
            ?>
        </div>
        <div class="main">
            <div class = "container">
       <h1>Registration Form</h1>
        <h3>Please fill in the details as required</h3>

        <form action="registration.php" action = "post">

        <label for="firstname"><b>First Name</b></label><br>
        <input type="text" id="firstname" name="firstname"required><br><br>

        <label for="lastname"><b>Last Name</b></label><br>
        <input type = "text" id="lastname" name =  "lastname" required><br><br>

        <label for="email"><b>Email Address</b></label><br>
        <input type="email" id="email" name="email"required><br><br>

        <label for="phonenumber"><b>Phone Number</b></label><br>
        <input type="int" id="phonenumber" name="phonenumber"required><br><br>

        <label for="password"><b>Password</b></label><br>
        <input type = "password" id="password" name =  "password" required><br><br>

        
        <input  type="submit" name="create" value="Sign Up">
     

        </div>
        </form>
</div>
    </body>
</html>