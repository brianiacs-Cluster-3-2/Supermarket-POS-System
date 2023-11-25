<?php
include 'BusinessInfo.php';
include './Connection/Sup_Disp_Conn.php';

if (isset($_POST['submit'])) {
    $BusinessName = $_POST['BusinessName'];
    $TagLine = $_POST['TagLine'];
    $BusinessAddress = $_POST['BusinessAddress'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $website = $_POST['website'];

    // Perform form validation
    if (empty($BusinessName) || empty($TagLine) || empty($BusinessAddress) || empty($Mobile) || empty($Email) || empty($website)) {
        echo 'Please fill in all fields';
    } else {
        // Sanitize input data to prevent SQL injection
        $BusinessName = mysqli_real_escape_string($conn, $BusinessName);
        $TagLine = mysqli_real_escape_string($conn, $TagLine);
        $BusinessAddress = mysqli_real_escape_string($conn, $BusinessAddress);
        $Mobile = mysqli_real_escape_string($conn, $Mobile);
        $Email = mysqli_real_escape_string($conn, $Email);
        $website = mysqli_real_escape_string($conn, $website);

        $sql = "INSERT INTO `business_info` (BusinessName, TagLine, BusinessAddress, Mobile, Email, website) 
                VALUES ('$BusinessName', '$TagLine', '$BusinessAddress', '$Mobile', '$Email', '$website')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
