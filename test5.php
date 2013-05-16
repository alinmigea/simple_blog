<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
// Open a MySQL connection
$link = new mysqli('localhost', 'root', '', 'test');
if(!$link) {
	die('Connection failed: ' . $mysqli->error());
}
// Create and execute a MySQL query
$sql = "SELECT album_name FROM albums WHERE artist_id=?";
if($stmt = $link->prepare($sql))
{	
	echo $_POST['artist'];
	$stmt->bind_param('i', $_POST['artist']);
	$stmt->execute();
	$stmt->bind_result($album);
	while($stmt->fetch()) {
		printf("Album: %s<br />", $album);
	}
	$stmt->close();
}
// Close the connection
$link->close();
}
else {
	?>
<form method="post">
<label for="artist">Select an Artist:</label>
<select name="artist">
<option value="1">Bon Iver</option>
<option value="2">Feist</option>
</select>
<input type="submit" />
</form>
<?php } // End else ?>