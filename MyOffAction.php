
<?php
$con=mysqli_connect("localhost", "root", "", "eplanner");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM createoffer");

					
             
                while($row = mysqli_fetch_array($result))
                	{
                     
                     echo "<tr>";
                     echo "<td>" . $row['s_business'] . "</td>";
                     echo "<td>" . $row['O_name'] . "</td>";
                     echo "<td>" . $row['discount'] . "</td>";
                     echo "<td>" . $row['s_date'] . "</td>";
                     echo "<td>" . $row['e_date'] . "</td>";
                     echo "<td>" . $row['description'] . "</td>";
                     echo "</tr>";
                     }
              
                

 ?>
