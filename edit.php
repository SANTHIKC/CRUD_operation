<?php
include 'connection.php';
$id =$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM class WHERE id='$id'");
$data=mysqli_fetch_assoc($query);
if(isset($_POST['update']))
{
    $name =$_POST['name'];
    $age =$_POST['age'];
    $email =$_POST['email'];
    $dob =$_POST['dob'];
    
    $sql =mysqli_query($conn,"UPDATE class SET name='$name', age='$age',email='$email',dob='$dob' WHERE id='$id'");
    if($sql)
    {
        echo'<script>alert("update successfully");window.location.href="read.php";</script>';
    }
    else
    {
        echo '<script>alert("somthing error");</script>';
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
            
                <form method="post" class="bg-dark p-3 mt-5 text-light" >
                <h1>Registration Form</h1>
                    <label>Enter name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>" >
                    <label>enter age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $data['age'];?> ">
                    <label>enter email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email'];?>">
                    <label>enterdob</label>
                    <input type="date" name="dob" class="form-control" value="<?php echo $data['dob'];?>">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <input type="submit" value="update" name="update" class="btn btn-primary mt-2">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>