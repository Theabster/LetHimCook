<?php
		// The server's URL or ip address
		$servername = "localhost";
		// Authentication details
		// Currently we have little to no security 
		// on our DBMS
		$username = "root";
		$password = "";
		// The name of the Database 
		// we wish to access managed by the DBMS
		// we are connecting to on the server
		$dbname = "let_him_cook";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		

		$sql = "SELECT * FROM `customers`";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		  echo "<table>\n<tr><th>Customer ID</th><th>Customer Name</th></tr>";
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			  // Customer ID: " . $row["customerNumber"]. " - Name: " . $row["customerName"] 
			echo "<tr>" . "<td>". $row["customerNumber"] . "</td>" . "<td>". $row["customerName"] ."</td>" . "</tr>";
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();
	?>
