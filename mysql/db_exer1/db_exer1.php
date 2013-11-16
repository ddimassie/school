<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>db_exer1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  
// Create connection
$con = mysqli_connect("localhost", "kent","123456", "kent");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	echo "Connected to Database Server! <br />";

}

//Select Database
mysqli_select_db($con, 'kent') or die("Unable to select the database".mysql_error());
   echo "Database selected!<br/>";


// Create table
/*
$book="CREATE TABLE BOOK(BOOK_ID INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(BOOK_ID),
	`Title` VARCHAR(255),
	`Author` VARCHAR(255),
	`Book Price in AUD$` INT,
	`Borrower ID` VARCHAR(255),
	`Date` DATE
	)";

mysqli_query($con, $book) or die("The create the table".mysql_error());
	echo "Table Created!";
if (mysqli_query($con,$book))
  {
  echo "Table student_info created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

// INSERT DATA TO THE TABLE
mysqli_query($con,"INSERT INTO BOOK (Title, Author, `Book Price in AUD$`, `Borrower ID`, `Date`)
VALUES ('Dreamweaver A+', 'Lory Grace Sacol', 65, 'Stud03', '13/05/14')");

mysqli_query($con,"INSERT INTO BOOK (Title, Author, `Book Price in AUD$`, `Borrower ID`, `Date`)
VALUES ('Adobe Flash for Games', 'Giovanni Montesa', 70, 'Stud02',	'13/05/23')");

mysqli_query($con,"INSERT INTO BOOK (Title, Author, `Book Price in AUD$`, `Borrower ID`, `Date`)
VALUES ('Adobe Flash for Web',	'Jessie Ayala', 45, 'Stud02', '13/06/20')");

mysqli_query($con,"INSERT INTO BOOK (Title, Author, `Book Price in AUD$`, `Borrower ID`, `Date`)
VALUES ('Cooking 101', 'Charmaine Garcia', 35, 'Stud01', '13/03/18')");*/

// Question 5 from db_exer1.docx
$qust5 = mysqli_query($con, "SELECT * FROM BOOK") or die(mysql_error());
//$result = mysqli_fetch_array($show) or die("Unable to fetch the table".mysql_error());
$title="ABC Borrowed Books";
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title."</th></tr>";
/*<tr>
<th>Title</th>
<th>Author</th>
<th>Book Price in AUD$</th>
<th>Borrower ID</th>
<th>Date</th>
</tr>";*/

// Print the data
while($row = mysqli_fetch_row($qust5)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";


// Question 6 from db_exer1.docx

$qust6 = mysqli_query($con,"SELECT * FROM BOOK
WHERE Author LIKE '%Ayala%'");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($qust6)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

// Question 7 from db_exer1.docx
$title1="ABC Library’s Adobe Books";
$qust7 = mysqli_query($con,"SELECT * FROM BOOK
WHERE Title LIKE '%Adobe%'");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title1."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($qust7)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";
  
// Question 8 from db_exer1.docx
$title2="ABC Library’s Books Sorted by Price";
$qust8 = mysqli_query($con,"SELECT * FROM book ORDER BY `Book Price in AUD$` DESC");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title2."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($qust8)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";
 
// Question 9 from db_exer1.docx
$title3="Updated Return Date";
$qust9 = mysqli_query($con,"UPDATE BOOK SET `Date` = '13/05/18' WHERE Title LIKE '%Cooking 101%' ");
$try1 = mysqli_query($con,"SELECT * FROM BOOK");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title3."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($try1)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";
 
// Question 10 from db_exer1.docx
$title4="Stud02’s Borrowed Books";
$qust10 = mysqli_query($con,"select * from book where `Borrower ID` like '%Stud02%'");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title4."</th></tr>";
// Print the data
while($row = mysqli_fetch_row($qust10)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";
  
// Question 11 from db_exer1.docx
$title5="Table Update – Publisher";
$qust11 = mysqli_query($con,"ALTER TABLE BOOK ADD Publisher VARCHAR(255)");
$try = mysqli_query($con,"SELECT * FROM BOOK");
// Print the column names as the headers of a table
echo "<p></p><table width='1000' border='0'><tr>";
for($i = 0; $i < mysqli_num_fields($try); $i++) {
    $field_info = mysqli_fetch_field($try);
    echo "<th>".$field_info->name."</th>";
}

// Print the data
while($row = mysqli_fetch_row($try)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

// Question 12 from db_exer1.docx
$title6="Table Update – Publisher";
$qust12 = mysqli_query($con,"ALTER TABLE BOOK DROP `Date`");
$try2 = mysqli_query($con,"SELECT * FROM BOOK");
// Print the column names as the headers of a table
echo "<p></p><table width='1000' border='0'><tr>";
for($i = 0; $i < mysqli_num_fields($try2); $i++) {
    $field_info = mysqli_fetch_field($try2);
    echo "<th>".$field_info->name."</th>";
}

// Print the data
while($row = mysqli_fetch_row($try2)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

// Question 13 from db_exer1.docx
$title7=": Lost Book – New List";
$qust13 = mysqli_query($con,"DELETE FROM BOOK WHERE Author LIKE '%Lory Grace Sacol%' ");
$try3 = mysqli_query($con,"SELECT * FROM BOOK");
echo "<p></p><table width='1000' border='0'>
<tr><th colspan=\"7\">".$title7."</th></tr>";

// Print the data
while($row = mysqli_fetch_row($try3)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";
mysqli_close($con);


mysqli_close($con);


	
?>

</body>
</html>