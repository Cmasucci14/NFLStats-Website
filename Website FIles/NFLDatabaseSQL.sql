drop database NFLStats;
CREATE DATABASE NFLStats;
use NFLStats;

CREATE TABLE Stat_Line(
	statID int PRIMARY KEY NOT NULL,
    passYards int NOT NULL,
    rushYards int NOT NULL,
    touchdowns int NOT NULL,
    comPC float NOT NULL,
    turnOver int NOT NULL);
    
CREATE TABLE Division(
	divName char(50) PRIMARY KEY NOT NULL,
    conference char(50) NOT NULL);
    
CREATE TABLE Team(
	teamName varchar(50) PRIMARY KEY NOT NULL,
    headCoach varchar(50) NOT NULL,
    record varchar(50),
    statID int NOT NULL,
    divName char(50) NOT NULL,
    foreign key (statID) references Stat_Line(statID),
    foreign key (divName) references Division(divName));
    
CREATE TABLE Player(
	playerID INT primary key NOT NULL,
	pName varchar(100) NOT NULL,
	pNumber varchar(100) NOT NULL,
	position varchar(50) NOT NULL,
	pTeam varchar(50) NOT NULL,
	statID int NOT NULL,
	foreign key (pTeam) references Team(teamName),
	foreign key (statID) references Stat_Line(statID));
    

INSERT INTO Stat_Line VALUES(1, 2675, 1368, 29, 65.2, 13);
INSERT INTO Stat_Line VALUES(2, 1826, 2304, 28, 59.4, 15);
INSERT INTO Stat_Line VALUES(3, 3250, 1059, 34, 68.5, 12);
INSERT INTO Stat_Line VALUES(4, 3414, 1636, 37, 63.6, 20);
INSERT INTO Stat_Line VALUES(5, 2594, 1147, 14, 58.1, 12);
INSERT INTO Stat_Line VALUES(6, 2608, 1698, 30, 64, 15);
INSERT INTO Stat_Line VALUES(7, 3051, 803, 19, 66, 9);
INSERT INTO Stat_Line VALUES(8, 2886, 1379, 29, 66.7, 13);
INSERT INTO Stat_Line VALUES(9, 3004, 944, 27, 67.1, 12);
INSERT INTO Stat_Line VALUES(10, 3585, 1263, 39, 65.6, 15);
INSERT INTO Stat_Line VALUES(11, 2946, 1196, 18, 68, 21);
INSERT INTO Stat_Line VALUES(12, 2658, 1453, 25, 61.5, 14);
INSERT INTO Stat_Line VALUES(13, 2444, 1531, 30, 63.6, 11);
INSERT INTO Stat_Line VALUES(14, 3364, 1043, 32, 66.4, 11);
INSERT INTO Stat_Line VALUES(15, 2583, 1788, 39, 67.2, 10);
INSERT INTO Stat_Line VALUES(16, 2052, 1920, 30, 62, 16);
INSERT INTO Stat_Line VALUES(17, 2176, 1662, 24, 64.3, 11);
INSERT INTO Stat_Line VALUES(18, 2655, 1434, 28, 66.3, 14);
INSERT INTO Stat_Line VALUES(19, 2514, 1261, 25, 58.7, 13);
INSERT INTO Stat_Line VALUES(20, 2688, 1424, 34, 63.8, 14);
INSERT INTO Stat_Line VALUES(21, 2868, 1455, 28, 64.9, 17);
INSERT INTO Stat_Line VALUES(22, 2267, 1401, 23, 58.3, 16);
INSERT INTO Stat_Line VALUES(23, 2781, 1259, 24, 69, 17);
INSERT INTO Stat_Line VALUES(24, 2806, 1351, 28, 63.1, 9);
INSERT INTO Stat_Line VALUES(25, 2478, 877, 19, 66.8, 17);
INSERT INTO Stat_Line VALUES(26, 2231, 1790, 29, 62.1, 12);
INSERT INTO Stat_Line VALUES(27, 2996, 1358, 28, 65.2, 21);
INSERT INTO Stat_Line VALUES(28, 2802, 1308, 33, 72.6, 15);
INSERT INTO Stat_Line VALUES(29, 2402, 1250, 18, 64.6, 14);
INSERT INTO Stat_Line VALUES(30, 2359, 973, 17, 62.2, 16);
INSERT INTO Stat_Line VALUES(31, 2121, 1352, 24, 62.6, 11);
INSERT INTO Stat_Line VALUES(32, 2858, 1093, 30, 65.4, 12);

INSERT INTO Division VALUES("AFC East", "AFC");
INSERT INTO Division VALUES("AFC North", "AFC");
INSERT INTO Division VALUES("AFC South", "AFC");
INSERT INTO Division VALUES("AFC West", "AFC");
INSERT INTO Division VALUES("NFC East", "NFC");
INSERT INTO Division VALUES("NFC North", "NFC");
INSERT INTO Division VALUES("NFC South", "NFC");
INSERT INTO Division VALUES("NFC West", "NFC");

