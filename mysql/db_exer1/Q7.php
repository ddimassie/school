<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q7</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 


include('connectDB.php');
// Question 7 from aggregate_class_ex_edited.docx
$q7 = mysqli_query($con, "select course, avg(SCIENCE) as SCIENCE from student group by course;");

echo "<p></p><table width='1000' border='0'>";
// Print the data
while($row = mysqli_fetch_row($q7))
  {
  echo "<tr>";
  echo "<td>".$row[0]." – Average Science Grade is ".round($row[1],2);  
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);

mysqli_close($con);

?>
</body>
</html>