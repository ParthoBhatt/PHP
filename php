<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>me</title>
</head>
<body>
<?php

echo "Hello Bangladesh";
echo "<br>";
echo "<br>";
echo "Welcome to chittagong";

$date = "20th";
$month = "march";    
$data = "My birthday is $date $month" ;

define('name1', "I am"); 
define('name2', "PARTHO"); 
$data2 = name1 .' '.  name2;

$basic = "Na hocche poralekha";
$data3 = "na hocche prem".' '.$basic;

$test = "but it is life";
$data4 = "Codemanbd is a good online institutions with minhaj vaia";
$data5 = 'also Rony vai is a great mentor';

$data6 = 'I have no idea how code works';

$name1 = "PARTHO";
$data7 = strlen($name1);

function code() {
    echo "the codemanbd can help me to boost my career";
}
function code2() {
    return "you will like it if you join";
}
function code3($sample) {
    echo $sample;
}
function code4($sample2 = "Or like this too") {
    echo $sample2;
}
function code5($sample3,$sample4) {
    echo "This the basics of $sample3";
    echo "<br>";
    echo "<br>";
    echo 'Hope you\'ll having fun learning '.$sample4;
}



?>
   
    <p><?php echo $data2 ?></p>
    <p><?php echo $data ?></p> 
    <p><?php print $data3 ?></p> 
    <p><?php print $data4 ?></p> 
    <p><?php print $data5 ?></p> 
    <p><?php print $data6 ?></p>  
    <p>My name length in php is <?php print $data7 ?></p> 
    <p><?php code(); ?></p> 
    <p><?php echo code2(); ?></p> 
    <p><?php echo code3("mark my words"); ?></p> 
    <p><?php echo code4(); ?></p> 
    <p><?php echo code5('php','no idea'); ?></p>
    
</body>
</html>
