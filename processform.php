<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Employeeid = filter_input(INPUT_POST, "Employeeid", FILTER_VALIDATE_INT);
    $Firstname = filter_input(INPUT_POST, "Firstname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Lastname = filter_input(INPUT_POST, "Lastname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Hours = filter_input(INPUT_POST, "Hours", FILTER_VALIDATE_INT);

    if ($Employeeid !== false && $Firstname !== null && $Lastname !== null && $Hours !== false) {
        // All input values are valid, you can proceed to use them

        include("database.php");

        // Insert the data into the database
        $insertSql = "INSERT INTO employee (Employeeid, Firstname, Lastname, Hours) VALUES ('$Employeeid', '$Firstname', '$Lastname', '$Hours')";
        $insertResult = mysqli_query($conn, $insertSql);

  
        if ($insertResult) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        // Handle invalid input 
        echo "Invalid input. Please check the entered values.";
    }
}

// Redirect to view.php
header("Location: view.php");
exit();
?>
