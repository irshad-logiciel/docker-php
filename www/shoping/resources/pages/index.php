<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php 
		$conn = mysqli_connect('db', 'root', 'root', "myDb");

		$query = 'SELECT * From Person';
	    $result = mysqli_query($conn, $query);

	    echo '<table class="table table-striped">';
	    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
	    while($value = $result->fetch_array(MYSQLI_ASSOC)){
	        echo '<tr>';
	        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
	        foreach($value as $element){
	            echo '<td>' . $element . '</td>';
	        }

	        echo '</tr>';
	    }
	    echo '</table>';

	    /* Libération du jeu de résultats */
	    $result->close();

	    mysqli_close($conn);
	?>
	<h1>HELLO WORLD</h1>

</body>
</html>