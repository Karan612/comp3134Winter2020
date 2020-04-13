<form method="GET">
    <input type=text name=fname>
    <input type=submit name=submit value="Submit">
</form>

<?php
$connection=mysqli_connect("localhost","admin","admin","interface");

if (mysqli_connect_errno())
    echo "Error! Cannot connect to Database: " . mysqli_connect_error();

if (isset($_GET["submit"])){
    $active = 1;
    $fname = $_GET["fname"];
    $query = "SELECT * FROM users WHERE firstname = ? AND active = ?";
    $stmt = $con->prepare($query); 
    $stmt->bind_param("sss", $fname, $active);
    $stmt->execute();
    $result = $stmt->get_result();
 
    echo "<table cellspacing='5' border='3' cellpadding='5'>
    <tr>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    </tr>";

    while($row = $result->fetch_assoc())
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