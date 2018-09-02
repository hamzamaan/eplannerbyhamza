
<?php
$con=mysqli_connect("localhost", "root", "", "eplanner");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM addbusiness");

					
             
                while($row = mysqli_fetch_array($result))
                	{
                     
                     echo "<tr>";
                     
                     echo "<td>" . $row['b_name'] . "</td>";
                     echo "<td>" . $row['city'] . "</td>";
                     echo "<td>" . $row['area'] . "</td>";
                     echo "<td>" . $row['location'] . "</td>";
                     echo "<td>" . $row['open_days'] . "</td>";
                     echo "<td>" . $row['services'] . "</td>";
                     echo "<td>" . $row['b_charges'] . "</td>";
                     echo "<td>" . $row['b_contact'] . "</td>";
                     echo "</tr>";
                     }
              
                

 ?>



