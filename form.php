<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// POST REQUEST FOR STUDENTS

if (isset($_POST["submitbtn"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];
    
  
    echo "<div> name:" . $name . "</div>";
    echo "<div> email:" . $email . "</div>";
    echo "<div> comments:" . $comments . "</div>";
    
// Performing insert query execution --here our table name is...
$sql = "INSERT INTO  user (name,email,comments) VALUES ('$name','$email','$comments')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
   
?>