INSERT INTO Team VALUES("49ers", "Kyle Shanahan", "7-4", 1, "NFC West");
INSERT INTO Team VALUES("Bears", "Matt Eberflus", "3-9", 2, "NFC North");
INSERT INTO Team VALUES("Bengals", "Zac Taylor", "7-4", 3, "AFC North");
INSERT INTO Team VALUES("Bills", "Sean McDermott", "9-3", 4, "AFC East");
INSERT INTO Team VALUES("Broncos", "Nathaniel Hackett", "3-8", 5, "AFC West");
INSERT INTO Team VALUES("Browns", "Kecin Stefanski", "4-7", 6, "AFC North");
INSERT INTO Team VALUES("Buccanerrs", "Todd Bowles", "5-6", 7, "NFC South");
INSERT INTO Team VALUES("Cardinals", "Kliff Kingsbury", "4-8", 8, "NFC West");
INSERT INTO Team VALUES("Chargers", "Brandon Staley", "6-5", 9, "AFC West");
INSERT INTO Team VALUES("Chiefs", "Andy Reid", "9-2", 10, "AFC West");
INSERT INTO Team VALUES("Colts", "Jeff Saturday", "4-7", 11, "AFC South");
INSERT INTO Team VALUES("Commanders", "Ron Rivera", "7-5", 12, "NFC East");
INSERT INTO Team VALUES("Cowboys", "Mike McCarthy", "8-3", 13, "NFC East");
INSERT INTO Team VALUES("Dolphins", "Mike McDaniel", "8-3", 14, "AFC East");
INSERT INTO Team VALUES("Eagles", "Nick Sirianni", "10-1", 15, "NFC East");
INSERT INTO Team VALUES("Falcons", "Arthur Smith", "5-7", 16, "NFC South");
INSERT INTO Team VALUES("Giants", "Brian Daboll", "7-4", 17, "NFC East");
INSERT INTO Team VALUES("Jaguars", "Doug Pederson", "4-7", 18, "AFC South");
INSERT INTO Team VALUES("Jets", "Robert Saleh", "7-4", 19, "AFC East");
INSERT INTO Team VALUES("Lions", "Dan Campbell", "4-7", 20, "NFC North");
INSERT INTO Team VALUES("Packers", "Matt LaFleur", "4-8", 21, "NFC North");
INSERT INTO Team VALUES("Panthers", "Steve Wilks", "4-8", 22, "NFC South");
INSERT INTO Team VALUES("Patriots", "Bill Belichick", "6-6", 23, "AFC East");
INSERT INTO Team VALUES("Raiders", "Josh McDaniels", "4-7", 24, "AFC West");
INSERT INTO Team VALUES("Rams", "Sean McVay", "3-8", 25, "NFC West");
INSERT INTO Team VALUES("Ravens", "John Harbaugh", "7-4", 26, "AFC North");
INSERT INTO Team VALUES("Saints", "Dennis Allen", "4-8", 27, "NFC South");
INSERT INTO Team VALUES("Seahawks", "Pete Carroll", "6-5", 28, "NFC West");
INSERT INTO Team VALUES("Steelers", "Mike Tomlin", "4-7", 29, "AFC North");
INSERT INTO Team VALUES("Texans", "Lovie Smith", "1-9", 30, "AFC South");
INSERT INTO Team VALUES("Titans", "Mike Vrabel", "7-4", 31, "AFC South");
INSERT INTO Team VALUES("Vikings", "Kevin O'Connell", "9-2", 32, "NFC North");

INSERT INTO Stat_Line VALUES(101, 3406, 581, 30, 64.1, 11);
INSERT INTO Stat_Line VALUES(102, 3585, 274, 30, 66.1, 8);
INSERT INTO Stat_Line VALUES(103, 2550, 600, 25, 67.3, 3);
INSERT INTO Stat_Line VALUES(104, 3160, 178, 27, 68.2, 8);
INSERT INTO Stat_Line VALUES(105, 2231, 755, 20, 62.1, 7);
INSERT INTO Stat_Line VALUES(106, 1642, 834, 20, 59.6, 8);
INSERT INTO Stat_Line VALUES(107, 2802, 240, 20, 72.8, 5);
INSERT INTO Stat_Line VALUES(108, 3004, 128, 19, 67.4, 7);
INSERT INTO Stat_Line VALUES(109, 2359, 415, 17, 66.3, 7);
INSERT INTO Stat_Line VALUES(110, 2653, 179, 21, 62.4, 6);
INSERT INTO Stat_Line VALUES(111, 2052, 421, 19, 63.8, 8);
INSERT INTO Stat_Line VALUES(112, 2682, 63, 14, 60.4, 9);
INSERT INTO Stat_Line VALUES(113, 2760, 49, 18, 59.9, 9);
INSERT INTO Stat_Line VALUES(114, 2165, 451, 14, 70.2, 4);
INSERT INTO Stat_Line VALUES(115, 2730, 77, 14, 67.8, 7);
INSERT INTO Stat_Line VALUES(116, 2608, 238, 19, 65.8, 6);
INSERT INTO Stat_Line VALUES(117, 3051, -6, 17, 66.9, 2);
INSERT INTO Stat_Line VALUES(118, 2564, 35, 18, 69.5, 3);
INSERT INTO Stat_Line VALUES(119, 2682, 44, 12, 63.2, 7);
INSERT INTO Stat_Line VALUES(120, 2351, 33, 9, 62, 4);
INSERT INTO Stat_Line VALUES(121, 2642, 72, 14, 63.7, 10);
INSERT INTO Stat_Line VALUES(122, 2369, 137, 12, 61, 5);
INSERT INTO Stat_Line VALUES(123, 2023, 53, 11, 67.8, 7);
INSERT INTO Stat_Line VALUES(124, 2155, 38, 11, 67.9, 11);
INSERT INTO Stat_Line VALUES(125, 2053, 9, 8, 68.9, 8);
INSERT INTO Stat_Line VALUES(126, 2155, 47, 6, 63, 4);
INSERT INTO Stat_Line VALUES(127, 1962, 88, 11, 67.3, 7);
INSERT INTO Stat_Line VALUES(128, 1600, 195, 10, 68.2, 8);
INSERT INTO Stat_Line VALUES(129, 1393, 71, 7, 60.2, 6);
INSERT INTO Stat_Line VALUES(130, 1498, 79, 8, 59.6, 6);
INSERT INTO Stat_Line VALUES(131, 1313, 52, 5, 57.8, 6);
INSERT INTO Stat_Line VALUES(132, 1279, 94, 5, 55.6, 5);

