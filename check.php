<?php

/* 
 * Any code listed within here is property of Shawn Ramsey/J00lz.
 * Use of this code requires mention of the original author!
 * And while I realize you probably won't, don't be a dick...
 */ 
    $servername = "localhost";
    $username = "j00lz_admin";
    $password = "JawsRules1";
    $dbname = "j00lz_workschedule";
    
    $date = date("n/j/Y", strtotime(date("n/j/Y", strtotime($_POST["date"])) . ' +1 day'));
    //$date = strtotime(date('Y-m-d H:i:s') . ' +1 day');
    //echo $date;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
    $sql = "SELECT id FROM dates WHERE date = '" . $date . "'";
    $result = $conn->query($sql);
    //echo $sql;
    if(mysqli_num_rows($result) == 0) {
        // not found
        echo "NOPE! I'M WORKING THIS NIGHT!";
    } else {
        //ding ding ding gota winner
        echo "HOLY MOLY I'M OFF THIS NIGHT!";
    }
    

?>