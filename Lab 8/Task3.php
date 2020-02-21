<?php
    $text1 = "https://www.netflix.com/browse"
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Write</title>

    </head>
    <body>
    <pre><?php print parse_url($text1, PHP_URL_SCHEME);?><pre>
        <pre><?php print parse_url($text1, PHP_URL_HOST);?><pre>
        <pre><?php print parse_url($text1, PHP_URL_PATH);?><pre><br>

        <?php
            echo "<br>"; 
            $url = "https://www.netflix.com/browse";
            echo "The url is: ".$url."<br>";
            $url_parts = array();
            $pos = strpos($url, '/', 0);
           for ($c = 0; $c < 3; $c++) {
                array_push($url_parts, $pos);
                $pos = strpos($url, '/', ++$pos);
            }
            
            // print for validation 
            echo "Scheme: ".substr($url, 0, $url_parts[0])."<br>";
            echo "Host:".substr($url, $url_parts[1] + 1, $url_parts[2] - $url_parts[1] - 1)."<br>";
            echo "Path: ".substr($url, $url_parts[2], strlen($url))."<br>";
        ?>
    </body>
   
</html>