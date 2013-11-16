<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q5</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  

include('connectDB.php');
// Question 3 from aggregate_class_ex_edited.docx
$q5 = mysqli_query($con, "select gender as GENDER, SUM(MATH) as SCIENCE from student group by gender") or die(mysqli_error());

echo "<p></p><table width='1000' border='0'>";
// Print the data
while($row = mysqli_fetch_row($q5))
  {
  echo "<tr>";
  echo "<td>".$row[1]." – Sum of math grade for all student of the ".$row[0]." gender.</td>";  
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);

?>
</body>
</html>