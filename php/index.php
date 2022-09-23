<?php
 session_start();
 require __DIR__ . '/vendor/autoload.php';
 use PHPOnCouch\CouchClient;
 $cl = new couchClient("http://tema2:Academie123@20.111.43.69:5984/",
         "tema2");
 date_default_timezone_set('Europe/Bucharest');

 if(isset($_POST['chat_input'])){

   $timp = time();
   $mesaj = $_POST['chat_input'];

   $mesaj_nou = new stdClass();
   $mesaj_nou->mesaj = $mesaj;
   $mesaj_nou->timp = $timp;
 

   $raspuns = $cl->storeDoc($mesaj_nou);
 }

?>
<!DOCTYPE html> 
<html> 
 
  <head> 
    <title>CHATROOM</title> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
	<script src="jquery.timeago.js"></script>
	<script src="jquery.timers-1.2.js.txt"></script>  
	<link rel="stylesheet" href="pillowchat.css" type="text/css" />
	
  </head> 
 
<body>  
	<div id="chat_container" class="chat_container">
		<div id="top_pane" class="top_pane">
			<div id="chat_box" class="chat_box">
				<div id="chat_messages" class="chat_messages"></div>
			</div>
		</div>
		<div id="bottom_pane">
			<div id="bottom_controls">
				<form action="" method="POST">
					<input type="text" id="chat_input" class="chat_input" name="chat_input" maxlength="1000"/>
					<input id="chat_submit" type="submit"  value="Send"/><br />
				</form>
			</div>
		</div>
			
	</div>
	
</body> 
<script type="text/javascript">
		$("#chat_box").load("interogari.php");
		setInterval(() => {
		$("#chat_box").load("interogari.php");
		var chat= document.getElementById('chat_box');
		chat.scrollTop = chat.scrollHeight;
		}, 1000);
	</script>
</html> 
