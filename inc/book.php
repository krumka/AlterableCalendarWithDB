<?php
require "dbConnect.php";
$date = $_POST['date'];
$classname = $_POST['classname'];
$sql = 'DELETE FROM calendar WHERE calendarDate="'.$date.'"';
$calendar->exec($sql);
if($classname!="del") {
    $sql = 'INSERT INTO calendar
            VALUES("", "' . $date . '", "", "' . $classname . '")';
    $calendar->exec($sql);
}
?>