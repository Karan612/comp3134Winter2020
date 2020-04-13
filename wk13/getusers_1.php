<form method="GET">
    <input type=text name=fname>
    <input type=submit name=submit value="Submit">
</form>

<?php
$connection=mysqli_connect("localhost","admin","admin","interface");

if (mysqli_connect_errno())
    echo "Error! Cannot connect to Database: " . mysqli_connect_error();

if (isset($_GET["submit"])){
   $result=mysqli_query($connection, "SELECT * FROM users WHERE firstname = '" . $_GET['fname'] . "' AND active = 1"); 
    echo "<table cellspacing='5' border='3' cellpadding='5'>
    <tr>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
mysqli_close($con);

?>