<?php
    echo "Sprial Pattern of numbers <br><br>";
    $n=5;
    $arr = [];
    $num = 1;
    $sr = 0;
    $er = $n - 1;
    $sc = 0;
    $ec = $n - 1;

    while ($sr <= $er && $sc <= $ec) {
        for ($i = $sc; $i <= $ec; $i++) {
            $arr[$sr][$i] = $num++;
        }
        $sr++;

        for ($i = $sr; $i <= $er; $i++) {
            $arr[$i][$ec] = $num++;
        }
        $ec--;

        if ($sr <= $er) {
            for ($i = $ec; $i >= $sc; $i--) {
                $arr[$er][$i] = $num++;
            }
            $er--;
        }

        if ($sc <= $ec) {
            for ($i = $er; $i >= $sr; $i--) {
                $arr[$i][$sc] = $num++;
            }
            $sc++;
        }
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }

?>
