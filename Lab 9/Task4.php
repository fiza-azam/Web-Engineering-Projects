<!DOCTYPE html>
<html>
    <head>
        <title>Write</title>

    </head>
    <body>
        <?php
        $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),"holes" => array ( "First", 5 => "Second", "Third"));

        echo $color["holes"][0]."<br>";
        echo $color["color"]["c"]."<br>";
        echo $color["numbers"][1];
        
        
        ?>
    </body>
   
</html>