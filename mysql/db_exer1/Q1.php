<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  

include('connectDB.php');
// Question 1 from aggregate_class_ex_edited.docx
$q1 = mysqli_query($con, "select course, max(math) as math from student group by course") or die(mysqli_error());
echo "<p></p><table width='1000' border='0'>
<tr>
	<th>Course</th>
	<th>Math</th>	

</tr>";
// Print the data
while($row = mysqli_fetch_array($q1))
  {
  echo "<tr>";
  echo "<td>".$row['course']."</td>";
  echo "<td>".$row['math']."</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);

?>
</body>
</html>