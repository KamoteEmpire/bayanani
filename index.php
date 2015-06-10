<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";



echo "<html>";
echo "<head>";
echo "<link rel=stylesheet href=css/bootstrap.min.css>";
echo "</head>";
echo "<body>";

echo "<div class=container-fluid>";
		echo "<div class=jumbotron style=background-color:green;>";
			echo "<h1 style=color:white;>Bayan-Ani</h1>";      
			echo "<h3 style=color:white;>Helping Ani ng Bayan <strong>GROW</strong> their <strong>CROPS</strong>, <strong>REVENUE</strong> and <strong>REACH</strong></h3>";     
		echo "</div>";
		
		
	
				echo "<div class='row'>";
					echo "<div class='col-md-3 col-sm-6 col-xs-12 text-center'>";
						echo "<a href='index.php' class='btn btn-info btn-lg btn-block' role='button'><h3>Advisory</h3></a>";
					echo "</div>";
					echo "<div class='col-md-3 col-sm-6 col-xs-12 text-center'>";
						echo "<a href='pricewatch.php' class='btn btn-warning btn-lg btn-block' role='button'><h3>Price Watch</h3></a>";
					echo "</div>";
					echo "<div class='col-md-3 col-sm-6 col-xs-12 text-center'>";
						echo "<a href='#' class='btn btn-success btn-lg btn-block' role='button'><h3>Buy Harvest</h3></a>";
					echo "</div>";
					echo "<div class='col-md-3 col-sm-6 col-xs-12 text-center'>";
						echo "<a href='#' class='btn btn-primary btn-lg btn-block' role='button'><h3>Sell Harvest</h3></a>";
					echo "</div>";
				echo "</div>";
			
		
		
		
		
		
		
echo "</div>";
echo "<br>";
mysqli_select_db($conn,"db_bayanani");

$sql = "SELECT * FROM tbl_agrinews ORDER by fld_date desc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='container' style='background-color: #5bc0de;'>";
		echo "<br>";
		echo "<img src=".$row["fld_articlepic"]." style='float:left; width: 150px; height: 150px;' Hspace='10' />";
		echo "<h3>".$row["fld_title"]."</h3>";
		echo "<small>".$row["fld_author"]."</small>"." "."<small>".$row["fld_date"]."</small>";
		echo "<p>".$row["fld_article"]."<small>Read More..."."</small>"."</p>";
		echo "<br>";
		echo "<br>";
		echo "</div>";
		
    }
} else {
    echo "0 results";
}

echo "</body>";
echo "</html>";
?>