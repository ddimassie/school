<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>db_exer1</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  
// Create connection
$con = mysqli_connect("localhost", "kent","123456");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	echo "Connected to Database Server! <br />";

}

//Select Database
mysqli_select_db($con, 'BOOK') or die("Unable to select the database".mysql_error());
   echo "Database selected!<br/>";

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
mysqli_close($con);

?>
</body>
</html>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>