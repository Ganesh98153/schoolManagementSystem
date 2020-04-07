<?php
$SCLASS=$_POST['sclass'];
echo $SCLASS;
$con=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql= "SELECT * FROM new_microsoft_excel_worksheet WHERE CLASS='$SCLASS'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ID</th>	<th>CLASS</th>	<th>SECTION</th>	<th>Roll No.</th>	<th>Name</th>	<th>Current Address</th>
    <th>Permanent Address</th>	<th>Contact No.</th>	<th>Guardian Name</th>	<th>Guardian Contact No.</th>
        <th>DOB</th>	<th>Email</th>	<th>Gender</th>	<th>Ethnic</th>	<th>Caste</th>	<th>FatherName</th>
        	<th>MotherName</th>	<th>ECD</th>	<th>Disabled</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> ". $row['ID'] . "</td>";	echo "<td> ". $row['CLASS'] . "</td>";	echo "<td> ". $row['SECTION'] . "</td>";	echo "<td> ". $row['Roll No.'] . "</td>";	echo "<td> ". $row['Name'] . "</td>";	echo "<td> ". $row['Current Address'] . "</td>";	echo "<td> ". $row['Permanent Address'] . "</td>";	echo "<td> ". $row['Contact No.'] . "</td>";	echo "<td> ". $row['Guardian Name'] . "</td>";	echo "<td> ". $row['Guardian Contact No.'] . "</td>";	echo "<td> ". $row['DOB'] . "</td>";	echo "<td> ". $row['Email'] . "</td>";	echo "<td> ". $row['Gender'] . "</td>";	echo "<td> ". $row['Ethnic'] . "</td>";	echo "<td> ". $row['Caste'] . "</td>";	echo "<td> ". $row['FatherName'] . "</td>";	echo "<td> ". $row['MotherName'] . "</td>";	echo "<td> ". $row['ECD'] . "</td>";	echo "<td> ". $row['Disabled'] . "</td>";


echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>