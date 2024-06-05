<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

</style>


  <title> else statement </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div >
    <h1>Age - else statement</h1>

    <form method="post">
        <label for="num">Enter your age: </label>
        <input type="number" name="num" id="num" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['num'])) {
      $num = $_POST['num'];

      // Set the age bracket
      if ($num < 13) {
          echo "Your age is below 13, you're a child";
      } elseif ($num >= 13 && $num < 17) {
          echo "Your age is between 13 and 17, you're a teenager";
      } elseif ($num >= 17 && $num < 64) {
          echo "Your age is over 17 but below 64, you're an adult";
      } elseif ($num >= 64 && $num < 116){
          echo "Your age is over 64, you're a senior";
      }
      else {
        echo "Congratulations! You've broken a world record as the most long-lived person";
    }
  }
}

?>

</body>
</html>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>
