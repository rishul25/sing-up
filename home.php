<?php 
session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quizdbase');
?>

<!DOCTYPE html>
<html>
<head>
	



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
</head>
<body>
     <div class="conatiner">

     <br>	<h1 class="text-center text-primary">TECHNICAL QUIZ </h1><br>
  	<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?> </h2>

  	<div class="col-lg-8 m-auto d-block">


    <div class="card">

    	<h3 class="text-center card-header">Welcome <?php echo $_SESSION['username']; ?> you have to select only one out of 4. Best of Luck :)</h3>
    	
    </div><br>

    <form action="check.php" method="post">

    <?php 
    for($i=1 ; $i < 16 ;$i++){

    $q = " select * from questions where qid = $i";
    $query = mysqli_query($con, $q);

    while ($rows = mysqli_fetch_array($query)){

    ?>
<div class="card">
	<h4 class="card-header"><?php echo $rows['question']  ?></h4>
	

<?php 
 $q = " select * from answers where ans_id = $i";
 $query = mysqli_query($con, $q);

    while ($rows = mysqli_fetch_array($query)){

    ?>
  <div class="card-body">
  	<input type="radio" name="quizcheck[<?php  echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'] ; ?>">
  	<?php echo $rows['answer'];?>
  	
  </div>

<?php 
    }
}
    }


    ?>
<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block" >

</form>
 </div>
 </div>



<div class="text-center">
<a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div><br>

<div>
	
	<h4 class="text-center">&&2021 Rishul gupta</h4>
</div><br><br>
  </div>
    
</body>
</html>