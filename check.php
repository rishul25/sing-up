<?php
session_start();
$con = mysqli_connect('localhost','root');
//if($con){
	//echo"connecvtion";
//}
mysqli_select_db($con, 'quizdbase');
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	.animateuse{
		animation: leelaanimate 0.5s infinte;
	}

	@keyframes leelaanimate{
		0%{color: red},
		10%{color: yellow},
		20%{color: blue}
		40%{color: green},
		50%{color: pink}
		60%{color: orange},
		80%{color: black},
		100%{color: brown}
		
		}
		
</style>
</head>
<body>

	<div class="container text-center">
		<br><br>
		<h1 class="text-center text-success text-uppercase animateuse">THANK YOU YOUR RESPONSES ARE !</h1>
		<br><br><br>
  <table class="table text-center table-bordered table-hover">
  	<tr>
  		<th colspan="2" class="bg-dark"><h1 class="text-white">Results</h1></th>
  	</tr>


  	<tr>
  		<td>
  			Question Attempted
  		</td>
  		<?php
  		//$counter =0;
  		$Resultans =0;
  		if(isset($_POST['submit'])){
         if(!empty($_POST['quizcheck'])){
         	// counting number of checked checkboxes
         	$checked_count = count($_POST['quizcheck']);
         	//print_r($_POST);
         	?>

         	<td>
         		<?php
         		echo "Out of 15,You have attempt ".$checked_count." option.";?>
             </td>


             <?php 
             //loop to store and display values of individual checked checkbox

            $selected = $_POST['quizcheck'];


            $q1="select ans_id from question";
            $ansresults = mysqli_query($con,$q1);

            $i =1;
            while($rows = mysqli_fetch_array($ansresults)) {
            	
            	$flag = $rows['ans_id'] ==$selected[$i];

            	if ($flag) {
            		// echo "correct ans is ".$rows['ans']."<br>";
            		//$counter++;
            		$Resultans++;
            		// echo "Well done! Your ".$counter."answer is correct <br><br>";
            	}else{

            	//$counter++;
            	//echo "Sorry! Your ".$counter."answer is innncorrect <br><br>";

                     }
            $i++;

        }
        ?>
        <tr>
        	<td>
        		Your Total Score
        	</td>

        	<td colspan="2">
        		<?php 
        		echo "Your score is ".$Resultans.".";

        	}
        	else{
        		echo "<br> Please Select Alteast One Option.<br>";
        	}
            }
            ?>
        	
        	</td>
        </tr>

        <?php 
        $name =$_SESSION['username'];


        $finalresult ="insert into usersession(username,u_q_id,u_a_id) values ('$name','15',$Resultans)";
        $queryresult = mysqli_query($con,$finalresult);
        //if($queryresult){
        //echo"successssss";
    //}
        ?>


  	
  </table>
  <a href="logout.php" class="btn btn-success">LOGOUT</a>

	</div>

</body>
</html>