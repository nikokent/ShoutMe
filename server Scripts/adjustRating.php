<?php
$ID = $_POST["ID"];
if(file_exists("rate_log/" . $ID)){
    $current_val = file_get_contents("rate_log/" . $ID);
    $new_val = (int)$current_val + 1;
    file_put_contents("rate_log/" . $ID, $new_val);
    echo "Value Updated";

}
else{
    echo "Service Failed";
}
?>
