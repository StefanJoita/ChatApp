<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use PHPOnCouch\CouchClient;

$cl= new couchClient("http://tema2:Academie123@20.111.43.69:5984/",
        "tema2");

 date_default_timezone_set('Europe/Bucharest');



 $all=$cl->getAllDocs();
 foreach($all->rows as $the_key => $mesaj ){
         $msj = $cl->getDoc($mesaj->id)->mesaj;
         $msjTime = $cl->getDoc($mesaj->id)->timp;
        $timp_final = date('Y-m-d H:i:s', $msjTime);
        echo '<div class="chat_container">
            <p>'.$msj.'</p>
            <span class="time-right">'.$timp_final.'</span>
        </div>';
       
        
    
 }

?>

