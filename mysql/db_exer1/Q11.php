<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q11</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 


include('connectDB.php');
// Question 10 from aggregate_class_ex_edited.docx
$q10 = mysqli_query($con, "select nation.NAME, nation.NATIONALITY, min(student.SCIENCE) AS SCIENCE FROM student, nation  WHERE  nation.NATIONALITY_ID = student.STUDENT_ID GROUP BY nation.NATIONALITY;
") or die(mysqli_error());
echo "<p></p><table width='1000' border='0'>
<tr>
	<th>Name</th>
	<th>Nationality</th>	
	<th>Min Science Grade</th>	

</tr>";
// Print the data
while($row = mysqli_fetch_array($q10))
  {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

?>
</body>
</html>