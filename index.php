<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br> <h1 class="text-center text-success"> Welcome to Quiz world :)</h1></div><br>
  <div class="container">


    <div class="row">
      <div class="col-lg-6">
        <div class="card">

      <h2 class=" card-header">Login form</h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-contol">
            
          </div>
           <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-contol">
            
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          
        </form>
        </div>
      </div>



          <div class="col-lg-6">
           <div class="card">
      <h2 class="card-header">Signin form</h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-contol">
            
          </div>
           <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-contol">
            
          </div>
          <button type="submit" class="btn btn-primary ">Signin </button>
          
        </form>

       </div>


        
      </div>
      
    </div>
    
  </div>

</body>
</html>