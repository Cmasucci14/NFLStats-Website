<html>
<head>
<title>NFL Team Stats</title>
</head>
<style>
table, th, td {border:1px solid red; background-color:aqua}
</style>
<body style="background-color:white;">
<h2>NFL Team Stats</h2>
<hr style="height:20px;color:red;background-color:blue">
<h4>Here you can check out all the NFL teams from every Divsion and their most<br>
important stats. This graph includes all of the current stats of the NFL.</h4><br><br>

<h4>This is graph is sorted by fantasy point leaders.</h4>

       <table>
	<tr>
		<th>Team</th>
		<th>Head Coach</th>
		<th>Record</th>
		<th>Division</th>
    		<th>Pass Yards</th>
		<th>Rush Yards</th>
		<th>Touchdowns</th>
		<th>Turnovers</th>
	</tr>
  
<?php

//connection parameters
$server_name = "localhost";
$user = "adminer";
$pass = "Kickinglife14";  //add password
$db = "NFLStats";

//Try to connect
$con = new mysqli($server_name, $user, $pass, $db);

if ($con->connect_error)
   die("connection error");

//Else continue with query

$teamQ = "SELECT * FROM Team RIGHT OUTER JOIN Stat_Line using (statID) where statID < 99;";
$teamRes = $con->query($teamQ);

//Fetch each row and display players and their stats
$i = 0;
while ($i < $teamRes->num_rows)
  {
  $row = $teamRes->fetch_assoc();
  echo "<tr>";
  echo "<td>". $row["teamName"]."</td>";
  echo "<td>". $row["headCoach"]."</td>";
  echo "<td>". $row["record"]."</td>";
  echo "<td>". $row["divName"]."</td>";
  echo "<td>". $row["passYards"]."</td>";
  echo "<td>". $row["rushYards"]."</td>";
  echo "<td>". $row["touchdowns"]."</td>";
  echo "<td>". $row["turnOver"]."</td>";
  echo "</tr>";

  $i++;
  }

echo  "\n"; 

// close the connection
$con->close();
?>
      
  </table><br><hr>


<h4>Teams with the most touchdowns this season</h4>
  
<?php

//connection parameters
$server_name = "localhost";
$user = "adminer";
$pass = "Kickinglife14";  //add password
$db = "NFLStats";

//Try to connect
$con = new mysqli($server_name, $user, $pass, $db);

if ($con->connect_error)
   die("connection error");

//Else continue with query

$winQ = "SELECT * FROM Team RIGHT OUTER JOIN Stat_Line using (statID) where statID < 99 order by touchdowns DESC;";
$winRes = $con->query($winQ);

//Fetch each row and display players and their stats
$i = 0;
echo "<ol>";
while ($i < 5)
  {
  $row = $winRes->fetch_assoc();
  echo "<li>". $row["teamName"]. " with ". $row["touchdowns"]. " touchdowns</li>";

  $i++;
  }
echo "</ol><br><h4>Top 5 teams with the most rushing yards this season</h4>";

$rushQ = "SELECT * FROM Team RIGHT OUTER JOIN Stat_Line using (statID) where statID < 99 order by rushYards DESC;";
$rushRes = $con->query($rushQ);

//Fetch each row and display players and their stats
$i = 0;
echo "<ol>";
while ($i < 5)
  {
  $row = $rushRes->fetch_assoc();
  echo "<li>". $row["teamName"]. " with ". $row["rushYards"]. " yards</li>";

  $i++;
  }

echo "</ol>";

echo  "\n";

$divisionQ = "SELECT * FROM Division;";
$divisionRes = $con->query($divisionQ);

$divisionStatQ = "SELECT * FROM Team RIGHT OUTER JOIN Division using (divName) RIGHT OUTER JOIN Stat_Line USING (statID) where statID < 99 order by rushYards DESC;";
$divisionStatRes = $con->query($divisionStatQ);

echo '<h4>Take a look at these division stats to see who is the powerhouse this year.</h4>';
echo '<script>
	const divs = [';
$i = 0;
while ($i < (($divisionRes->num_rows) - 1))
  {
  $row = $divisionRes->fetch_assoc();
  echo '{division: "'. $row["divName"]. '", passYards: 0, rushYards: 0, touchdowns: 0}, ';

  $i++;
  }
echo '{division: "'. $row["divName"]. '", passYards: 0, rushYards: 0, touchdowns: 0}';
echo '];';


//Fetch each row and display divisions and their stats
$i = 0;
while ($i < $divisionStatRes->num_rows)
  {
  $row = $divisionStatRes->fetch_assoc();
  echo'for(let i = 0; i < divs.length; i++){
		if(divs[i].division == "'. $row["divName"]. '"){
			divs[i].passYards += '. $row["passYards"]. ';
			divs[i].rushYards += '. $row["rushYards"]. ';
			divs[i].touchdowns += '. $row["touchdowns"]. ';
		}
	}';
  $i++;
  }


// close the connection
$con->close();
?>
//print the table using javascript
document.write("<table><tr><th>Divison</th><th>Pass Yards</th><th>Rush Yards</th><th>Touchdowns</th></tr>");

	for(let i = 0; i < divs.length; i++){
		document.write("<tr><td> " + divs[i].division + "</td><td> " + divs[i].passYards + "</td><td> " + divs[i].rushYards + "</td><td> " + divs[i].touchdowns + "</td></tr>");
		}
</script>
</table>

<br>

<a href="NFLStats.php">Click here to go back to the main screen</a><br><br>


<h4>Check out the latest news on your favorite team by clicking on the image below</h4>
<a href="https://www.nfl.com/news/" target="_blank"><img src="logos.png" alt="NFL logo" style="width:500px;"></a>
<br><br>

//my logo
<svg width="290" height="290">
  <rect width="300" height="300" x="0" y="0" style = "fill:blue"/>
  <ellipse cx="145", cy="70", rx="100", ry="55" style = "fill:#6E260E"/>
  <rect width="10" height="19" x="100" y="18" style = "fill:white"/>
  <rect width="10" height="19" x="120" y="15" style = "fill:white"/>
  <rect width="10" height="19" x="140" y="15" style = "fill:white"/>
  <rect width="10" height="19" x="160" y="15" style = "fill:white"/>
  <rect width="10" height="19" x="180" y="18" style = "fill:white"/>

  <rect width="20" height="120" x="140" y="150" style = "fill:yellow"/>
  <rect width="130" height="10" x="140" y="150" style = "fill:yellow"/>
  <rect width="130" height="10" x="20" y="150" style = "fill:yellow"/>
  <rect width="10" height="140" x="20" y="10" style = "fill:yellow"/>
  <rect width="10" height="140" x="260" y="10" style = "fill:yellow"/>

  <text fill="red" font-size="30" font-family="Verdana" x="70" y="86">NFL Stats</text>

</svg>



<h2>This page was made by &copy;Christiaan Masucci</h2>
<h3>&trade;Christiaan's 425 Final Project</h3>



</body>
</html>