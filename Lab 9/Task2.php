<!DOCTYPE html>
<html>
    <head>
        <title>Mathematics</title>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto;
                background-color: grey;
                padding: 10px;
                }
                .grid-item {
                background-color: pink;
                border: 1px solid rgba(0, 0, 0, 0.8);
                padding: 20px;
                font-size: 30px;
                text-align: center;
                }
                h1 {
                    text-align: center;
                }
        </style>
    </head>
    <body>
        <h1>Multiplication Table</h1>
        <br>
        <div class="grid-container">
            <?php
                $numbers = array(1, 2, 3, 4, 5, 6, 7);
                foreach ($numbers as $row) {
                    foreach ($numbers as $col) {
                        $result = $row * $col;
                        echo "<div class=\"grid-item\">".$result."</div>";
                        
                    }
                }
            ?>
        </div>
    </body>
</html>