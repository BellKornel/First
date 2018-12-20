<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$book_authorid = mysqli_real_escape_string($link, $_POST['foto']);
$book_title = mysqli_real_escape_string($link, $_POST['kik']);

echo $book_authorid;
echo $book_title;

$SQLquery = "INSERT INTO foto (foto, kvartiri_id_kvartiri) VALUES ((SELECT max(id_foto)+1 from (Select id_foto from foto) as id_foto), $book_authorid,'$book_title')";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

?>