<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO userinfodata (name, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully ";
        
        // Display the new record details
        echo "<h2>New Record Created</h2>";
        echo "<p>Username: $user</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Mobile: $mobile</p>";
        echo "<p>Comment: $comment</p>";

        // Display the "Go Back to Home" button
        echo "<form action='Webstie1.php' method='POST'>";
        echo "<input type='hidden' name='username' value='$user'>";
        echo "<button type='submit'>Go Back to Home</button>";
        echo "</form>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
