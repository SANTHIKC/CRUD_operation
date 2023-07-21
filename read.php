<?php
include 'connection.php';
$query = mysqli_query($conn,"SELECT * FROM class");
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
            <div class="clo-4">
                <table class="table table-bordered table-dark text-white mt-5 "style ="width:50%">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>age</th>
                            <th>email</th>
                            <th>password</th>
                            <th>dob</th>
                            <th colspan="2" style="text-align:center">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($query))
                        {
                            
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id'];?>" class = "btn btn-primary">Edit</a></td>
                            <td><a href ="delete.php?id=<?php echo $row['id'];?>" class= "btn btn-danger">Delete</a></td>
                        </tr>
                       <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>