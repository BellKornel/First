<html>
 <head>
  <title>WEB-site of the Alekseev Nikta's and Savvin Anton's website rieltors</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every human:</P> %s',"\n");

	$link = mysqli_connect('10.14.129.132', 'AlekseevNikita', '9YFJ9skR','AlekseevNikitaDB')
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");

	$SQLquery = 'SELECT * FROM 4elovek';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>Family Name</TH> %s',"\n");
	printf('	<TH>First Name</TH> %s',"\n");
	printf('	<TH>Father name</TH> %s',"\n");
	printf('	<TH>Passport data</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD>',$result[1],$result[2],$result[3],$result[4]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

	?>
	<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>