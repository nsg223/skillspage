<html>
<head>
	<title>Skills Page</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/extra.css" />
</head>
<body>
<?php 
	//Including The List of All Skills + Get Functions
	require_once("lib.php");
	require_once("../bl/dbcon.php");
	echo "<h2><img src='http://api.ryzom.com/data/cache/guild_icons/125103814855873_b.png' /> &nbsp;Skills Page </h2>";

	/* Used for Dynamic Page with database
	$getapi = mysqli_query($con, "SELECT * FROM `skillsapi`") or die ("MySQL Error: ".mysqli_error($con));
	$x = 0;
	$apikeys = array();
    while ($row = mysqli_fetch_array($getapi)) {
    	$apikeys[$x] = $row['key'];
        $x++;
    }
    */
 	$apikeys = array("apikey1", "apikey2");

	$player = array();
	for ($i = 0; $i < count($apikeys); $i++) {
		$xml=simplexml_load_file("http://api.ryzom.com/character.php?apikey=".$apikeys[$i]);
		$player[$i] = returndata($xml);
	}

		//TABLE HTML
	echo "<table class='table table-striped table-hover'>";
		//COUNT THROUGHT ALL SKILLS + HEADINGS + SPACING
	for ($i = 0; $i < 68; $i++) {
		if ($i == 0 || $i == 5 || $i == 21 || $i == 61 || $i == 67) {
		echo "<tr class='info'>"; }
		else {
			echo "<tr>";
		}
		echo "<td style='text-align:left;'>".$rskills[$i]."</td>";
		
		for ($n = 0; $n < count($apikeys); $n++) {
			if ($player[$n][$i] == 250 ) {
				echo "<td style='color: red;'>".$player[$n][$i]."</td>";
				$player[$n][67]++;
			} elseif ($player[$n][$i] > 200 && $player[$n][$i] != 250) {
				echo "<td style='color: orange;'>".$player[$n][$i]."</td>";
			}
			else {
			echo "<td>".$player[$n][$i]."</td>";
			}
		}

	}
	echo "</table>";
	
	echo "<p>Created by Firstdo</p>";
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<script src="js/bootstrap.min.js"> </script>
</body>
