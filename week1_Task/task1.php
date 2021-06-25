<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <?php
        /*function that takes two arguments, start and end,
         and returns an array containing all the numbers
         from start up to end(including both start and end).*/
            function rangeNum($start, $end){
                $range=array();
                //looping from start to end using forloop
                for($i=$start; $i<=$end; $i++){
                    array_push($range, $i);//pushing the numbers into the arra
                }
                return $range;
            }
            $arr = rangeNum(4,6);
            echo("$arr<br>");
            
        /*function that takes an array of numbers and returns the sum of these numbers.*/
            function add($numbers){
                return array_sum($numbers);
            }
            $result= add($arr);
            echo($result);
        ?>
    </body>
</html>