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
		echo "<br>";
		echo "<div class='well'>";
			echo "<p>Price Watch of Bayan-Ani shows prices of selected Vegetables and Fruits in wet markets in Metro Manila.</p>";
			echo "<p>Prices are updated THRICE a WEEK and is from the BUREAU of AGRICULTURAL STATISTICS.</p>";
		echo "</div>";
		
		
echo "</div>";
echo "<br>";

echo "<div class='container'>";
	echo "<div class='panel panel-danger'>";
		echo "<div class='panel-heading text-center'>";
		echo "<p>"."Last Updated June 9, 2015"."</p>";
		echo "</div>";
	echo "</div>";
echo "</div>";
mysqli_select_db($conn,"db_bayanani");

$sql = "SELECT * FROM tbl_vegpricewatch";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<div class='container-fluid'>";
	echo "<div class='table-responsive'>";
		echo "<table class='table table-condensed'>";
		echo "<thead>";
			echo   	"<tr>";
			echo 	"<th>Vegetables</th>";
			echo 	"<th>Prevailing Price</th>";
			echo 	"<th>Lowest Price</th>";
			echo 	"<th>Highest Price</th>";
			echo 	"</tr>";
		echo "</thead>";
		echo "<tbody>";
	
    while($row = mysqli_fetch_assoc($result)) {
    
		echo "<tr>";
        echo "<td>".$row["fld_vegtype"]."</td>";
        echo "<td>".$row["fld_vegprevailing"]." Php/kg"."</td>";
		echo "<td>".$row["fld_veglowest"]." Php/kg"."</td>";
		echo "<td>".$row["fld_veghighest"]." Php/kg"."</td>";
		echo "</tr>";
		
		
    }
	
	echo "</tbody>";
		echo "</table>";
	echo "</div>";
} else {
    echo "0 results";
}

$sql = "SELECT * FROM tbl_fruitpricewatch";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
		echo "<div class='table-responsive'>";
		echo "<table class='table table-condensed'>";
		
		echo "<thead>";
			echo   	"<tr>";
			echo 	"<th>Fruits</th>";
			echo 	"<th>Prevailing Price</th>";
			echo 	"<th>Lowest Price</th>";
			echo 	"<th>Highest Price</th>";
			echo 	"</tr>";
		echo "</thead>";
		echo "<tbody>";
	
    while($row = mysqli_fetch_assoc($result)) {
    
		echo "<tr>";
        echo "<td>".$row["fld_fruittype"]."</td>";
        echo "<td>".$row["fld_fruitprevailing"]." Php/kg"."</td>";
		echo "<td>".$row["fld_fruitlowest"]." Php/kg"."</td>";
		echo "<td>".$row["fld_fruithighest"]." Php/kg"."</td>";
		echo "</tr>";
		
		
    }
	
	echo "</tbody>";
		echo "</table>";
	echo "</div>";
	echo "</div>";
} else {
    echo "0 results";
}

echo "<div class='container'>";
	echo "<div class='panel panel-danger'>";
		echo "<div class='panel-heading text-center'>";
		echo "<p>"."ALL PRICES IN THIS WEBAPP OR ITS LINKS ARE SUBJECT TO CHANGE WITHOUT PRIOR NOTICE"."</p>";
		echo "</div>";
	echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>