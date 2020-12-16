<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php

    $primes = [2,3,5];
    
    function isPrime($num) 
    {
        global $primes;

        $prime = true;

        if ( in_array($num,$primes)) 
        {
            return true;
        }
        else 
        {
            $sqrt = sqrt($num);

            for($x = 2; $x <= $sqrt; $x++) 
            {
                for ($y = 0; $y < sizeof($primes);$y++)
                {
                    // echo $num."   ".$primes[$y]."   ".($num % $primes[$y])."<br/>";
                    if ($num % $primes[$y] == 0) 
                    {
                        $prime = false;
                        break;
                    }
                }
                
                if ($prime) 
                {
                    $primes[sizeof($primes)] = $num;
                    break;
                }
            } 
        }
        // echo $prime."<br/>";
        return $prime;
    }
        
    for($num=2;$num<=1000000;$num++){
        # echo "{$num} --- ".isPrime($num)."<br/>";
        if (isPrime($num)) {
            echo $num."<br/>";

        }
    }

    
    // foreach($primes as $prime){
    //     echo $prime.", ";
    // }
    

    ?>
        <script src="" async defer></script>
    </body>
</html>