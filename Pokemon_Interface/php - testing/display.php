<?php


mysql_connnec('localhost','root','19941028Wu!');

mysql_select_db('pokeuser_database');

$sql="SELECT * FROM pokeuser_database.pokeuser";


$records = mysql_query($sql);



?>

<html>
<head>

</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<tr>ID</tr>
		<th>name</th>
		<th>win</th>
		<th>lose</th>
		<th>winrate</th>
	</tr>


<?php

while ($pokeuser_database.pokeuser = mysql_fetch_assoc($records)){

	echo "<tr>";
	echo "<td>".pokeuser_database.pokeuser['user_id']"</td>";
	echo "<td>".pokeuser_database.pokeuser['user_name']"</td>";
	echo "<td>".pokeuser_database.pokeuser['user_win']"</td>";
	echo "<td>".pokeuser_database.pokeuser['user_lose']"</td>";
	echo "<td>".pokeuser_database.pokeuser['user_winrate']"</td>";
	echo "</tr>";

}


</table>





</body>