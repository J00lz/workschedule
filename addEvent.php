<?php

/*
 * Any code listed within here is property of Shawn Ramsey/J00lz.
 * Use of this code requires mention of the original author!
 * And while I realize you probably won't, don't be a dick...
 */
echo $_POST["title"];
echo $_POST["start"];
echo $_POST["end"];
echo $_POST["allDay"];
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];

$action = $_GET['action'];
if ($action == 'add') {
    $servername = "localhost";
    $username = "j00lz_admin";
    $password = "JawsRules1";
    $dbname = "j00lz_workschedule";

    mysql_connect($servername, $username, $password) or die("Connection Failed");
    mysql_select_db($dbname) or die("no database");
    $sql = "INSERT INTO dates SET                                                    
                                                    start = '" . $_POST['start'] . "' ,
                                                    end = '" . $_POST['end'] . "',
                                                    title = '" . $_POST['title'] . "' ";

    $query = $db->query($sql);
    echo json_encode($query);
}


?>