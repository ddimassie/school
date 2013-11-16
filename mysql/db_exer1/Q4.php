<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q4</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  

include('connectDB.php');
// Question 3 from aggregate_class_ex_edited.docx
$q4 = mysqli_query($con, "select course, avg(math) as math from student where course ='Accounting';") or die(mysqli_error());
$row = mysqli_fetch_row($q4);
echo $row[0]." Course – Average math Grade is ".round($row[1],2);
mysqli_close($con);

?>
</body>
</html>