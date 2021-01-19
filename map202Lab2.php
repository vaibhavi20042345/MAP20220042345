
<html>
	<head>
		<style>
			table, th, td{
				border: 1px solid black;
			}
		</style>
		
	</head>
<body>

<?php
$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                            1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);

?>
<table>
	<tr>
	<th>movie name</th>
		<th>genre</th>
	</tr>
	<?php
 foreach($films as $genre => $movies) {
	  foreach($movies as $movie) {
  echo '<tr><td>' .$movie. '</td><td>' .$genre. '</td></tr>';
}
}
	?>
</table>
	
	<?php
	$favorites = array(
				array (
				"Name" => "Dave Punk",
				"Phone" => "5689741523",
				"Email" => "davepunk@gmail.com"),
				array (
				"Name" => "Monty Smith",
				"Phone" => "2584369721",
				"Email" => "montysmith@gmail.com"),
				array (
				"Name" => "John Flinch",
				"Phone" => "9875147536",
				"Email" => "johnflinch@gmail.com")
				);
	?>
	<br>
	<br>
	
<table>
	<tr>
	<th>name</th>
	<th>phone</th>
	<th>email</th>
	</tr>
	<?php
	foreach($favorites as $detail) {
  	echo '<tr><td>' .$detail['Name']. '</td><td>' .$detail['Phone']. '</td><td>' .$detail['Email']. '</td></tr>';
	}	
	?>
</table>
	
</body>
</html>
