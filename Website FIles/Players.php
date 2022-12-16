<html>
<head>
<title>NFL Player Stats</title>
</head>
<style>
table, th, td {border:1px solid red; background-color:aqua}
</style>
<body style="background-color:white;">
<h2>NFL Player Stats</h2>
<hr style="height:20px;color:red;background-color:blue">
<h4>Here you can check out all the Best know Quarterbacks and their most<br>
important stats. This graph includes all of the current starting quarterbacks.</h4><br><br>

<h4>This is graph is sorted by fantasy point leaders.</h4>

   <table>
	<tr>
		<th>Player</th>
		<th>Number</th>
		<th>Position</th>
    		<th>Pass Yards</th>
		<th>Rush Yards</th>
		<th>Completion Percentage</th>
		<th>Touchdowns</th>
		<th>Interceptions</th>
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

$playerQ = "SELECT * FROM Player RIGHT OUTER JOIN Stat_Line using (statID) where statID > 99;";
$playerRes = $con->query($playerQ);

//Fetch each row and display players and their stats
$i = 0;
while ($i < $playerRes->num_rows)
  {
  $row = $playerRes->fetch_assoc();
  echo "<tr>";
  echo "<td>". $row["pName"]."</td>";
  echo "<td>".$row["pNumber"]."</td>";
  echo "<td>". $row["position"]."</td>";
  echo "<td>". $row["passYards"]."</td>";
  echo "<td>". $row["rushYards"]."</td>";
  echo "<td>". $row["comPC"]."</td>";
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

<h4>Top 5 Passing Yard Leaders</h4>
  
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

$yardsQ = "SELECT * FROM Player RIGHT OUTER JOIN Stat_Line using (statID) where statID > 99 order by passYards DESC;";
$yardsRes = $con->query($yardsQ);

//Fetch each row and display players and their stats
$i = 0;
echo "<ol>";
while ($i < 5)
  {
  $row = $yardsRes->fetch_assoc();
  echo "<li>". $row["pName"]."</li>";

  $i++;
  }
echo "</ol><br><h4>QBs with the most turnovers</h4>";

$turnoverQ = "SELECT * FROM Player RIGHT OUTER JOIN Stat_Line using (statID) where statID > 99 order by turnOver DESC;";
$turnoverRes = $con->query($turnoverQ);

//Fetch each row and display players and their stats
$i = 0;
echo "<ol>";
while ($i < 5)
  {
  $row = $turnoverRes->fetch_assoc();
  echo "<li>". $row["pName"]."</li>";

  $i++;
  }

echo  "\n"; 

// close the connection
$con->close();
?><br>

<a href="NFLStats.php">Click here to go back to the main screen</a><br><br>


<h4>Check out the latest news on your favorite quaterback by clicking on the image below</h4>
<a href="https://www.nfl.com/news/nfl-qb-index-week-1-ranking-all-32-starters-entering-2022-season" target="_blank"><img src="QBPic.jpg" alt="NFL logo" style="width:500px;"></a>
<br><br>


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