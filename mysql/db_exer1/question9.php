<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>db_exer1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  
// Create connection
$con = mysqli_connect("localhost", "kent","123456");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	echo "Connected to Database Server! <br />";

}

//Select Database
mysqli_select_db($con, 'BOOK') or die("Unable to select the database".mysql_error());
   echo "Database selected!<br/>";

// Question 9 from db_exer1.docx
$title3="Updated Return Date";
$qust9 = mysqli_query($con,"UPDATE BOOK SET `Date` = '13/05/18' WHERE Title LIKE '%Cooking 101%' ");
$try1 = mysqli_query($con,"SELECT * FROM BOOK");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title3."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($try1)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
</body>
</html>