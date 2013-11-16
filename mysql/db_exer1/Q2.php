<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q2</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  

include('connectDB.php');
// Question 2 from aggregate_class_ex_edited.docx
$q9 = mysqli_query($con, "select count(*) from student;");
$row= mysqli_fetch_row($q9);
echo "There are ".$row[0]." students in the student’s record.";

mysqli_close($con);

?>
</body>
</html>