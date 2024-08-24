<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Simple Calculator</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="display-4 text-center">Simple Calculator</h1>
      <form action="" method="POST" class="lead mt-4">
        <div class="form-group">
          <label for="firstnumber">Enter 1st Number: </label>
          <input type="number" id="num1" name="firstnumber" class="form-control" required />
        </div>
        <br />
        <div class="form-group">
          <label for="secondnumber">Enter 2nd Number: </label>
          <input type="number" id="num2" name="secondnumber" class="form-control" required />
        </div>
        <br />
        <div class="form-group text-center">
          <button type="submit" name="operation" value="add" class="btn btn-outline-success">+</button>
          <button type="submit" name="operation" value="subtract" class="btn btn-outline-danger">-</button>
          <button type="submit" name="operation" value="multiply" class="btn btn-outline-primary">*</button>
          <button type="submit" name="operation" value="divide" class="btn btn-outline-secondary">/</button>
        </div>
      </form>

      <div class="mt-4 text-center">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
          $n1 = $_POST['firstnumber'];
          $n2 = $_POST['secondnumber'];

          if (isset($_POST['operation'])) {
            $operation = $_POST['operation'];
            $result = 0;

            switch ($operation) {
              case 'add':
                $result = $n1 + $n2;
                echo "<h4>The result of the addition is: $result</h4>";
                break;
              case 'subtract':
                $result = $n1 - $n2;
                echo "<h4>The result of the subtraction is: $result</h4>";
                break;
              case 'multiply':
                $result = $n1 * $n2;
                echo "<h4>The result of the multiplication is: $result</h4>";
                break;
              case 'divide':
                if ($n2 != 0) {
                  $result = $n1 / $n2;
                  echo "<h4>The result of the division is: $result</h4>";
                } else {
                  echo "<h4>Cannot divide by zero</h4>";
                }
                break;
              default:
                echo "<h4>Invalid operation selected</h4>";
                break;
            }
          } else {
            echo "<h4>No operation selected</h4>";
          }
        }
        ?>
      </div>
    </div>
  </body>
</html>
