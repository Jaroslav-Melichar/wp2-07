<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function secondPower($number){
        $result = $number * $number;
        return $result;
    }


 function power($number, $powerNumber){
     $result = $number;
     for ($i=0; $i <$powerNumber; $i++){
         $result = $result * $number;
     }
     return $result;
 }
 

    echo secondPower(9);
    echo power(4,4);

    ?>
</body>
</html>