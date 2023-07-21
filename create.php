<?php

include 'connection.php';
if(isset($_POST['submit'])) 
{
    $name =$_POST['name'];
    $age =$_POST['age'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $dob =$_POST['dob'];
    $sql=mysqli_query($conn,"INSERT INTO class(name,age,email,password,dob) VALUES('$name','$age','$email','$password','$dob')");
    if($sql)
    {
        echo'<script>alert("Registered Successfullty");window.location.href="read.php";</script>';
    }
    else{
        echo'<script>alert("spmthing went wrong")</script>';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            
                <form method="post" class="bg-danger p-3 mt-5 text-light" >
                <h1>Registration Form</h1>
                    <label>Enter name</label>
                    <input type="text" name="name" class="form-control" placeholder="name" required>
                    <label>enter age</label>
                    <input type="number" name="age" class="form-control" placeholder="age" required>
                    <label>enter email</label>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                    <label>enter password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                    <label>enterdob</label>
                    <input type="date" name="dob" class="form-control" placeholder="dob" required>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>