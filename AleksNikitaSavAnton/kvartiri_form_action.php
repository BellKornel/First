<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$adres = mysqli_real_escape_string($link, $_POST['adres']);
$ploshad = mysqli_real_escape_string($link, $_POST['ploshad']);
$count_komnat = mysqli_real_escape_string($link, $_POST['count_komnat']);
$etazh = mysqli_real_escape_string($link, $_POST['etazh']);
$kratk = mysqli_real_escape_string($link, $_POST['kratk']);
$4i4 = mysqli_real_escape_string($link, $_POST['4i4']);
$komissia = mysqli_real_escape_string($link, $_POST['komissia']);

echo $adres;
echo $ploshad;
echo $count_komnat;
echo $etazh;
echo $kratk;
echo $4i4;
echo $komissia;

$SQLquery = "INSERT INTO kvartiri (id_kvartiri, adres, ploshad, count komnat, etazh, kratk, 4i4, komissia) VALUES ((SELECT max(id_kvartiri)+1 from (Select id_kvartiri from kvartiri) as id_kvartiri), $adres,'$ploshad',$count_komnat, $etazh, $kratk, $4i4, $komissia)";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

?>
