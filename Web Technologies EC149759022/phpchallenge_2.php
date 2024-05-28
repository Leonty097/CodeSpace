<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #calculator {
        font-family: Arial, sans-serif;
        background-color: rgba(190, 190, 190, 0.411);
        border-radius: 15px;
        max-width: 500px;
        overflow: hidden;
    }

    #keys {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: px;
        padding: 35px;
    }
    #history {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: px;
        height: 660px;
        padding: 35px;
        width: 500px;
    }

    #historyLog {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: px;
        height: 560px;
        padding: 35px;
        width: 100%;
        color: black;
        border-radius: 15px;
        background-color: rgba(190, 190, 190, 0.397);

    }

    #display {
        width: 100%;
        padding: 20px;
        background-color: rgba(190, 190, 190, 0.397);
        text-align: left;
        border: none;
        font-size: 35px;
    }

    button.number-btn {
        width: 100px;
        height: 100px;
        border-radius: 5px;
        border: none;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }   
    button.operator-btn {
        width: 100px;
        height: 100px;
        border-radius: 5px;
        border: none;
        font-size: 35px; 
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background-color: rgb(236, 235, 235);
    }

    button:active {
        background-color: rgb(139, 139, 139);
    }

    .operator-btn {
        background-color: rgb(201, 201, 201);
    }

</style>


  <title> php Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <h1>Php calculator </h1>

    <div id="calculator">
        <form method="post" id="display" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="num1"> </label>
            <input type="text" name="operations" id="num" required>
            <div id="keys">
                <button onclick="appendToDisplay('-')" class="operator-btn">-</button>
                <button onclick="appendToDisplay('*')" class="operator-btn">*</button>
                <button onclick="appendToDisplay('7')" class="number-btn">7</button>
                <button onclick="appendToDisplay('8')" class="number-btn">8</button>
                <button onclick="appendToDisplay('9')" class="number-btn">9</button>
                <button onclick="appendToDisplay('/')" class="operator-btn">/</button>
                <button onclick="appendToDisplay('4')" class="number-btn">4</button>
                <button onclick="appendToDisplay('5')" class="number-btn">5</button>
                <button onclick="appendToDisplay('6')" class="number-btn">6</button>
                <button onclick="appendToDisplay('.')" class="operator-btn">.</button>
                <button onclick="appendToDisplay('1')" class="number-btn">1</button>
                <button onclick="appendToDisplay('2')" class="number-btn">2</button>
                <button onclick="appendToDisplay('3')" class="number-btn">3</button>
                <button type="submit" name="calculate" value="calculate" class="operator-btn">=</button>
                <button onclick="appendToDisplay('0')" class="number-btn">0</button>
                <button onclick="appendToDisplay('-')" class="number-btn">+/-</button>
                <button onclick="document.getElementById('num').value = ''" class="operator-btn">C</button>
                <button onclick="appendToDisplay('+')" class="operator-btn">+</button>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['calculate'])) {
            $expression = $_POST['operations'];
            eval('$result = ' . $expression . ';');
            echo "<p>Result: $result</p>";
        }
    }
    ?>
</body>
</html>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>
