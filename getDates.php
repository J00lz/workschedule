<?php

/* 
 * Any code listed within here is property of Shawn Ramsey/J00lz.
 * Use of this code requires mention of the original author!
 * And while I realize you probably won't, don't be a dick...
 */
    
    header('Content-Type: application/json');
    $servername = "localhost";
    $username = "j00lz_admin";
    $password = "JawsRules1";
    $dbname = "j00lz_workschedule";
    
    mysql_connect($servername, $username, $password) or die ("Connection Failed");
    mysql_select_db($dbname) or die("no database");
    $startDate = date("n/j/Y", strtotime($_GET["start"]));
    $endDate = date("n/j/Y", strtotime($_GET["end"]));
    
    //echo $startDate;
    //echo $endDate;
    
    $sql = "SELECT date FROM dates WHERE date >= '" . $startDate . "' AND date <= '" . $endDate . "'";
    //echo $sql;
    $result = mysql_query($sql);
    //echo $result;
    $result_array = array();
    while($row = mysql_fetch_array($result))
    {
        $result_array[] = array(
                'title'=>'Shawns Off',
                'start'=>date("Y-m-d", strtotime($row["date"])),
                'allDay'=>true
        );
    }
    

    echo json_encode($result_array);
?>
