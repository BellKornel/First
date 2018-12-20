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

	$SQLquery = 'SELECT * FROM foto';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>foto</TH> %s',"\n");
	printf('	<TH>kvartiri_id_kvartiri</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD> %s </TD>',$result[1],$result[2]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

	?>
	<a href="index.html"> <P>GO BACK</P> </a>

	<TD>
			  <P>Add New Book:</P>
			  <form action="foto_form_action.php" method="post">
          		  	foto: <input type="text" name="foto">
          		  	<br>
				kvartiri_id_kvartiri: 
				<select name="kik">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id_kvartiri FROM kvartiri';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
				<br>
            		  	<input type="submit" value="Add FOTO">
      			  </form>
	</TD>
 </body>
</html>