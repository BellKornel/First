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

	$SQLquery = 'SELECT * FROM kvartiri';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>adres</TH> %s',"\n");
	printf('	<TH>ploshad</TH> %s',"\n");
	printf('	<TH>count komnat</TH> %s',"\n");
	printf('	<TH>etazh</TH> %s',"\n");
	printf('	<TH>kratkoe opisanie</TH> %s',"\n");
	printf('	<TH>4elovek_id_4elovek</TH> %s',"\n");
	printf('	<TH>komissia</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD>',$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

	?>
	<a href="index.html"> <P>GO BACK</P> </a>

	<TD>
			  <P>Add New Book:</P>
			  <form action="kvartiri_form_action.php" method="post">
          		  	adres: <input type="text" name="adres">
          		  	<br>
          		  	ploshad: <input type="text" name="ploshad">
          		  	<br>
          		  	count_komnat: <input type="text" name="count_komnat">
          		  	<br>
          		  	etazh: <input type="text" name="etazh">
          		  	<br>
          		  	kratk opsi: <input type="text" name="kratk">
          		  	<br>
				4elovek_id_4elovek: 
					<select name="4i4">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id_4elovek, CONCAT(name, \' \', familia) FROM 4elovek';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
					</select>
          		  	komissia: <input type="text" name="komissia">
          		  	<br>
				<br>
            		  	<input type="submit" value="Add kvartira">
      			  </form>
	</TD>
 </body>
</html>