<!DOCTYPE html>
<html>
    <head>
        <title>Write</title>

    </head>
    <body>
        <?php
        $arr = array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");

        echo "Ascending order by value"."<br>";
        asort($arr);
        foreach($arr as $paramName => $value)
            echo "Name ".$paramName . " Age ".$value. "<br>";
        
        echo "<br>";
        echo "Ascending order by key"."<br>";
        ksort($arr);
        foreach($arr as $paramName => $value)
            echo "Name ".$paramName . " Age ".$value. "<br>";
        
        echo "<br>";
        echo "Descending order by value"."<br>";
        arsort($arr);
        foreach($arr as $paramName => $value)
            echo "Name ".$paramName . " Age ".$value. "<br>";
        
    
        echo "<br>";
        echo "Descending order by key"."<br>";
        krsort($arr);
        foreach($arr as $paramName => $value)
            echo "Name ".$paramName . " Age ".$value. "<br>";
            
        ?>
    </body>
   
</html>