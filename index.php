<?php
$result = "";
$error = "";


if(isset($_POST['submit'])) {
   $first_number =  $_POST['firstnumber'];
   $second_number =  $_POST['secondnumber'];
   $operator =  $_POST['operator'];

if($first_number == '' || $second_number == '') {
  $error = "Please fill both inputs.";

}else if(!is_numeric($first_number) || !is_numeric($second_number)) {
  $error = "Please enter correct number.";
}else if($operator == '/' && $second_number == 0) {
  $error = "Can not devide by zero";
}else {
  if($operator == '+') {
      $result = $first_number + $second_number;
   }else if($operator == '-') {
      $result = $first_number - $second_number;
   }else if($operator == 'x') {
     $result =  $first_number * $second_number;
   }else {
    $result = $first_number / $second_number;
   }
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>


  <style>
    body {
       margin: 0;
       padding: 0;
       font-family: Arial, sans-serif;
       background-color: #f2f4f8;

    }

    .calculator-box {
      width: 350px;
      margin: 80px auto;
      padding: 25px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #222;
    }

    .form-label {
      display: block;
      margin-bottom: 5px;
    }

    input, select {
      width: 100%;
      padding: 12px;
      box-sizing: border-box;
      margin-bottom: 15px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 12px;
      
    }

    .button {
      width: 100%;
      padding: 12px;
      color: #fff;
      background-color: #2563eb;
      font-size: 15px;
      cursor: pointer;
      border: none;
      border-radius: 12px;
    }

    .button:hover {
      background-color: #1d4ed8;
    }

    .error {
      background-color: #fee2e2;
      padding: 10px;
      border-radius: 8px;
      margin-top: 15px;
      text-align:center;
    }

    .result {
      background-color: #dcfce7;
      padding: 10px;
      margin-top: 15px;
      text-align:center;
      border-radius: 8px;
    }
  </style>


</head>
<body>
    <div class="calculator-box">
      <h2>Calculator</h2>
    <form action="" method="POST">
    <div>
        <label class="form-label" for="firstnumber">First Number:</label>
        <input type="text" name="firstnumber" placeholder="Enter first number">
    </div>

    <div>
        <label class="form-label" for="secondnumber">Second Number:</label>
        <input type="text" name="secondnumber" placeholder="Enter second number">
    </div>

    <div>
        <label class="form-label" for="operation">Select Operator:</label>
        <select name="operator" id="">
            <option value="">Select operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
    </div>

    <div>
        <input class="button" type="submit" name="submit" value="Calculate">
    </div>

    </form>
    <?php if($error != "") { ?>
      <div class="error"> <?php echo $error;  ?></div>
    <?php } ?>

    <?php  if($result != '') { ?>
        <div class="result"><?php echo $result;   ?><div>
    <?php } ?>
    </div>
   
</body>
</html>