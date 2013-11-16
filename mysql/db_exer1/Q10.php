<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q10</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 


include('connectDB.php');
// Question 10 from aggregate_class_ex_edited.docx
$q10 = mysqli_query($con, "select nation.NAME, COURSE, NATIONALITY FROM NATION, STUDENT WHERE student.STUDENT_ID = nation.NATIONALITY_ID;") or die(mysqli_error());
echo "<p></p><table width='1000' border='1'>
<tr>
	<th>Name</th>
	<th>Course</th>	
	<th>Nationality</th>	

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