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
            <input type="number" placeholder="Type Your First Number" name="firstNumber"> <br>
            <input type="number" placeholder="Type Your Second Number" name="secondNumber">
        </div>
        <div class="btn-container">
            <button class="btn">Addition</button><br>
            <button class="btn">Subtraction</button><br>
            <button class="btn">Multiplication</button> <br>
            <button class="btn">Division</button>
        </div>
        </div>
        </form>
        <hr/>
        <div class="output-container">
          <p>Result:-</p>  
          <?php
          if (isset($_POST)) {
            $firstNumber =$_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

              if (isset($_REQUEST['firstNumber'])) {
                  echo 'yes value';
              }
          }
          ?>
        </div>
    </div>
    
</body>
</html>