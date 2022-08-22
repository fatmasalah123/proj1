<?php 
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Hospital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <div class="row">
        <div class="col-10  my-5">
          <form action="result.php" method="POST">
            <h1 class="b-5 m-5 text-primary text-center">Your Review</h1>
            <div class="form-group">
                
            <div class="container">
            
  <table class="table">
    <thead>
      <tr>
        <th>Questions</th>
        <th>Bad</th>
        <th>Good</th>
        <th>Very Good</th>
        <th>Excellent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Are you Satisfied With The Cleanliness</td>
        
        <td><input type="radio" id="bad" name="q1" value="bad" ></td>
        <td><input type="radio" id="good" name="q1" value="good"></td>
        <td><input type="radio" id="verygood" name="q1" value="verygood"></td>
        <td><input type="radio" id="excellent" name="q1" value="excellent"></td>
      </tr>
      <tr>
        <td>Are you Satisfied With The Price Of Services</td>
       
        <td><input type="radio" id="bad" name="q2" value="bad" ></td>
        <td><input type="radio" id="good" name="q2" value="good"></td>
        <td><input type="radio" id="verygood" name="q2" value="verygood"></td>
        <td><input type="radio" id="excellent" name="q2" value="excellent"></td>
      </tr>
      <tr>
        <td>Are you Satisfied With The Nursing Services</td>
       
        <td><input type="radio" id="bad" name="q3" value="bad"></td>
        <td><input type="radio" id="good" name="q3" value="good"></td>
        <td><input type="radio" id="verygood" name="q3" value="verygood"></td>
        <td><input type="radio" id="excellent" name="q3" value="excellent"></td>
      </tr>
      <tr>
        <td>Are you Satisfied With The Level Of The Doctor</td>
        
        <td><input type="radio" id="bad" name="q4" value="bad"></td>
        <td><input type="radio" id="good" name="q4" value="good"></td>
        <td><input type="radio" id="verygood" name="q4" value="verygood"></td>
        <td><input type="radio" id="excellent" name="q4" value="excellent"></td>
      </tr>
      <tr>
        <td>Are you Satisfied With The Calmness Of The Hospital</td>
       
        <td><input type="radio" id="bad" name="q5" value="bad"></td>
        <td><input type="radio" id="good" name="q5" value="good"></td>
        <td><input type="radio" id="verygood" name="q5" value="verygood"></td>
        <td><input type="radio" id="excellent" name="q5" value="excellent"></td>
      </tr>
     <tr><?phpinput type="radio" id="excellent" name="q5" value="excellent"?></tr>
    </tbody>
  </table>
</div>

            </div>
            
            
            <div class="form-group">
            <input type="submit" name="sub" value="Submit" class="btn btn-primary btn-block ">
            </div>
            
         
          <?php
          if($_SERVER['REQUEST_METHOD'] == "POST"){
            if($_POST['q1']=="bad"){
                $result1=0;
            }
           else if($_POST['q1']=="good"){
                $result1=3;
            }
            else if($_POST['q1']=="verygood"){
                $result1=5;
            }
           else if($_POST['q1']=="excellent"){
                $result1=10;
            }
          
            if($_POST['q2']=="bad"){
                $result2=0;
            }
           else if($_POST['q2']=="good"){
                $result2=3;
            }
            else if($_POST['q2']=="verygood"){
                $result2=5;
            }
           else if($_POST['q2']=="excellent"){
                $result2=10;
            }
            if($_POST['q3']=="bad"){
                $resut3=0;
            }
           else if($_POST['q3']=="good"){
                $result3=3;
            }
            else if($_POST['q3']=="verygood"){
                $result3=5;
            }
           elseif($_POST['q3']=="excellent"){
                $result3=10;
            }
            if($_POST['q4']=="bad"){
                $result4=0;
            }
           elseif($_POST['q4']=="good"){
                $result4=3;
            }
            elseif($_POST['q4']=="verygood"){
                $result4=5;
            }
           elseif($_POST['q4']=="excellent"){
                $result4=10;
            }
            if($_POST['q5']=="bad"){
                $result5=0;
            }
           elseif($_POST['q5']=="good"){
                $result5=3;
            }
            elseif($_POST['q5']=="verygood"){
                $result5=5;
            }
           elseif($_POST['q5']=="excellent"){
                $result5=10;
            }
           
            if($_POST){
           // action('location:result.php');die;
          $_SESSION['sum']=$result1+$result2+$result3+$result4+$result5;
        }
        }
          ?>
       </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>