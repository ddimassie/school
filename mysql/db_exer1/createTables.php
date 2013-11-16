<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>db_exer1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  
include('connectDB.php');


// Create table STUDENT
$student ="CREATE TABLE STUDENT(STUDENT_ID INT NOT NULL AUTO_INCREMENT,
	NAME VARCHAR(255) NOT NULL,
	COURSE VARCHAR(255) NOT NULL,
	GENDER ENUM('F','M') NOT NULL,
	SCIENCE FLOAT,
	MATH FLOAT 
	PRIMARY KEY(STUDENT_ID),
	KEY `NATIONALITY_ID_idx` (`NATIONALITY_ID`),
  CONSTRAINT `nationality_id` FOREIGN KEY (`NATIONALITY_ID`) REFERENCES `student` (`NATIONALITY_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION

	)";

mysqli_query($con, $student) or die("Error on create the table".mysql_error());
	echo "Table Created!";
if (mysqli_query($con,$student))
  {
  echo "Table student_info created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
  
  // Create table NATION
$nation =" CREATE TABLE `nation` (
  `NATIONALITY_ID` int(11) NOT NULL,
  `NATIONALITY` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
   PRIMARY KEY (`NATIONALITY_ID`)
   CONSTRAINT `nation_ibfk_1` FOREIGN KEY (`NATIONALITY_ID`) REFERENCES `student` (`NATIONALITY_ID`),
	)";

mysqli_query($con, $nation) or die("Error on create the table".mysql_error());
	echo "Table Created!";
if (mysqli_query($con,$nation))
  {
  echo "Table nation created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

 


?>
</body>
</html>