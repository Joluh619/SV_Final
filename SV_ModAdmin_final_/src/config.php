<?php
 
try {
    $connection = new mysqli("db","root","Upslp-16","");/*new mysqli("tutores","root","upslp_12345","");*/
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>