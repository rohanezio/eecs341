<?php
$servername = 'localhost:3306';
$username = 'group15';
$password = 'Group_15';
$dbname = 'clubs';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $type   = strval($_POST["typeList"]);
	$name	= strval($_POST["name"]);
  $year   = strval($_POST["yearList"]);
  $president  = strval($_POST["president"]);
  $pyear = strval($_POST["pYearList"]);
  $vicePresident   = strval($_POST["vicePresident"]);
  $vpyear = strval($_POST["vYearList"]);
  $treasurer  = strval($_POST["treasurer"]);
  $tyear = strval($_POST["tYearList"]);
  $riskManager   = strval($_POST["riskManager"]);
  $rmyear = strval($_POST["rYearList"]);
  $advisor   = strval($_POST["advisor"]);
  $id = uniqid();
  $pid = uniqid(p);
  $vid = uniqid(v);
  $tid = uniqid(t);
  $rid = uniqid(r);


	$sql = "insert into club(clubID, name, type, memberNumber) values('$id', '$name', '$type')";      //don't know how to do count
  $sql = "insert into execTeam(clubID, year, president, vicePresident, treasurer, riskManager, advisor) values('$id', '$year', '$pid', '$vid', '$tid', '$rid', '$advisor')";
	$sql = "insert into member(studentID, clubID, name, year) values('$pid', '$id', '$president', '$pyear')";
  $sql = "insert into member(studentID, clubID, name, year) values('$vid', '$id', '$vicePresident', '$vpyear')";
  $sql = "insert into member(studentID, clubID, name, year) values('$tid', '$id', '$treasurer', '$tyear')";
  $sql = "insert into member(studentID, clubID, name, year) values('$rid', '$id', '$riskManager', '$rmyear')";



	if (mysqli_query($conn, $sql)) {
		header('Location: addResult.html');
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);

?>