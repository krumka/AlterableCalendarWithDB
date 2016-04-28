<?php
require "dbConnect.php";
$answer =$calendar->query('SELECT * FROM calendar');//requète
$tabCalendar = [];
while($donnees=$answer->fetch()){
    array_push($tabCalendar, array(date=>$donnees['calendarDate'], badge=>$donnees['calendarBadge'], classname=>$donnees['calendarClassName']));
    };
$answer->closeCursor();//ferme le curseur de la bdd
echo json_encode($tabCalendar);
?>