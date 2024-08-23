<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <marquee><h1>Datatype</h1></marquee>
    <h1>Scalar Datatype</h1>
    <?php
    $a=26;
    $b=2.6;
    $c="hey";
    $d=false;
    echo "this is value $a "."<br>";
    echo "this is value $b"."<br>";
    echo "this is value $c"."<br>";
    echo "this is value $d"."<br>";

    ?>
    <h1>Compound Datatype</h1>
    <?php
    $a=[23, 64, 30];
    // $b=2.6;
    // $c="hey";
    // $d=false;
    echo "this is value $a[0]"."<br>";
    // echo "this is value $b"."<br>";
    // echo "this is value $c"."<br>";
    // echo "this is value $d"."<br>";
    ?>

<?php

$person = [
    "name" => "avi",
    "age" => 22,
    "city" => "Newtop"
];
echo $person["name"];
echo $person["age"];
echo $person["city"];

?>

</body>
</html>