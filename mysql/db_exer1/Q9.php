<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q9</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 


include('connectDB.php');
// Question 9 from aggregate_class_ex_edited.docx
$q9 = mysqli_query($con, "select NATIONALITY, count(*) as OCCURRENCES from nation group by nationality;
");

echo "<p></p><table width='1000' border='0'>";
// Print the data
while($row = mysqli_fetch_row($q9))
  {
  
  echo "<tr>";
  echo "<td> There are ".$row[1]." ".$row[0]."(s) in the record.";  
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);

mysqli_close($con);

?>
</body>
</html>