
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details Page</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
<h1 class="logo"><img src="logo-transparent-png.png" alt="Business Logo"></h1>
    <h2>Employee Details Page</h2>

    <table border="1">
        <th>Employeeid</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Hours</th>

<?php
include("database.php");

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Employeeid"] . "</td>";
        echo "<td>" . $row["Firstname"] . "</td>";
        echo "<td>" . $row["Lastname"] . "</td>";
        echo "<td>" . $row["Hours"] . "</td>";
        echo "</tr>";}
} else {
    echo"<tr><td colsplan='4'>No records Found.</td><tr>";
}

mysqli_close($conn);


?>
</table>

<footer>
    <p>&copy; 2023 GREEN BOUNTY DEPOT. All rights reserved.</p>
</footer>
</body>
</html>