INSERT INTO Player VALUES(1, "Josh Allen", 17, "QB", "Bills", 101);
INSERT INTO Player VALUES(2, "Patrick Mahomes", 15, "QB", "Chiefs", 102);
INSERT INTO Player VALUES(3, "Jalen Hurts", 1, "QB", "Eagles", 103);
INSERT INTO Player VALUES(4, "Joe Burrow", 9, "QB", "Bengals", 104);
INSERT INTO Player VALUES(5, "Lamar Jackson", 8, "QB", "Ravens", 105);
INSERT INTO Player VALUES(6, "Justin Fields", 1, "QB", "Bears", 106);
INSERT INTO Player VALUES(7, "Geno Smith", 7, "QB", "Seahawks", 107);
INSERT INTO Player VALUES(8, "Justin Herbert", 10, "QB", "Chargers", 108);
INSERT INTO Player VALUES(9, "Kyler Murray", 1, "QB", "Cardinals", 109);
INSERT INTO Player VALUES(10, "Trevor Lawrence", 16, "QB", "Jaguars", 110);
INSERT INTO Player VALUES(11, "Marcus Mariota", 1, "QB", "Falcons", 111);
INSERT INTO Player VALUES(12, "Aaron Rodgers", 12, "QB", "Packers", 112);
INSERT INTO Player VALUES(13, "Kirk Cousins", 8, "QB", "Vikings", 113);
INSERT INTO Player VALUES(14, "Daniel Jones", 8, "QB", "Giants", 114);
INSERT INTO Player VALUES(15, "Derek Carr", 4, "QB", "Raiders", 115);
INSERT INTO Player VALUES(16, "Jacoby Brissett", 4, "QB", "Browns", 116);
INSERT INTO Player VALUES(17, "Tob Brady", 12, "QB", "Buccanerrs", 117);
INSERT INTO Player VALUES(18, "Tua Tungovailoa", 1, "QB", "Dolphins", 118);
INSERT INTO Player VALUES(19, "Jared Goff", 16, "QB", "Lions", 119);
INSERT INTO Player VALUES(20, "Jimmy Garoppolo", 10, "QB", "49ers", 120);
INSERT INTO Player VALUES(21, "Matt Ryan", 2, "QB", "Colts", 121);
INSERT INTO Player VALUES(22, "Russell Wilson", 3, "QB", "Broncos", 122);
INSERT INTO Player VALUES(23, "Andy Dalton", 14, "QB", "Saints", 123);
INSERT INTO Player VALUES(24, "Davis Mills", 10, "QB", "Texans", 124);
INSERT INTO Player VALUES(25, "Matthew Stafford", 9, "QB", "Rams", 125);
INSERT INTO Player VALUES(26, "Ryan Tannehill", 17, "QB", "Titans", 126);
INSERT INTO Player VALUES(27, "Mac Jones", 10, "QB", "Patriots", 127);
INSERT INTO Player VALUES(28, "Kenny Pickett", 8, "QB", "Steelers", 128);
INSERT INTO Player VALUES(29, "Dak Prescott", 4, "QB", "Cowboys", 129);
INSERT INTO Player VALUES(30, "Carson Wentz", 4, "QB", "Commanders", 130);
INSERT INTO Player VALUES(31, "Baker Mayfield", 14, "QB", "Panthers", 131);
INSERT INTO Player VALUES(32, "Zach Wilson", 2, "QB", "Jets", 132);


SELECT * FROM Player;
Select * from Team;
Select * FROM Stat_Line;
Select * from Division;
