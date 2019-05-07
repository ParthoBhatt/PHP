<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Number & Array</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php

	$number= 5;
	$number1= 1.3;

	echo $number2= $number**$number1;
	echo '<br>';
	echo '<br>';
    echo $number3= $number2**pi();
    echo '<br>';
    echo $test='x^2';
    echo '<br>';
    echo '<br>';

    $name= 'Partho Bhattacharje';
    $city='Chittagong';
    $likes= 'PHP';

    $array = ["Partho Bhattacharje","Chittagong","PHP"];
    $array2 = ["CODEMANBD","WORDPRESS","AWD"];
    //to see the index of the array
    echo '<pre>';
    print_r($array);

    $array3= array_merge($array,$array2);
    echo "<pre>";
    print_r($array3);



    $AssociativeArray = [
        'name' => 'Partho Bhattacherje',
        'city' => 'Chittagong',
        'likes'=> 'Wordpress'
    ];
    echo $AssociativeArray['likes'];

     



 
    
    	
    






	  ?>
	
</body>
</html>
