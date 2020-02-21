<!DOCTYPE html>
<html>
    <head>
        <title>Write</title>

    </head>
    <body>
        <?php
        $arr = array("a"=>"Apple", "b"=>"Ball", "c"=>"Cat", "d"=>"Doll", "e"=>"Exo", "f"=>"Fan", "g"=>"Gum", 
        "h"=>"Horse", "i"=>"Ice", "j"=>"Joker", "l"=>"Lamp", "m"=>"mug", "n"=>"Nachos", "o"=>"Orange", "p"=>"Paint", 
        "q"=>"quartz", "r"=>"Rose", "s"=>"Storm", "t"=>"Tree", "u"=>"umbrella", "v"=>"Volly Ball", "w"=>"Watch",
        "x"=>"X-ray", "y"=>"Yawn", "z"=>"Zebra");

        $name="Fiza";
        echo "Name: ".$name;
        $array = str_split(strtolower($name));
        foreach($array as $values){
            echo "<br>";
            echo $arr[$values];
        }
        
        
        ?>
    </body>
   
</html>