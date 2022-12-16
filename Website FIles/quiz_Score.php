<html>
<head>
<title>NFL Team Stats</title>
</head>
<style>
table, th, td {border:1px solid red; background-color:aqua}
</style>
<body style="background-color:white;">
<h2>Quiz Results</h2>
<hr style="height:20px;color:red;background-color:blue"><br>

<?php
$score = 0;
$q1 = $_POST['Pass_Yards'];
$q2 = $_POST['record'];
$q3 = $_POST['Coach'];
$q4 = $_POST['rushYards'];
$q5 = $_POST['playFor'];

echo "<h3>Congrats ". $_POST["firstname"]. ".</h3><br><br>";
echo "<h4>Question 1 Answer: Patrick Mahomes<br>You selected: ". $q1. "<br>";
echo "<h4>Question 2 Answer: 49ers<br>You selected: ". $q2. "<br>";
echo "<h4>Question 3 Answer: Andy Reid<br>You selected: ". $q3. "<br>";
echo "<h4>Question 4 Answer: Justin Fields<br>You selected: ". $q4. "<br>";
echo "<h4>Question 5 Answer: Giants<br>You selected: ". $q5. "<br>";

?>


<h4>Thanks for taking the Quiz</h4>

<a href="NFLStats.php">Click here to go back to the main screen</a><br><br>

</body>
</html>