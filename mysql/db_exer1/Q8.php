<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q8</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 


include('connectDB.php');
// Question 8 from aggregate_class_ex_edited.docx
$q8 = mysqli_query($con, "select  COUNT(*) AS OCCURRENCES, GENDER from student group by gender;
");

echo "<p></p><table width='1000' border='0'>";
// Print the data
while($row = mysqli_fetch_row($q8))
  {
  if($row[1] == 'M'){
	  $row[1] = 'males';	  
	  }
  else{
	  $row[1] = 'females';
	  }
  echo "<tr>";
  echo "<td> There are ".$row[0]." ".$row[1]." students.";  
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);

mysqli_close($con);

?>
</body>
</html>