<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
    <div class="row">
       <div class="col-2"></div> 
       <div class="col-6">
        <form method="POST" class="bg-dark p-3 mt-4 text-light">
          <h2>Biodata</h2>
          <div class="row">
          <div class="col-md-6">
          <input type="text" class="form-control" placeholder=" name" aria-label="First name" name="name" required>
          </div>
          <div class="col-md-4">
         <input type="number" class="form-control" placeholder="age" aria-label="age" name="age" required>
       </div>
       </div><br>
       
  <div class="col-md-10">
    <input type="email" class="form-control" placeholder=" email id" name ="email" required>
  </div><br>
  <div class="col-md-10">
    <input type="password" class="form-control" placeholder=" password" name="password" required>
  </div><br>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Blood Group</label>
    <select name="bloodgroup" class="form-select">bloodgroup
      <option selected>Choose...</option>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="O+">O+</option>
    </select>
  </div><br>
  <div >
  <label for="inputState" class="form-label">Gender</label><br>
  Male: <input class="form-check-input" type="radio" name="gender"  value="male" checked >
  Female:  <input class="form-check-input" type="radio" name="gender"  value="female" checked>

  </div>
  
        </form>
       </div> 
       
       
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>