<?php
    $message = $_POST["messsage"];
    $dig1 = rand ( 0, 9);
    $dig2 = rand ( 0, 9);
    $dig3 = rand ( 0, 9);
    $dig4 = rand ( 0, 9);
    $dig5 = rand ( 0, 9);
    $ID = (string)$dig1 . (string)$dig2 . (string)$dig3 . (string)$dig4 . (string)$dig5;
    $file = "logs/" . $ID;
    while(file_exists($file)){
        $dig1 = rand ( 0, 9);
        $dig2 = rand ( 0, 9);
        $dig3 = rand ( 0, 9);
        $dig4 = rand ( 0, 9);
        $dig5 = rand ( 0, 9);
        $ID = (string)$dig1 . (string)$dig2 . (string)$dig3 . (string)$dig4 . (string)$dig5;
        $file = "logs/" . $ID;
    }

    file_put_contents($file, $message);

    echo $ID;
?>