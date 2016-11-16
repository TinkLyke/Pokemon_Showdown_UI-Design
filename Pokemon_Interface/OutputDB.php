<?php

require_once('../ConnectServer.php');


$query = "SELECT `username`, `win`, `lose`, `winrate`, `total games played` FROM `user_info`";


$response = @mysqli_query($conn,$query);

if($response){

	echo '<table align = "left" cellspacing = "5" cellpadding = "8">
	<tr><td align="left"><b>Username</b></td>
	<td align="center"><b># of Win</b></td>
	<td align="center"><b># of Lose</b></td>
	<td align="center"><b># of Win rate</b></td>
	<td align="center"><b># of Total games played</b></td></tr>
	';
}

while($row = $response->fetch_array()){
   //$name =$row['username'];
   echo '<tr><td align ="left">'.$row['username'].'</td><td align = "center">'.
   $row['win'].'</td><td align = "center">'. $row['lose'].'</td><td align = "center">'. $row['winrate'].'</td><td align="center">'.$row['total games played'].'</td>';


   //echo "<b>$name</b> <br>";
}

?>