<?php
    // One dimensional Array
    $rollno = array(1,2,3, 4);
    echo $rollno[0];
    for($a=0; $a<4; $a++){
        echo $rollno[$a];
    }

    foreach($rollno as $count){
        echo $count;
    }

    //two dimesional Array
    $student = array("hello"=>"key", "hi"=>"byee");
    foreach($student as $s=>$value){
        echo $s;
        echo $value;
    }

    //array_column()
    $result = array(
        array('name'=>'Manoj', 'cgpa'=> 6.7, 'status'=>'pass'),
        array('name'=>'Shalini', 'cgpa'=> 7.2, 'status'=>'pass'),
        array('name'=>'Roll Royals', 'cgpa'=> 9.2, 'status'=>'fail'),

    );
    $names = array_column($result, 'status', 'name');
    print_r($names)
?>