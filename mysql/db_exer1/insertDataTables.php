<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>db_exer1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  
include('connectDB.php');

//Select Database
mysqli_select_db($con, 'nationality') or die("Unable to select the database".mysql_error());
   echo "Database selected!<br/>";

// INSERT DATA TO THE TABLE STUDENT
mysqli_query($con,"INSERT INTO `student` VALUES 																
				(1001,'Sandy','IT','M',81.3,89.1),
				(1002,'Mike','IT','M',91.2,76.25),
				(1003,'Xyril','Nursing','F',95.6,80),
				(1004,'Alfred','Nursing','M',92.4,79.7),
				(1005,'Xelene','Accounting','F',88.1,85.3),
				(1006,'Xarah','Accounting','F',78.35,82.7),
				(1007,'Jessie','Nursing','M',84.8,93.6)");

// INSERT DATA TO THE TABLE NATIONALITY
mysqli_query($con,"INSERT INTO `nationality` VALUES
				 (1,'Brazilian','Sandy'),
				 (2,'Polish','Mike'),
				 (3,'Polish','Xyril'),
				 (4,'Thai','Alfred'),
				 (5,'Polish','Xelene'),
				 (6,'Filipino','Xarah'),
				 (7,'Brazilian','Jessie')");


?>
</body>
</html>