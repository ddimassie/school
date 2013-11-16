<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Q6</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 
/*6.	Count how many Brazilian students are there in the student’s record.

Output like: 
7. TOTAL NUMBER OF BRAZILIAN STUDENTS
There are (NO. OF BRAZILIAN STUDENTS) Brazilians in the record.

*/ 

include('connectDB.php');
// Question 6 from aggregate_class_ex_edited.docx
$q6 = mysqli_query($con, "select count(*) as NATIONALITY from nation WHERE NATIONALITY='Brazilian';
");

// Print the data
$row = mysqli_fetch_row($q6);
echo "There are ".$row[0]." Brazilians in the record.";

mysqli_close($con);

?>
</body>
</html>