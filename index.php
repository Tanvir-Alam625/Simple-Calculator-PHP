<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator-container">
        <h2 class="heading">Simple Calculator </h2>
        <form action="" method="post">
            <div class="form-container">
        <div class="input-cotainer">
            <input  required type="number" placeholder="Type Your First Number" name="firstNumber"> <br>
            <input type="number" required placeholder="Type Your Second Number" name="secondNumber">
        </div>
        <div class="btn-container">
            <button class="btn" name="add">Addition</button><br>
            <button class="btn" name="sub">Subtraction</button><br>
            <button class="btn" name="multi">Multiplication</button> <br>
            <button class="btn" name="div">Division</button>
        </div>
        </div>
        </form>
        <hr/>
        <div class="output-container">
          
          <?php
          if (isset($_POST['firstNumber']) && isset($_POST['secondNumber'])) {
            $firstNumber =$_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

              if (isset($_POST['add'])) {
                ?>
                <p>Result:- <?php echo $firstNumber + $secondNumber;?></p>  
                <?php 
                  
              }
              elseif (isset($_POST['sub'])) {
                ?>
                <p>Result:- <?php echo $firstNumber - $secondNumber;?></p>  
                <?php 
                  
              }
              elseif (isset($_POST['multi'])) {
                ?>
                <p>Result:- <?php echo $firstNumber * $secondNumber;?></p>  
                <?php 
                  
              }
              elseif(isset($_POST['div'])) {
                ?>
                <p>Result:- <?php echo $firstNumber / $secondNumber;?></p>  
                <?php 
                  
              }
          }
          ?>
        </div>
    </div>
    
</body>
</html>