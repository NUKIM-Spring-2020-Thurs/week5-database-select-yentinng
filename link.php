<?php
$link = @mysqli_connect( 
            'localhost',  
            'root',
            'password',
            'php2020');
$SQL = 	"
		SELECT * 
		FROM employee  ;

		";

if($result=mysqli_query($link,$SQL)){
	echo "<table border= '1'>";
	echo 	"<tr>".
			"<td><b>NO</b></td>".
			"<td><b>Fname</b></td>".
			"<td><b>Minit</b></td>".
			"<td><b>Lname</b></td>".
			"<td><b>Bdate</b></td>".
			"<td><b>Address</b></td>".
			"<td><b>Sex</b></td>".
			"<td><b>Salary</b></td>".
			"</tr>";

	while ($row=mysqli_fetch_assoc($result)) {
	 	echo "<tr>".
			 	"<td>".$row['No']."</td>".
	 			"<td>".$row['Fname']."</td>".
	 			"<td>".$row['Minit']."</td>".
	 			"<td>".$row['Lname']."</td>".
	 			"<td>".$row['Bdate']."</td>".
	 			"<td>".$row['Address']."</td>".
	 			"<td>".$row['Sex']."</td>".
	 			"<td>".$row['Salary']."</td>".
	 		 "</tr>";
	 }

	 echo "</table>";
}
else{	echo "找不到資料<br>";

		}

?>