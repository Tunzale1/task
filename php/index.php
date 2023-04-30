<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи по PHP:</title>
</head>
<body>
    <?php
// 1s task

    echo("1st task <br/>");

    $integer = 94835;
    $total = 0;
    $numbers = str_split((string)$integer);

    foreach ($numbers as $number) {
        $total += $number;
    }
    
    echo $total;
    echo("<br/>");

// 2nd task

    echo("2nd task <br/>");

    function ending($num) {
        $lastDigit = $num % 10; 
    
        if ($num >= 11 && $num <= 14) {
            $ending = 'ов'; 
        } else {
            switch ($lastDigit) {
                case 1:
                    $ending = '';
                    break;
                case 2:
                case 3:
                case 4:
                    $ending = 'а';
                    break;
                default:
                    $ending = 'ов';
                    break;
            }
        }
    
        $word = "урок{$ending}"; 
    
        return $word;
    }
    
    echo ending(1) ; 
    echo("<br/>");
    echo ending(2); 
    echo("<br/>");
    echo ending(5);
    echo("<br/>");
    echo ending(21);
    echo("<br/>");


// 3rd task

    echo("3rd task<br/>");

    function traffic_light($current_time) {
        $startTime = strtotime('00:00'); 
        $sec = strtotime($current_time) - $startTime; 
        $cycle= 12 * 60;
    

        
        $passed = $sec % $cycle;
        if ($passed >= 0 && $passed < 7 * 60) {
            $color = 'red';
        } 
        else if ($passed >= 2 * 60 && $passed < 3 * 60) {
            $color = 'yellow';
        } 
        else {
            $color = 'green';
        }
        return $color;
    }
    
    echo traffic_light('03:08'); 
    echo("<br/>");
    echo traffic_light('15:41'); 




    ?>
</body>
</html>
