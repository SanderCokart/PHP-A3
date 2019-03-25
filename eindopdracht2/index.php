<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <style media="screen">
            *{
                margin: 0;padding: 0;
                font-size: 10vmin;
            }

            body{
                display:grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-template-rows: 1fr 1fr 1fr 1fr;
                height: 100vh;
                width: 100vw;
                overflow: hidden;
            }
        </style>
        <title></title>
    </head>
    <body>
        <?php
            require 'classes/GameField.php';
            $gameField = new GameField;
            echo $gameField->generateField();
         ?>
    </body>
    <script src="jquery-3.3.1.js" charset="utf-8"></script>
    <script src="numberHandler.js" charset="utf-8"></script>
</html>
