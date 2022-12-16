<html>
<head>
<title>NFL Stat Tracker</title>
</head>
<style>
table, th, td {border:1px solid black;}
</style>
<body style="background-color:aqua;">
<h1>NFL Stat Tracker</h1>
<hr style="height:20px;color:red;background-color:red">
<h4>Welcome to NFL Stat Tracker here you will be able to explore all of your<br>
favorite NFL states and learn a bit more about your favorite teams and players.<br>
You can begin by selecting your favorite team.</h4>

<a href="Players.php">Check out all your favorite Quarterback stats</a>
<h4> OR </h4>
<a href="Teams.php">Check out all your favorite team and division stats</a><br><br>

<br><br>
<h4>Check out the latest NFL news by clicking on the logo below</h4>
<a href="http://www.NFL.com" target="_blank"><img src="NFLLogo.jpg" alt="NFL logo" style="width:500px;"></a><br><br>
<hr>

<h3>Test your NFL stat knowlage by taking this quiz.</h3>

<form action = "quiz_Score.php" method = "post">
	<label for="firstname">First name:</label><br>
	<input type="text" id="firstname" name="firstname"><br><br>

	What QB holds the stat for most passing yards this season?<br>
	<input type="radio" id="Josh" name="Pass_Yards" value="Josh Allen">
	<label for="Josh">Josh Allen</label><br>
	<input type="radio" id="Patrick" name="Pass_Yards" value="Patrick Mahomes">
	<label for="Patrick">Patrick Mahomes</label><br>
	<input type="radio" id="Lamar" name="Pass_Yards" value="Lamar Jackson">
	<label for="Lamar">Lamar Jackson</label><br>
	<input type="radio" id="Joe" name="Pass_Yards" value="Joe Burrow">
	<label for="Joe">Joe Burrow</label><br>

	Which of these teams have a positive record this season?<br>
	<input type="radio" id="Colts" name="record" value="Colts">
	<label for="Colts"> Indianapolis Colts</label><br>
	<input type="radio" id="49ers" name="record" value="49ers">
	<label for="49ers"> San Francisco 49ers</label><br>
	<input type="radio" id="Packers" name="record" value="Packers">
	<label for="Packers"> Green Bay Packers</label><br>
	<input type="radio" id="Rams" name="record" value="Rams">
	<label for="Rams"> Los Angeles Rams</label><br><br>

	Who is the current head coach for the Kansas City Chiefs?<br>
	<input type="radio" id="Pete" name="Coach" value="Pete Carroll">
	<label for="Pete">Pete Carroll</label><br>
	<input type="radio" id="Brian" name="Coach" value="Brian Daboll">
	<label for="Brian">Brian Daboll</label><br>
	<input type="radio" id="Kliff" name="Coach" value="Kliff Kingsbury">
	<label for="Kliff">Kliff Kingsbury</label><br>
	<input type="radio" id="Andy" name="Coach" value="Andy Reid">
	<label for="Andy">Andy Reid</label><br>

	Which QB has the most rushing yards this season?<br>
	<input type="radio" id="Justin" name="rushYards" value="Justin Fields">
	<label for="Justin">Justin Fields</label><br>
	<input type="radio" id="Geno" name="rushYards" value="Geno Smith">
	<label for="Geno">Geno Smith</label><br>
	<input type="radio" id="Kirk" name="rushYards" value="Kirk Cousins">
	<label for="Kirk">Kirk Cousins</label><br>
	<input type="radio" id="Derek" name="rushYards" value="Derek Carr">
	<label for="Derek">Derek Car</label><br>

	What team does the QB Daniel Jones Play for?<br>
	<input type="radio" id="Eagles" name="playFor" value="Eagles">
	<label for="Eagles">Eagles</label><br>
	<input type="radio" id="Browns" name="playFor" value="Browns">
	<label for="Browns">Browns</label><br>
	<input type="radio" id="Jets" name="playFor" value="Jets">
	<label for="Jets">Jets</label><br>
	<input type="radio" id="Giants" name="playFor" value="Giants">
	<label for="Giants">Giants</label><br>

	<input type="submit" value="Submit"><br>
	<input type="reset" value="Reset">
</form> <br><br>

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