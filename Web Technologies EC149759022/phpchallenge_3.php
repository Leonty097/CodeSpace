<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

</style>


  <title>Multiplication Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div >
    <h1>Multiplication Table</h1>

    <form method="post">
        <label for="num">Enter the number to calculate their multiplication table</label>
        <input type="number" name="num" id="num" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the data was sent through POST method
    if (isset($_POST['num'])) {
        // Get the value of num from the form
        $num = $_POST['num'];

        // Calculate the multiplication table for the provided number
        for ($i = 1; $i <= 10; $i++) {
            $result = $num * $i;

            // Display each multiplication result
            echo "$num x $i = $result <br>";
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
