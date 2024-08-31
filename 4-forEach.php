<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <label for="value1">Enter value for 1</label>
        <input type="number" /><br />
        <label for="value1">Enter value for 1</label>
        <input type="number" /><br />
        <button onclick="calculate">calculate</button>
    </div>
    <?php

        $colors = array("Red", "Green", "Blue");
 
        // Loop through colors array
        foreach($colors as $value){
            echo $value . "<br>";
        }

        
    ?>
</body>
</html>