<!DOCTYPE html>
<html>
    <head>
        <title>Write</title>

    </head>
    <body>
        <?php
        
        $array = array();
        for($i=0; $i<10; $i++){
            array_push($array,rand(1,200));

        }
        foreach($array as $values){
            if($values==42){
                echo "Number ".$values." Found You! "."<br>";
            }else{
                echo $values."<br>";
            }
        }
        
            
        ?>
    </body>
   
</html>